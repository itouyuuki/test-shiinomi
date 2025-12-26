<?php
$base = '../..';
$facility_base ='..';
require_once $base . '/meta.php';
$title = 'かわにし＿施設紹介｜上田しいのみ会';
$description = 'かわにしは、障がいのある方や高齢の方、そのご家族の相談に寄り添い、安心して暮らせる毎日を支える相談窓口です。介護保険の利用手続きのサポートや、介護サービスの内容のご案内、障がいに関する相談など、一人ひとりに合わせた支援を行っています。';
$local_path = '/facilities/kawanishi/'; // サイトのルートからのパスを記入
$og_image = 'fv.jpg';
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
<meta property="og:image" content="<?= $site_url . $local_path . $og_image ?>">
<link rel="stylesheet" href="<?= $base ?>/common.css?v=1">
<link rel="stylesheet" href="<?= $facility_base ?>/fac-low.css?v=1">
<link href="https://fonts.googleapis.com/css2?family=BIZ+UDPGothic:wght@400;700&family=M+PLUS+Rounded+1c:wght@100;300;400;500;700;800;900&family=Zen+Maru+Gothic:wght@300;400;500;700;900&display=swap" rel="stylesheet">
</head>
<body class="kawanishi">
<?php include $base . '/header.php'; ?>
<main class="navipage">
<div class="facility-navi">
    <ul class="navi">
        <li><a href="#news" class="btn-1">お知らせ</a></li>
        <li><a href="#blog" class="btn-1">ブログ</a></li>
        <li><a href="#facility" class="btn-1">施設概要</a></li>
    </ul>
</div>
<div class="content">
    <details>
        <summary>このページの目次を見る</summary>
        <ul class="navi">
            <li><a href="#news" class="btn-1">お知らせ</a></li>
            <li><a href="#blog" class="btn-1">ブログ</a></li>
            <li><a href="#facility" class="btn-1">施設概要</a></li>
        </ul>
    </details>
    <section class="outline">
        <div class="inner">
            <hgroup>
                <p class="consultation">相談</p>
                <h1>かわにし</h1>
            </hgroup>
            <p class="access">
                〒386-1541<br>
                上田市上室賀19番地<br>
                <span class="highlight">TEL</span><a class="call" href="tel:0268-75-8008">:0268-75-8008</a><span class="bp"><span class="highlight">FAX</span>:0268-75-8633</span>
            </p>
        </div>
        <div class="outline-content">
            <img src="fv.jpg" alt="" class="fv-image">
            <div class="inner">
                <h2>
                    困ったときの相談窓口
                </h2>
                <p class="text">
                    かわにしは、障がいのある方や高齢の方、そのご家族の相談に寄り添い、安心して暮らせる毎日を支える相談窓口です。<br>
                    介護保険の利用手続きのサポートや、介護サービスの内容のご案内、障がいに関する相談など、一人ひとりに合わせた支援を行っています。<br>
                    介護や福祉に関すること、どんなことでもお気軽にご相談ください。
                </p>
            </div>
        </div>
    </section>
    <section id="news">
        <hgroup class="content-head">
            <div class="head-wr">
                <h2>お知らせ</h2>
                <p class="before-line">しいのみ通信</p>
            </div>
        </hgroup>
    </section>
    <section id="blog">
        <hgroup class="content-head">
            <div class="head-wr">
                <h2>ブログ</h2>
                <p class="before-line">しいのみ日和</p>
            </div>
        </hgroup>
    </section>
    <section id="facility">
        <hgroup class="content-head">
            <div class="head-wr">
                <h2>施設概要</h2>
            </div>
        </hgroup>
        <img src="kawanishi-1.jpg" alt="" class="building">
        <table class="info-table">
            <tbody>
                <tr>
                    <th>事業所名</th>
                    <td colspan="2">かわにし</td>
                </tr>
                <tr>
                    <th>所在地</th>
                    <td colspan="2">上田市小泉769番地3</td>
                </tr>
                <tr>
                    <th>連絡先</th>
                    <td colspan="2">
                        （TEL）0268-75-8008 （FAX）0268-75-8633
                    </td>
                </tr>
            </tbody>
        </table>
    </section>
</div>
</main>
<?php include $base . '/footer.php'; ?>
</body>
</html>