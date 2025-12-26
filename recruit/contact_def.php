<?php
// 投稿フォームで入力してもらう要素のname属性、labelタグの内容、require属性を全件登録します
// 下記のようにINPUT_LISTの[]内に登録していきます
/*例
「=>」の右側を''で挟んで登録します
required属性のみ''を使わないでください
required属性をつけた場合は「true」、つけなかったものには「false」と記入
必ず下記のように最後にコンマをつけてください
['name' => 'name属性', 'label' => 'label要素の内容', 'required' => true],
上から順に表示されます
*/
const INPUT_LIST = [
	['name' => 'details', 'label' => 'お問い合わせ項目', 'required' => true],
	['name' => 'name', 'label' => 'お名前', 'required' => true],
	['name' => 'email', 'label' => 'メールアドレス', 'required' => true],
	['name' => 'tel', 'label' => '電話番号', 'required' => false],
    ['name' => 'date1', 'label' => '第1希望日', 'required' => false],
    ['name' => 'date2', 'label' => '第2希望日', 'required' => false],
    ['name' => 'date3', 'label' => '第3希望日', 'required' => false],
    ['name' => 'time', 'label' => '折り返し希望時間', 'required' => false],
    ['name' => 'check', 'label' => 'きっかけ（複数選択可）', 'required' => false],
    ['name' => 'message', 'label' => 'お問い合わせ内容', 'required' => true],
];

// reCaptcha 関係のデータ
const RECAPTCHA_SITE_KEY = '';
const RECAPTCHA_SECRET_CODE = '';

// 入力がないときのメッセージ
const NO_INPUT = '（入力なし）'; 

// 予約完了画面のメッセージ
const MAIN_MESSAGE = 'お問い合わせありがとうございました。後ほど、担当者からご連絡させていただきます。';

// メールが正常に送れたときのメッセージ
const SUB_MESSAGE = 'お問い合わせをご指定のメールアドレスに送付いたしました。ご確認ください。';

// メールが送れなかったときのエラーメッセージ
const ERR_MESSAGE = 'お問い合わせメールの送信に失敗しました。お手数ですが、お電話にてお問い合わせをお願いいたします。';


// メール送信時に必要なデータ群
// 内部エラーが表示された際はかっこ内の数字とエラーコードが対応しています。
/*↓必須項目*/
const COMPANY_NAME = '';	// サイトオーナー会社名(1)
const COMPANY_MAIL = '';	// サイトオーナーメールアドレス(2)
const DOMAIN = ''; // ホームページのドメイン(3)
/* ↑必須項目 */

const BCC = 'form@nextreservation.jp';

// サイトオーナー及び閲覧者へのメールのsubject
const SUBJECT = '【ホームページからのお問い合わせ】';

// サイト→サイトオーナーへのメール本文
const MAIL_MAIN = '下記のようにお問い合わせがありました。内容をご確認の上、ご対応をよろしくお願いいたします。';

// サイト→お問い合わせ者へのメール本文
const TOMAIL_MAIN = 'この度はお問い合わせをいただき、ありがとうございます。下記の通り承りましたので、今一度ご確認ください。';

// サイト→お問い合わせ者へのメール文末
const TOMAIL_SUB = 'このメールアドレスは送信専用です。返信はできませんのでご了承ください。';

// メールヘッダーの文字コード
const TEXT_CODE = 'iso-2022-jp';

// メールの言語、文字コード
const MAIL_LAN = 'Japanese';
const MAIL_CODE = 'utf-8';


// デバッグモードの場合は true にする。リリース時は必ず false にすること
const DEBUG = true;