<?php
/* フォーム共通ライブラリ */

// タイムゾーンを設定
date_default_timezone_set('Asia/Tokyo');

// 文字列のエスケープ処理
function h($str) {
	return htmlspecialchars($str, ENT_HTML5 | ENT_QUOTES, 'UTF-8');
}

// confirm.php
function confirm_fun() {
	$err = [];
	
	// POST送信でない場合、リダイレクト
	if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
		header('Location: index.php', true, 303);
		exit;
	}

	// nonce のチェックと更新
	$checkNonce = checkNonce($_POST['code']);
	$err = array_merge($err, $checkNonce);
	$_SESSION['nonce'] = createNonce();

	// 入力項目の基本的なエラーチェック
	$err = check_validity($_POST, INPUT_LIST);

	// エラーがあった場合はエラー表示
	if (count($err) > 0) {
		foreach ($err as $e) {
		echo "$e\n";
		exit;
		}
	}
	
	if (! DEBUG) {
        /* RECAPTCHAによる検証 */
        $recaptcha_code = $_POST['g-recaptcha-response'];
        if (empty($recaptcha_code)) {
          $err[] = '画面遷移が不正です。';
        } else {
          $secret_recaptcha_code = RECAPTCHA_SECRET_CODE;
          $url = "https://www.google.com/recaptcha/api/siteverify?secret={$secret_recaptcha_code}&response={$recaptcha_code}";
          $res = file_get_contents($url);
          if (empty($res)) {
            $err[] = 'reCAPTCHAの検証に失敗しました。';
          } else {
            $res_result = json_decode($res, true);
            if ($res_result['success'] === false) {
              $err[] = 'reCAPTCHAの検証に問題があります。' . implode(',', $res_result['error-codes']);
            }
          }
        }
      }
}

// submit.php
function confirm_list() {
	?><dl class="form_list"><?php 
	foreach (INPUT_LIST as $rule) {
		?><div><dt><?= $rule['label'] ?></dt><dd><?php
		$normalized_name = replaceBracket($rule['name']);  // name 属性の正規化
		$value = empty($_POST[$normalized_name]) ? NO_INPUT : $_POST[$normalized_name];
		if (is_array($value)) {
			// 配列の場合
			foreach ($value as $v) {
				?><input type="hidden" name="<?= $rule['name'] ?>[]"  value="<?= h($v) ?>"><?php
			}
			echo nl2br(h(implode("\r\n", $value)));
		} else {
			// スカラー値の場合
			?><input type="hidden" name="<?= $rule['name'] ?>" value="<?= h($value) ?>"><?= nl2br(h($value)) ?><?php
		}
		?></dd></div><?php
	}
	?></dl>
	<input type="hidden" name="from" value="<?= h($_POST['from'] ?? '') ?>"><?php
}

function mail_content($result) { ?>
    <div>
	<?php // メール画面
	foreach ($result['message'] as $m) {
		?><p class="text"><?= nl2br($m) ?></p><?php
	}
	if (DEBUG) {
		if (isset($result['mail1'])) {
			?><h3>デバッグ: 送信したメール1</h3>
			<pre><?= h($result['mail1']) ?></pre><?php
		}
		if (isset($result['mail2'])) {
			?><h3>デバッグ: 送信したメール2</h3>
			<pre><?= h($result['mail2']) ?></pre><?php
		}
	}
	?></div><?php
}

function submit_fun() {
	$err = [];
	$result = [];

	// POST送信でない場合、リダイレクト
	if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
		header('Location: index.php', true, 303);
		exit;
	}

	// nonce のチェック
	$checkNonce = checkNonce($_POST['code']);
	$err = array_merge($err, $checkNonce);
	unset($_SESSION['nonce']);

	// 入力項目の基本的なエラーチェック
	$err = check_validity($_POST, INPUT_LIST);

	// エラーがあった場合はエラー表示
	if (count($err) > 0) {
		foreach ($err as $e) {
			echo "$e\n";
			exit;
		}
	}

	// メール送信
	mb_language(MAIL_LAN);
	mb_internal_encoding(MAIL_CODE);

	$result['message'] = [];

	// フォーム部分のメールを作成
	$form_body = "-----\r\n";
	foreach (INPUT_LIST as $rule) {
		$normalized_name = replaceBracket($rule['name']);
		$v = $_POST[$normalized_name];
		if (is_array($v)) {
			$v = implode("\r\n", $v);
		}
		$form_body .= "【{$rule['label']}】\r\n{$v}\r\n";
	}


	$mail_main = MAIL_MAIN;
	$domain = DOMAIN;
	$subject = SUBJECT;
	$tomail_main = TOMAIL_MAIN;
	$tomail_sub = TOMAIL_SUB;
	$text_code = TEXT_CODE;
	$mail_lan = MAIL_LAN;
	$mail_code = MAIL_CODE;
	$company_name = COMPANY_NAME;

	//サイトオーナーメールアドレス
	$facility_name = $_POST['facility-name'] ?? '';
	$contact_facility = $_POST['from'] ?? '';
	$company_mail = COMPANY_MAIL[$contact_facility] ?? COMPANY_MAIL['other'];
	if (empty($company_mail)) {
		$company_mail = COMPANY_MAIL['other'];
	}

	// サイト→サイトオーナーのメールを作成
	$mime_sender_name = mb_encode_mimeheader($company_name, $text_code);
	$from = "no-reply@{$domain}";
	$to = $company_mail;
	$reply = @$_POST['email'] ?? '';
	$bcc = BCC;
	$options = "-f $from";


	// ヘッダー
	$header =<<< EOM
	From: {$mime_sender_name} <{$from}>
	BCC: {$bcc}
	Reply-To: {$reply}
	EOM;

	// メール本文
	$message = <<< EOM
	{$mail_main}

	{$form_body}
	EOM;
	$message = brReplace(periodReplace($message));

	//メールの件名
	if($facility_name === 'その他') {
		$from_facility = 'ホームページから';
	} else {
		$from_facility = "{$facility_name}へ";
	}

	// メールの送信処理
	if (! DEBUG) {
		// メールを送信
		$res1 = mb_send_mail($to, SUBJECT, $message, $header, $options);
	} else {
		// デバッグ時はメールを送信せずに保存
		$result['mail1'] =<<< EOM
		Subject: 【{$from_facility}{$subject}】
		To: {$to}

		{$header}

		{$message}
		EOM;
		$res1 = true;
	}

	if ($res1) {
		$result['message'][] = MAIN_MESSAGE;
	} else {
		$result['message'][] = ERR_MESSAGE;
	}

	/* サイト→お問い合わせ者のメール */
	$to = @$_POST['email'];
	$reply = $company_mail;
	$header =<<< EOM
	From: {$mime_sender_name} <{$from}>
	BCC: {$bcc}
	EOM;

	if ($to != NO_INPUT) {
		// メール本文
		$message = <<< EOM
		{$tomail_main}

		{$form_body}

		{$tomail_sub}
		EOM;

		$message = brReplace(periodReplace($message));

		if (! DEBUG) {
			// メールを送信
			$res2 = mb_send_mail($to, SUBJECT, $message, $header, $options);
		} else {
			// デバッグ時はメールを送信せずに保存
			$result['mail2'] =<<< EOM
			Subject: 【{$from_facility}{$subject}】
			To: {$to}

			{$header}

			{$message}
			EOM;

			$res2 = true;
		}
	}
	return $result;
}



// 改行コードの置換
function brReplace($text) {
	$pattern = '/\r(?!\n)|(?<!\r)\n/';
	$text = preg_replace($pattern, "\r\n", $text);
	return $text;
}

// ピリオドの置換
function periodReplace($text) {
	$pattern = '/^\.\r$/m';
	$text = preg_replace($pattern, "..\r", $text);
	return $text;
}

// INPUT_LIST 内 nameキーに [] が付いたものを置換
function replaceBracket($str) {
	$pattern = '/\[([0-9]*)\]$/';
	$preg_name =  preg_replace($pattern, '', $str);
	return $preg_name;
}

// リプレイ攻撃の対策のためのnonce値の検証
function checkNonce($nonce) {
	$e = [];
	if(!isset($_SESSION['nonce'])) { 
		// nonceが設定されていない場合エラー表示
		$e[] = 'システムエラーです';
	} else if ($nonce != $_SESSION['nonce']) { 
		// hiddenフィールド上のnonceと生成したnonceのチェック
		$e[] = 'トークンエラーです。最初からやり直してください。';
	}
	return $e;
}

function createNonce() {
	// nonceの更新
	return 	random_int(1,999999999);
}

// 入力項目が正しいかどうかをチェック
function check_validity($params, $rules) {
	$e = [];
	foreach($rules as $r) {
		$normalized_name = replaceBracket($r['name']); // nameキーの正規化
    	// requiredがtrueでかつPOSTの値が空ならエラー表示
    	if ($r['required'] && empty($params[$normalized_name])) {
    		$e[] = "必須入力項目の {$r['label']} がありません。";
    	}
  	}
  	return $e;
}

// 施設情報の引継ぎ
function facility_selected() {
    $contact_facility = $_GET['from'] ?? '';
    
    $facility_map = [
        'shiinomien' => '上田しいのみ園',
        'tsumuginoie' => '上田市つむぎの家',
        'ryogoen' => 'しいのみ療護園',
        'shiinomi' => '椎の実',
        'muroganosato' => '特養・室賀の里',
        'day-service' => '室賀デイサービスセンター',
        'ikiikikaigo' => 'いきいき介護センター',
        'kawanishi' => 'かわにし',
		'' => 'その他',
    ];
        
	$selected_facility = $facility_map[$contact_facility] ?? '';

    foreach ($facility_map as $key => $facility_name) {
        $selected = ($facility_name === $selected_facility) ? ' selected' : '';?>
		<option<?= $selected ?>><?= h($facility_name) ?></option>
    <?php }
}