<?php
$base = '../..';
$facility_base ='..';
require_once $base . '/meta.php';
$title = '地域包括支援センター＿施設紹介';
$description = '川西地域包括センターは、高齢者の方が住み慣れた地域で自分らしく暮らし続けられるように支援する場所です。生活のちょっとした困りごとや介護に関する相談、地域のサービス利用のサポートまで、幅広くお手伝いします。';
$local_path = '/facilities/chiikihoukatsushien/'; // サイトのルートからのパスを記入
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
<body class="chiikihoukatsushien">
<?php include $base . '/header.php'; ?>
<main class="navipage">
<div class="facility-navi">
    <ul class="navi">
        <li><a href="#news" class="btn-1">お知らせ</a></li>
        <li><a href="#support" class="btn-1">
            <p>
                川西地域包括支援センター<span class="bp">支援内容</span>
            </p>
        </a></li>
        <li><a href="#guide" class="btn-1">ご利用案内</a></li>
    </ul>
</div>
<div class="content">
    <details>
        <summary>このページの目次を見る</summary>
        <ul class="navi">
            <li><a href="#news" class="btn-1">お知らせ</a></li>
            <li><a href="#support" class="btn-1">
                <p>
                    川西地域包括支援センター<span class="bp">支援内容</span>
                </p>
            </a></li>
            <li><a href="#guide" class="btn-1">ご利用案内</a></li>
        </ul>
    </details>
    <section class="outline">
        <div class="inner">
            <hgroup>
                <p class="consultation">障害者支援施設</p>
                <h1>地域包括支援センター</h1>
            </hgroup>
            <p class="access">
                〒386-0034<br>
                上田市中之条801番地<br>
                <span class="highlight">TEL</span><a class="call" href="tel:0268-27-3166">:0268-27-3166</a><span class="bp"><span class="highlight">FAX</span>:0268-27-3175</span>
            </p>
        </div>
        <div class="outline-content">
            <img src="fv.jpg" alt="" class="fv-image">
            <div class="inner">
                <h2>
                    住み慣れた町で、<span class="bp">ずっと自分らしく。</span>
                </h2>
                <p class="text">
                    川西地域包括センターは、高齢者の方が住み慣れた地域で自分らしく暮らし続けられるように支援する場所です。<br>
                    生活のちょっとした困りごとや介護に関する相談、地域のサービス利用のサポートまで、幅広くお手伝いします。
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
    <section id="support">
        <hgroup class="content-head">
            <div class="head-wr">
                <h2>川西地域包括支援センターの支援内容</h2>
            </div>
        </hgroup>
        <ol class="content-list">
            <li>
                <h3>総合相談支援</h3>
                <p class="text">
                    高齢者の方やご家族、地域の方々からの相談を無料で受け付けています。介護保険の申請や日常生活の困りごと、心配ごとまで、職員が親身になってお話をうかがいます。
                </p>
            </li>
            <li>
                <h3>介護予防ケアマネジメント</h3>
                <p class="text">
                    要支援1・2の方を対象に、ケアプラン作成や介護予防プログラムの案内を行います。生活機能を維持し、元気な毎日を支えるサポートです。
                </p>
            </li>
            <li>
                <h3>権利擁護</h3>
                <p class="text">
                    高齢者虐待への対応や悪質商法の被害防止、成年後見制度の紹介など、高齢者の権利を守る取り組みも行なっています。
                </p>
            </li>
            <li>
                <h3>包括的・継続的ケアマネジメント</h3>
                <p class="text">
                    地域の医療・福祉機関との連携やケアマネージャーへの支援・助言を通して、高齢者が暮らしやすい地域づくりを支援します。
                </p>
            </li>
        </ol>
    </section>
    <section id="guide">
        <hgroup class="content-head">
            <div class="head-wr">
                <h2>地域の取り組み</h2>
            </div>
        </hgroup>
        <div class="content-wr">
            <ol class="content-list">
                <li>オレンジカフェ「ひなたぼっこ」</li>
                <li>地域リハビリテーション活動支援事業</li>
                <li>地域連携会議</li>
                <li>認知症サポーター養成講座</li>
            </ol>
            <p class="text">
                日常の交流や学びを通して、高齢者だけでなく地域の皆さんも安心して暮らせる町づくりを目指しています。<br>
                詳しくは、外部サイトをご覧ください。
            </p>
            <a href="https://www.shiinomikai.com/khoukatsu/" target="houkatsu" class="btn-2">川西地域包括支援センター（外部サイト）</a>
        </div>
    </section>
</div>
</main>
<?php include $base . '/footer.php'; ?>
<script src="popup.js"></script>
</body>
</html>