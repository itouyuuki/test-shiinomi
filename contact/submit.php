<?php
session_start();
require_once 'contact_def.php';
require_once 'formlib.php';
$_SESSION['nonce'] = createNonce();
$base = '..';
require_once $base . '/meta.php';
$title = '送信完了';
$description = '上田しいのみ会のお問い合わせフォームです。お気軽にお問い合わせください。';
$local_path = '/contact/'; // サイトのルートからのパスを記入
$og_image = $base . '/ogp.jpg';
$result = submit_fun();
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
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
</head>
<body>
<?php include_once $base . '/header.php'; ?>
<main id="main-contents">
<section id="submit">
        <p class="mozi">お問い合わせ</p>
        <h1>送信完了</h1>
    <?php mail_content($result); ?>
	</div>
    <div class="btn-2 contact_button">
        <a href="<?= $base ?>" class="to-top">トップページへ</a>
    </div>
</section>
</main>
<?php include_once $base . '/footer.php'; ?>
</body>
</html>