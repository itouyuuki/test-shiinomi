<?php
$base = '.';
require_once $base . '/meta.php';
require_once $base . '/wp-get-news.php';
require_once $base . '/wp-get-blog.php';
$title = '社会福祉法人 上田しいのみ会｜長野県上田市';
$description = '上田しいのみ会は、障がいのある方や高齢の方が、地域の中で安心して暮らせるように支援する社会福祉法人です。９つの施設で構成されており、地域やボランティアの方々と共に、あたたかく開かれた福祉活動を続けています。';
$local_path = '/'; // サイトのルートからのパスを記入
$og_image = 'fv.jpg';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<?php include_once $base . '/tracking.php' ?>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= "$title" ?></title>
<meta name="description" content="<?= $description ?>">
<link rel="icon" href="<?= $base . $favicon ?>">
<link rel="canonical" href="<?= $site_url . $local_path ?>">
<meta property="og:type" content="website">
<meta property="og:site_name" content="<?= $site_name ?>">
<meta property="og:url" content="<?= $site_url . $local_path ?>">
<meta property="og:title" content="<?= "$title" ?>">
<meta property="og:description" content="<?= $description ?>">
<meta property="og:image" content="<?= $site_url . $local_path . $og_image ?>">
<link rel="stylesheet" href="<?= $base ?>/common.css?v=1">
<link rel="stylesheet" href="<?= $base ?>/top-style.css?v=1">
<link href="https://fonts.googleapis.com/css2?family=BIZ+UDPGothic:wght@400;700&family=M+PLUS+Rounded+1c:wght@100;300;400;500;700;800;900&display=swap" rel="stylesheet">
</head>
<body>
<?php include $base . '/header.php'; ?>
<main>
<section class="slides">
    <div class="catch-wr">
        <p>地域で育つ、福祉の木。</p>
        <p>共に支え、共に生きる社会へ</p>
    </div>
    <div class="slides-wr">
        <img src="past-fv.jpg" width="1900" height="600" alt="" class="slide active">
        <img src="ryogoen.jpg" width="2048" height="1536" alt="" class="slide">
        <img src="tsumuginoie.jpg" width="1417" height="796" alt="" class="slide">
        <img src="shiinomien.jpg" width="2048" height="1365" alt="" class="slide">
        <img src="fv-4.jpg" width="2048" height="1536" alt="" class="slide">
        <img src="fv-5.jpg" width="2048" height="1152" alt="" class="slide">
    </div>
    <button class="fv-btn" id="prevBtn">
        <img src="triangle.svg" alt="">
    </button>
    <button class="fv-btn" id="playPauseBtn">
        停止
    </button>
    <button class="fv-btn" id="nextBtn">
        <img src="triangle.svg" alt="">
    </button>
    <div class="dots" id="dotsContainer"></div>
    <div class="illust-wr">
        <img src="fv-women.png" alt="">
        <img src="fv-man.png" alt="">
    </div>
</section>
<section class="news boxes" id="main-contents">
    <div class="content">
        <h2>しいのみ通信</h2>
        <p>上田しいのみ会や、各施設からのお知らせをお届けします。</p>
        <a href="<?= $base ?>/wp/news/" class="btn-1">
            <p>もっと見る</p>
        </a>
    </div>
    <div class="wp-news">
        <?php include $base . '/wp-news.php' ?>
    </div>
</section>
<section id="about" class="boxes">
    <div class="inner">
        <div class="content">
            <p class="catch">
                <ruby>椎<rt>しい</rt></ruby>の木のように根を張り、<br>
                人を支える存在でありたい。
            </p>
            <p class="con">
                上田しいのみ会は、障がいのある方や高齢の方が、地域の中で安心して暮らせるように支援する社会福祉法人です。利用者一人ひとりが笑顔で、自分らしく生きられるように。地域やボランティアの方々と共に、あたたかく開かれた福祉活動を続けています。
            </p>
            <a href="" class="btn-1">
                <p>上田しいのみ会について</p>
            </a>
        </div>
        <div class="img-wr">
            <img src="top-about-1.jpg" alt="" class="big">
            <img src="top-about-2.jpg" alt="" class="small">
        </div>
    </div>
</section>
<section class="facility">
    <h2>施設紹介</h2>
    <div class="facility-list disability-support">
        <h3 class="facility-name-head">障害者支援施設</h3>
        <ul class="list">
            <li class="shiinomien">
                <a href="">
                    <div class="img-wr">
                        <img src="shiinomien.jpg" alt="">
                    </div>
                    <div class="btn-wr">
                        <h4>上田しいのみ園</h4>
                        <div class="toggle"></div>
                    </div>
                </a>
            </li>
            <li class="tsumuginoie">
                <a href="">
                    <div class="img-wr">
                        <img src="tsumuginoie.jpg" alt="">
                    </div>
                    <div class="btn-wr">
                        <h4>上田市つむぎの家</h4>
                        <div class="toggle"></div>
                    </div>
                </a>
            </li>
            <li class="ryogoen">
                <a href="">
                    <div class="img-wr">
                        <img src="ryogoen.jpg" alt="">
                    </div>
                    <div class="btn-wr">
                        <h4>しいのみ療護園</h4>
                        <div class="toggle"></div>
                    </div>
                </a>
            </li>
            <li class="shiinomi">
                <a href="">
                    <div class="img-wr">
                        <img src="ogp.jpg" alt="">
                    </div>
                    <div class="btn-wr">
                        <h4>椎の実</h4>
                        <div class="toggle"></div>
                    </div>
                </a>
            </li>
        </ul>
    </div>
    <div class="facility-list elderly-care">
        <h3 class="facility-name-head">高齢者福祉施設</h3>
        <ul class="list">
            <li class="muroganosato">
                <a href="">
                    <div class="img-wr">
                        <img src="muroganosato.jpg" alt="">
                    </div>
                    <div class="btn-wr">
                        <h4>特養・室賀の里</h4>
                        <div class="toggle"></div>
                    </div>
                </a>
            </li>
            <li class="day-service">
                <a href="">
                    <div class="img-wr">
                        <img src="day-service.jpg" alt="">
                    </div>
                    <div class="btn-wr">
                        <h4>室賀デイサービスセンター</h4>
                        <div class="toggle"></div>
                    </div>
                </a>
            </li>
            <li class="ikiikikaigo">
                <a href="">
                    <div class="img-wr">
                        <img src="ikiikikaigo.jpg" alt="">
                    </div>
                    <div class="btn-wr">
                        <h4>いきいき介護センター</h4>
                        <div class="toggle"></div>
                    </div>
                </a>
            </li>
        </ul>
    </div>
    <div class="facility-list consultation">
        <h3 class="facility-name-head">相談</h3>
        <ul class="list">
            <li class="kawanishi">
                <a href="">
                    <div class="img-wr">
                        <img src="kawanishi.jpg" alt="">
                    </div>
                    <div class="btn-wr">
                        <h4>かわにし</h4>
                        <div class="toggle"></div>
                    </div>
                </a>
            </li>
            <li class="chiikihoukatsushien">
                <a href="">
                    <div class="img-wr">
                        <img src="chiikihoukatsushien.jpg" alt="">
                    </div>
                    <div class="btn-wr">
                        <h4>地域包括支援センター</h4>
                        <div class="toggle"></div>
                    </div>
                </a>
            </li>
        </ul>
    </div>
</section>
<section class="blog">
    <div class="inner">
        <div class="content">
            <h2>しいのみ日和</h2>
            <div class="text">
                <p>
                    『しいのみ日和』は、上田しいのみ会の日々の出来事や、地域の皆さんとのふれあいをお届けするブログです。<br>
                    笑顔あふれる毎日を、少し覗いてみませんか？
                </p>
                <a href="" class="btn-1">
                    <p>もっと見る</p>
                </a>
            </div>
        </div>
        <div class="wp-blog">
            <?php include $base . '/wp-blog.php' ?>
        </div>
    </div>
</section>
<section class="recruit">
    <img src="top-recruit.jpg" alt="">
    <div class="inner">
        <div class="content">
            <h2 class="head-leaf">採用情報</h2>
            <p>
                人を想い、人に寄り添う。その気持ちが、福祉の第一歩です。<br>
                上田しいのみ会では、障がいのある方や高齢の方が笑顔で暮らせる場所を、地域と共に育てていく仲間を募集しています。
            </p>
            <a href="" class="btn-1">
                <p>採用情報を見る</p>
            </a>
        </div>
    </div>
</section>
</main>
<?php include $base . '/footer.php'; ?>
<script src="./slide.js"></script>
</body>
</html>