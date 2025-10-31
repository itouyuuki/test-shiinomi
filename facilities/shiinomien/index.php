<?php
$base = '../..';
$facility_base ='..';
require_once $base . '/meta.php';
$title = '上田しいのみ園＿施設紹介';
$description = '障害者支援施設上田しいのみ園〒386-0034上田市中之条801番地TEL:0268-27-3166FAX:0268-27-3175当施設は社会福祉法（障害者自立支援法）に基づく「障害者支援施設」です。障害のある大人の方に施設入所支援を行うとともに、通所・短期入所等を利用していただく施設です。';
$local_path = '/facilities/shiinomien/'; // サイトのルートからのパスを記入
$og_image = ''; 
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
<meta property="og:title" content="<?= $title ?>">
<meta property="og:description" content="<?= $description ?>">
<meta property="og:image" content="<?= $site_url . $local_path . $og_image ?>">
<link rel="stylesheet" href="<?= $base ?>/common.css?v=1">
<link rel="stylesheet" href="<?= $facility_base ?>/facilities.css?v=1">
<link href="https://fonts.googleapis.com/css2?family=BIZ+UDPGothic:wght@400;700&family=M+PLUS+Rounded+1c:wght@100;300;400;500;700;800;900&family=Zen+Maru+Gothic:wght@300;400;500;700;900&display=swap" rel="stylesheet">
</head>
<body class="shiinomien">
<?php include $base . '/header.php'; ?>
<main>
<div class="fasility-navi">
    <ul class="navi">
        <li><a href="#news">お知らせ</a></li>
        <li><a href="#blog">ブログ</a></li>
        <li><a href="#policy">運営方針</a></li>
        <li><a href="#work">作業風景</a></li>
        <li><a href="#event">行事風景</a></li>
        <li><a href="#fasility">施設概要</a></li>
        <li><a href="#business">事業の概要</a></li>
        <li><a href="#guide">ご利用案内</a></li>
        <li><a href="#fees">ご利用料金</a></li>
    </ul>
</div>
<div class="content">
    <details>
        <summary>このページの目次を見る</summary>
        <ul class="navi">
            <li><a href="#news">お知らせ</a></li>
            <li><a href="#blog">ブログ</a></li>
            <li><a href="#policy">運営方針</a></li>
            <li><a href="#work">作業風景</a></li>
            <li><a href="#event">行事風景</a></li>
            <li><a href="#fasility">施設概要</a></li>
            <li><a href="#business">事業の概要</a></li>
            <li><a href="#guide">ご利用案内</a></li>
            <li><a href="#fees">ご利用料金</a></li>
        </ul>
    </details>
    <section class="fv">
        <div class="inner">
            <hgroup>
                <p>障害者支援施設</p>
                <h1>上田しいのみ園</h1>
            </hgroup>
            <p class="access">
                〒386-0034<br>
                上田市中之条801番地<br> TEL:0268-27-3166　FAX:0268-27-3175
            </p>
        </div>
    </section>
    <section id="news"></section>
    <section id="blog"></section>
    <section id="policy"></section>
    <section id="work"></section>
    <section id="event"></section>
    <section id="fasility"></section>
    <section id="business"></section>
    <section id="guide"></section>
    <section id="fees"></section>
</div>
</main>
<?php include $base . '/footer.php'; ?>
<script src=""></script>
</body>
</html>