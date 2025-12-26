<?php
$base = '../..';
$facility_base ='..';
require_once $base . '/meta.php';
<<<<<<< Updated upstream
require_once $base . '/wp-get-news.php';
require_once $base . '/wp-get-blog.php';
=======
<<<<<<< Updated upstream
=======
require_once $base . '/wp-get-news.php';
require_once $base . '/wp-get-blog.php';
$facility_base ='..';
>>>>>>> Stashed changes
>>>>>>> Stashed changes
$title = '上田しいのみ園＿施設紹介';
$description = '上田しいのみ園は、障害者自立支援法に基づく「障害者支援施設」です。入所支援や生活介護、短期入所を通じて、一人ひとりのペースに寄り添いながら、安心して過ごせる時間を支えています。';
$local_path = '/facilities/shiinomien/'; // サイトのルートからのパスを記入
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
<body class="shiinomien">
<?php include $base . '/header.php'; ?>
<main class="navipage">
<div class="facility-navi">
    <ul class="navi">
        <li><a href="#news" class="btn-1">お知らせ</a></li>
        <li><a href="#blog" class="btn-1">ブログ</a></li>
        <li><a href="#support" class="btn-1">
            <p>
                しいのみ園の<span class="bp">支援内容</span>
            </p>
        </a></li>
        <li><a href="#guide" class="btn-1">ご利用案内</a></li>
        <li><a href="#policy" class="btn-1">運営方針</a></li>
        <li><a href="#facility" class="btn-1">施設概要</a></li>
        <li><a href="#fees" class="btn-1">ご利用料金</a></li>
    </ul>
</div>
<div class="content">
    <details>
        <summary>このページの目次を見る</summary>
        <ul class="navi">
            <li><a href="#news" class="btn-1">お知らせ</a></li>
            <li><a href="#blog" class="btn-1">ブログ</a></li>
            <li><a href="#support" class="btn-1">しいのみ園の支援内容</a></li>
            <li><a href="#guide" class="btn-1">ご利用案内</a></li>
            <li><a href="#policy" class="btn-1">運営方針</a></li>
            <li><a href="#facility" class="btn-1">施設概要</a></li>
            <li><a href="#fees" class="btn-1">ご利用料金</a></li>
        </ul>
    </details>
    <section class="outline">
        <div class="inner">
            <hgroup>
                <p class="disability-support">障害者支援施設</p>
                <h1>上田しいのみ園</h1>
            </hgroup>
            <p class="access">
                〒386-0034<br>
                上田市中之条801番地<br>
                <span class="highlight">TEL</span><a class="call" href="tel:0268-27-3166">:0268-27-3166</a><span class="bp"><span class="highlight">FAX</span>:0268-27-3175</span>
            </p>
        </div>
<<<<<<< Updated upstream
        <div class="outline-content" id="main-contents">
=======
        <div class="outline-content">
>>>>>>> Stashed changes
            <img src="fv.jpg" alt="" class="fv-image">
            <div class="inner">
                <h2>
                    笑顔が咲く、<span class="bp">わたしの居場所。</span>
                </h2>
                <p class="text">
                    上田しいのみ園は、18歳以上の障がいのある方が、自分らしい毎日を過ごすための生活の場です。<br>
                    入所支援や生活介護、短期入所を通じて、一人ひとりのペースに寄り添いながら、安心して過ごせる時間を支えています。<br>
                    軽作業や創作活動などに取り組みながら、自然と笑顔が生まれるあたたかな日々がここにあります。
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
<<<<<<< Updated upstream
        <div class="wp-news wp-content-scroll">
            <?php include $base . '/wp-news.php' ?>
        </div>
        <div class="wp-more">
            <div class="arrows">
                <button class="arrow-btn prev">
                    <img src="<?= $base ?>/navi-arrow.svg" alt="">
                </button>
                <button class="arrow-btn next">
                    <img src="<?= $base ?>/navi-arrow.svg" alt="">
                </button>
            </div>
            <a href="<?= $base ?>/wp/news/" class="btn-2">もっと見る</a>
        </div>
=======
>>>>>>> Stashed changes
        <div class="content-inner">
            <img src="news.jpg" alt="">
            <div class="news-wr">
                <h3>みんなで過ごす、あたたかい時間</h3>
                <p class="text">
                    朝ごはんを食べたら、ラジオ体操で元気に一日をスタート。<br>
                    日中は籠作りやプラスチック製品の箱詰め、清拭布たたみなどに取り組みます。<br>
                    午後はヨガや書道などで自分の時間も楽しみ、笑顔あふれる穏やかな毎日を過ごしています。
                </p>
                <button class="btn-2" id="popup-btn">日課を見る</button>
                <div class="popup-content">
                    <div class="popup-wr">
                        <img src="dairylist.png" alt="" id="dairylist">
                    </div>
                </div>
            </div>
        </div>
        <div class="images">
            <img src="news-1.jpg" alt="">
            <img src="news-2.jpg" alt="">
            <img src="news-3.jpg" alt="">
            <img src="news-4.jpg" alt="">
        </div>
    </section>
    <section id="blog">
        <hgroup class="content-head">
            <div class="head-wr">
                <h2>ブログ</h2>
                <p class="before-line">しいのみ日和</p>
            </div>
        </hgroup>
<<<<<<< Updated upstream
        <div class="wp-blog wp-content-scroll">
            <?php include $base . '/wp-blog.php' ?>
        </div>
        <div class="wp-more">
            <div class="arrows">
                <button class="arrow-btn prev">
                    <img src="<?= $base ?>/navi-arrow.svg" alt="">
                </button>
                <button class="arrow-btn next">
                    <img src="<?= $base ?>/navi-arrow.svg" alt="">
                </button>
            </div>
            <a href="<?= $base ?>/wp/category/blog/" class="btn-2">もっと見る</a>
        </div>
=======
>>>>>>> Stashed changes
    </section>
    <section id="support">
        <hgroup class="content-head">
            <div class="head-wr">
                <h2>しいのみ園の支援内容</h2>
            </div>
        </hgroup>
        <ol class="content-list">
            <li>
                <h3>施設入所支援事業</h3>
                <p class="text">
                    主に夜間生活において、入浴、排泄又は食事等の介護、その他の法基準の定める便宜を提供します。
                </p>
            </li>
            <li>
                <h3>生活介護事業</h3>
                <p class="text">
                    主として昼間において、自立した日常生活や社会生活を営むことができるように入浴、排せつ、食事等の介助支援と、生産活動、創作的活動等の機会を提供します。
                </p>
            </li>
            <li>
                <h3>短期入所事業</h3>
                <p class="text">
                    居宅において、その介護を行う方が疾患その他の理由により、短期間の入所利用等を必要とする方に入浴、排せつ、食事等の介護やその他支援の定める便宜を提供します。
                </p>
            </li>
        </ol>
    </section>
    <section id="guide">
        <hgroup class="content-head">
            <div class="head-wr">
                <h2>ご利用の流れ</h2>
            </div>
        </hgroup>
        <div class="content-wr">
            <p class="text">
                ご利用をお考えの方は、在住市町村の福祉窓口および障害者総合支援センター・相談支援事業所「椎の実」にご相談ください。
            </p>
            <ol class="content-list">
                <li>在住市町村の福祉窓口、もしくは相談支援事業所「椎の実」に相談</li>
                <li>相談支援事業所による聞き取りや、関係者支援会議により利用計画書が作成され、市町村に提出</li>
                <li>市町村から障害支援区分等の調査等が行なわれ利用についての受給者証が交付</li>
                <li>当事業所と利用契約や必要な手続き</li>
                <li>利用計画書に基づいた個別支援計画により利用が開始</li>
            </ol>
            <p class="text">
                ※上田市以外に在住の皆さんの利用については、在住市町村と上田市で協議してからの利用となります。
            </p>
            <p class="text">
                ※相談支援事業所「椎の実」は以下のボタンから
            </p>
            <a href="<?= $facility_base ?>/shiinomi/" class="btn-2">椎の実ページへ</a>
        </div>
    </section>
    <section id="policy">
        <hgroup class="content-head">
            <div class="head-wr">
                <h2>運営基本方針</h2>
            </div>
        </hgroup>
        <ul class="content-wr text">
            <li>法人の基本理念に基づき、わたしたちは</li>
            <li>安心、安全、快適な生活を提供し、一人ひとりのより満足できる支援に全力で取り組みます。</li>
            <li>利用者一人ひとりの思いやりや夢を大事にして、その実現のために全力で個別支援をします。</li>
            <li>福祉の基本理念に誠実な支援をします。</li>
            <li>支援技術の向上のために常に全力で取り組みます。</li>
            <li>生産活動を通じて働く意欲の向上のための個別の支援をします。</li>
            <li>創作的活動や余暇的活動を通じて生活の豊かさのための支援をします。</li>
            <li>地域住民との連携を深め、地域福祉の向上に積極的に取り組みます。</li>
            <li>事業活動の透明性と健全かつ活力ある事業経営に全力で取り組みます。</li>
        </ul>
    </section>
    <section id="facility">
        <hgroup class="content-head">
            <div class="head-wr">
                <h2>施設概要</h2>
            </div>
        </hgroup>
        <img src="shiinomien.jpg" alt="" class="building">
        <table class="info-table">
            <tbody>
                <tr>
                    <th>指定事業所名</th>
                    <td colspan="2">上田しいのみ園</td>
                </tr>
                <tr>
                    <th>所在地</th>
                    <td colspan="2">上田市中之条801番地</td>
                </tr>
                <tr>
                    <th>連絡先</th>
                    <td colspan="2">（TEL）0268-27-3166　（FAX）0268-27-3175</td>
                </tr>
                <tr>
                    <th>指定事業所コード</th>
                    <td colspan="2">2010300289</td>
                </tr>
                <tr>
                    <th>相談支援事業</th>
                    <td colspan="2">2030300061</td>
                </tr>
                <tr>
                    <th>事業開始年月日</th>
                    <td colspan="2">昭和53年4月1日</td>
                </tr>
                <tr>
                    <th>利用定員</th>
                    <td colspan="2">
                        (施設入所支援)　40名<br>
                        (生活介護)　40名<br>
                        (短期入所)　2名
                    </td>
                </tr>
                <tr>
                    <th>敷地面積</th>
                    <td colspan="2">3,423.09㎡</td>
                </tr>
                <tr>
                    <th>延床面積</th>
                    <td colspan="2">1,632.97㎡</td>
                </tr>
                <tr>
                    <th>鉄筋平屋建1棟</th>
                    <td colspan="2">住居棟全床暖房</td>
                </tr>
                <tr>
                    <th>特殊付帯設備</th>
                    <td colspan="2">暖房設備、居住棟床暖房、スプリンクラーその他ファンコンベクター25台</td>
                </tr>
            </tbody>
        </table>
        <table class="info-table sub-table">
            <tbody>
                <tr>
                    <th class="category" rowspan="10">職員体制</th>
                    <td>施設長</td>
                    <td>1名</td>
                </tr>
                <tr>
                    <td>サービス管理責任者</td>
                    <td>2名（1名兼務）</td>
                </tr>
                <tr>
                    <td>医師</td>
                    <td>2名（非常勤）</td>
                </tr>
                <tr>
                    <td>看護師</td>
                    <td>3名</td>
                </tr>
                <tr>
                    <td>理学療法士</td>
                    <td>1名</td>
                </tr>
                <tr>
                    <td>生活指導員</td>
                    <td>23名（パート6名含む）（うち介護福祉士16名）</td>
                </tr>
                <tr>
                    <td>管理栄養士</td>
                    <td>1名</td>
                </tr>
                <tr>
                    <td>調理師</td>
                    <td>5名</td>
                </tr>
                <tr>
                    <td>事務職員</td>
                    <td>2名</td>
                </tr>
                <tr>
                    <td>合計</td>
                    <td>27名</td>
                </tr>
            </tbody>
        </table>
    </section>
    <section id="fees">
        <hgroup class="content-head">
            <div class="head-wr">
                <h2>ご利用料金</h2>
            </div>
        </hgroup>
        <table class="info-table sub-table">
            <tr>
                <th rowspan="3">生活費</th>
                <td>食費</td>
                <td>1日1,428円</td>
            </tr>
            <tr>
                <td>光熱費</td>
                <td>1日394円</td>
            </tr>
            <tr>
                <td>その他</td>
                <td>サービス利用料金の利用者負担額</td>
            </tr>
        </table>
        <table class="info-table">
            <tbody>
                <tr>
                    <th>その他の費用</th>
                    <td colspan="2">理容料金、医療費、行政手続き等、介護給付費等の給付対象外のサービスを利用した場合は、別途のお支払いになります。</td>
            </tbody>
        </table>
        <p class="way">※お支払方法<p>
        <p class="way-inner">
            毎月10日までに前月分の請求を致しますので、当月の20日までにお支払下さい。<br>
            お支払方法は、現金もしくは銀行振込の中からご契約の際に選べます。受領後は領収書を発行します。
        </p>
    </section>
</div>
</main>
<?php include $base . '/footer.php'; ?>
<script src="popup.js"></script>
<<<<<<< Updated upstream
<script src="<?= $base ?>/scroll.js"></script>
=======
>>>>>>> Stashed changes
</body>
</html>