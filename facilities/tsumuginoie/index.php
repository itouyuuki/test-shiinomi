<?php
$base = '../..';
$facility_base ='..';
require_once $base . '/meta.php';
$title = '上田市つむぎの家＿施設紹介';
$description = '上田市つむぎの家は、重症心身障がい児者のための公設民営の施設です。専門スタッフが医療的ケアや食事、入浴などを支えながら、創作活動や機能訓練、個別・集団での療育を通して、一人ひとりの成長を大切にしています。';
$local_path = '/facilities/tsumuginoie/'; // サイトのルートからのパスを記入
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
<link rel="stylesheet" href="tsumuginoie.css?v=1">
<link href="https://fonts.googleapis.com/css2?family=BIZ+UDPGothic:wght@400;700&family=M+PLUS+Rounded+1c:wght@100;300;400;500;700;800;900&family=Zen+Maru+Gothic:wght@300;400;500;700;900&display=swap" rel="stylesheet">
</head>
<body class="tsumuginoie">
<?php include $base . '/header.php'; ?>
<main class="navipage">
<div class="facility-navi">
    <ul class="navi">
        <li><a href="#news" class="btn-1">お知らせ</a></li>
        <li><a href="#blog" class="btn-1">ブログ</a></li>
        <li><a href="#support" class="btn-1">つむぎの家の支援内容</a></li>
        <li><a href="#five-support" class="btn-1">5つのサポート体制</a></li>
        <li><a href="#guide" class="btn-1">ご利用の流れ</a></li>
        <li><a href="#policy" class="btn-1">運営方針</a></li>
        <li><a href="#facility" class="btn-1">施設概要</a></li>
    </ul>
</div>
<div class="content">
    <details>
        <summary>このページの目次を見る</summary>
        <ul class="navi">
            <li><a href="#news" class="btn-1">お知らせ</a></li>
            <li><a href="#blog" class="btn-1">ブログ</a></li>
            <li><a href="#support" class="btn-1">つむぎの家の支援内容</a></li>
            <li><a href="#five-support" class="btn-1">5つのサポート体制</a></li>
            <li><a href="#guide" class="btn-1">ご利用の流れ</a></li>
            <li><a href="#policy" class="btn-1">運営方針</a></li>
            <li><a href="#facility" class="btn-1">施設概要</a></li>
        </ul>
    </details>
    <section class="outline">
        <div class="inner">
            <hgroup>
                <p class="disability-support">障害者支援施設</p>
                <h1>上田市つむぎの家</h1>
            </hgroup>
            <p class="access">
                〒386-1106<br>
                上田市小泉1028番地<br>
                <span class="highlight">TEL</span><a class="call" href="tel:0268-26-1130">:0268-26-1130</a><span class="bp"><span class="highlight">FAX</span>:0268-26-1158</span>
            </p>
        </div>
        <div class="outline-content">
            <img src="fv.jpg" alt="" class="fv-image">
            <div class="inner">
                <h2>
                    成長と笑顔を<span class="bp">つむぐ場所。</span>
                </h2>
                <p class="text">
                    上田市つむぎの家は、重い障がいを持つお子さんや成人の方が、安心して日中を過ごせる活動の場です。 <br>
                    専門スタッフが医療的ケアや食事、入浴などを支えながら、創作活動や機能訓練、個別・集団での療育を通して、一人ひとりの成長を大切にしています。
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
        <div class="content-inner">
            <div class="news-wr">
                <h3>
                    一人ひとりの一日を、<span class="bp">大切につむぐ時間</span>
                </h3>
                <p class="text">
                    朝の挨拶から一日をはじめ、生活リズムの安定や口腔ケアを行います。 <br>
                    日中は散歩や指先を使った創作活動、季節の行事などに取り組み、笑顔あふれる時間を過ごします。<br>
                    会話や意思表示も大切にしながら、コミュニケーションの力を少しずつ育んでいます。
                </p>
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
        </div>
    </section>
    <section id="blog">
        <hgroup class="content-head">
            <div class="head-wr">
                <h2>ブログ</h2>
                <p class="before-line">しいのみ日和</p>
            </div>
        </hgroup>
    </section>
    <section id="support">
        <hgroup class="content-head">
            <div class="head-wr">
                <h2>つむぎの家の支援内容</h2>
            </div>
        </hgroup>
        <div class="content-wr">
            <p class="text">
                ご利用をお考えの方は、在住市町村の福祉窓口および障害者総合支援センター・相談支援事業所「椎の実」にご相談ください。
            </p>
            <ol class="content-list">
                <li>
                    <h3>生活介護事業</h3>
                    <p class="text">
                        （営業日時：月曜日～金曜日の午前9時～午後3時）<br>
                        18歳以上の重症者が利用できます。
                    </p>
                </li>
                <li>
                    <h3>放課後等デイサービス事業</h3>
                    <p class="text">
                        （月曜日～金曜日の午後3時～午後5時、土曜日の午前9時～午後5時、
                        <span class="bp">学校の長期休み：月曜日～土曜日の午前9時～午後3時）</span>
                        <br>養護学校等の重症学童が利用できます。
                    </p>
                </li>
                <li>
                    <h3>児童発達支援事業</h3>
                    <p class="text">
                        （月～金の午前9時～午後3時）<br>
                        就学前の重症児が利用できます。
                    </p>
                </li>
            </ol>
        </div>
    </section>

    <section id="five-support">
        <hgroup class="content-head">
            <div class="head-wr">
                <h2>日常を支える<br>
                5つのサポート体制</h2>
            </div>
        </hgroup>
        <div class="content-wr">
            <ol class="content-list">
                <li>
                    <h3>介護・医療ケア</h3>
                    <p class="text">
                        専門スタッフによる手厚いケア体制
                    </p>
                </li>
                <li>
                    <h3>療育活動</h3>
                    <p class="text">
                        個別支援計画に基づいた活動を積極的に支援
                    </p>
                </li>
                <li>
                    <h3>入浴</h3>
                    <p class="text">
                    機械浴、足浴等安全安心な個別浴を提供します
                    </p>
                </li>
                <li>
                    <h3>昼食</h3>
                    <p class="text">
                    ご利用者の特性に合わせた食事を提供します
                    </p>
                </li>
                <li>
                    <h3>送迎</h3>
                    <p class="text">
                    支援員・看護師の2人体制で安全な送迎をします
                    </p>
                </li>
            </ol>
        </div>
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
        <img src="building.jpg" alt="" class="building">
        <table class="info-table">
            <tbody>
                <tr>
                    <th>施設名称</th>
                    <td colspan="2">上田市つむぎの家</td>
                </tr>
                <tr>
                    <th>所在地</th>
                    <td colspan="2">上田市小泉1028番地</td>
                </tr>
                <tr>
                    <th>連絡先</th>
                    <td colspan="2">（TEL）0268-26-1130　（FAX）0268-26-1158</td>
                </tr>
                <tr>
                    <th>E-mail</th>
                    <td colspan="2">tsumugi@shiinomikai.com</td>
                </tr>
                <tr>
                    <th>指定事業所コード</th>
                    <td colspan="2">
                        2010300685(生活介護事業) 
                        2050300090(放課後等デイサービス事業、児童発達支援事業) 
                    </td>
                </tr>
                <tr>
                    <th>事業開始年月日</th>
                    <td colspan="2">平成24年4月1日</td>
                </tr>
                <tr>
                    <th>利用定員</th>
                    <td colspan="2">5人</td>
                </tr>
                <tr>
                    <th>敷地面積</th>
                    <td colspan="2">2,165㎡</td>
                </tr>
                <tr>
                    <th>延床面積</th>
                    <td colspan="2">430.37㎡</td>
                </tr>
                <tr>
                    <th>鉄筋平屋建1棟</th>
                    <td colspan="2">造平屋建一棟、リビング床暖房</td>
                </tr>
                <tr>
                    <th>特殊付帯設備</th>
                    <td colspan="2">特殊浴槽</td>
                </tr>
            </tbody>
        </table>
        <table class="info-table sub-table">
            <tbody>
                <tr>
                    <th class="category" rowspan="10">職員体制</th>
                    <td>管理者（所長）</td>
                    <td>1名(常勤)</td>
                </tr>
                <tr>
                    <td>サービス管理責任者（児童発達支援管理責任者）</td>
                    <td>1名(常勤)</td>
                </tr>
                <tr>
                    <td>生活支援員（保育士、介護福祉士）</td>
                    <td>3名(常勤2名、非常勤1名)</td>
                </tr>
                <tr>
                    <td>看護師</td>
                    <td>5名(常勤1名、非常勤3名、他兼務1名) </td>
                </tr>
                <tr>
                    <td>機能訓練指導員（理学療法士、音楽療法士）</td>
                    <td>3名(非常勤2名、他兼務1名)</td>
                </tr>
                <tr>
                    <td>嘱託医</td>
                    <td>1名(兼務) </td>
                </tr>
                <tr>
                    <td>事務員</td>
                    <td>1名(兼務) </td>
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
                    <td>管理栄養士</td>
                    <td>1名(兼務) </td>
                </tr>
            </tbody>
        </table>
    </section>
</div>
</main>
<?php include $base . '/footer.php'; ?>
<script src="popup.js"></script>
</body>
</html>