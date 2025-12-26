<?php
session_start();
require_once 'contact_def.php';
require_once 'formlib.php';
$_SESSION['nonce'] = createNonce();
$base = '..';
require_once $base . '/meta.php';
$title = 'お問い合わせ';
$description = '上田しいのみ会のお問い合わせフォームです。お気軽にお問い合わせください。';
$local_path = '/contact/'; // サイトのルートからのパスを記入
$og_image = $base . '/ogp.jpg';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<?php include_once $base . '/tracking.php' ?>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= "$title | $site_name" ?></title>
<meta name="description" content="<?= $description ?>">
<link rel="icon" href="<?= $base . $favicon ?>">  
<link rel="canonical" href="<?= $site_url . $local_path ?>">
<meta property="og:type" content="article">
<meta property="og:site_name" content="<?= $site_name ?>">
<meta property="og:url" content="<?= $site_url . $local_path ?>">
<meta property="og:title" content="<?= "$title | $site_name" ?>">
<meta property="og:description" content="<?= $description ?>">
<meta property="og:image" content="<?= $site_url . $og_image ?>">
<link rel="stylesheet" href="<?= $base ?>/common.css?v=1">
<link rel="stylesheet" href="./contactform.css?v=1">
<link href="https://fonts.googleapis.com/css2?family=BIZ+UDPGothic:wght@400;700&family=M+PLUS+Rounded+1c:wght@100;300;400;500;700;800;900&display=swap" rel="stylesheet">
<?php if (! DEBUG) { ?><script src="https://www.google.com/recaptcha/api.js"></script><?php } ?>
<script>
    function onSubmit(token) {
    if (document.getElementById("contact-form").reportValidity()) {
        document.getElementById("contact-form").submit();
        }
    }
</script>
</head>
<body>
<?php include_once $base . '/header.php'; ?>
<main>
<section class="contactform" id="main-contents">
    <h1>お問い合わせ</h1>
    <p class="text">下記のフォームから、お気軽にお問い合わせください。</p>
    <form id="contact-form" action="confirm.php" method="post">
        <dl>
            <div>
                <dt><span class="l_required">必須</span><label for="facility-name">お問い合わせ<span class="bp">施設名</span></label></dt>
                <dd>
                    <select name="facility-name" id="facility-name">
                        <?php facility_selected(); ?>
                    </select>
                </dd>
            </div>
            <div>
                <dt>
                    <!-- labelのfor属性とinputのid属性を同じにすることで、テキストを押しても記入される -->
                    <span class="l_required">必須</span><label for="name">お名前</label>
                </dt>
                <dd>
                    <input type="text" id="name" name="name" placeholder="例：山田太郎" required autocomplete="name">
                </dd>
            </div>
            <div>
                <dt>
                    <span class="l_required">必須</span><label for="name_reading">お名前（ふりがな）</label>
                </dt>
                <dd>
                    <input type="text" id="name_reading" name="name_reading" placeholder="例：やまだたろう" required>
                </dd>
            </div>
            <div>
                <dt>
                    <span class="l_required">必須</span><label for="tel">電話番号</label>
                </dt>
                <dd>
                    <input type="tel" id="tel" name="tel" placeholder="例：09012345678" autocomplete="tel" required>
                </dd>
            </div>
            <div>
                <dt>
                    <span class="l_required">必須</span><label for="email">メールアドレス</label>
                </dt>
                <dd>
                    <input type="email" id="email" name="email" placeholder="例：sample@sample.co.jp" requiredautocomplete="email">
                </dd>
            </div>
            <div>
                <dt>
                    <span class="l_required">必須</span><label for="message">お問い合わせ内容</label>
                </dt>
                <dd>
                    <textarea name="message" id="message" maxlength="1000" placeholder="ご自由にご記入ください" required></textarea>
                </dd>
            </div>
        </dl>
        <input type="hidden" name="code" value="<?= $_SESSION['nonce'] ?>">
        <input type="hidden" name="from" value="<?= h($_GET['from'] ?? '', ENT_QUOTES, 'UTF-8') ?>">
        <button type="submit" id="submitBtn" class="g-recaptcha btn-2 contact_button" data-sitekey="<?= RECAPTCHA_SITE_KEY ?>" data-callback="onSubmit" data-action="confirm">
            確認する
        </button>
    </form>
</section>
</main>
<?php include_once $base . '/footer.php'; ?>
</body>
</html>