<?php
$base = '../..';
$facility_base ='..';
require_once $base . '/meta.php';
$title = '室賀デイサービスセンター＿施設紹介｜上田しいのみ会';
$description = '室賀デイサービスセンターでは、入浴（温泉あり）や食事、リハビリ、レクリエーションなどを行っています。ご自宅での入浴が難しい方や、人との関わりが少なくなりがちな方も、安心して楽しい時間を過ごせる場所です。';
$local_path = '/facilities/day-service/'; // サイトのルートからのパスを記入
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
<link rel="stylesheet" href="day-service-style.css?v=1">
<link href="https://fonts.googleapis.com/css2?family=BIZ+UDPGothic:wght@400;700&family=M+PLUS+Rounded+1c:wght@100;300;400;500;700;800;900&family=Zen+Maru+Gothic:wght@300;400;500;700;900&display=swap" rel="stylesheet">
</head>
<body class="day-service">
<?php include $base . '/header.php'; ?>
<main class="navipage">
<div class="facility-navi">
    <ul class="navi">
        <li><a href="#news" class="btn-1">お知らせ</a></li>
        <li><a href="#blog" class="btn-1">ブログ</a></li>
        <li><a href="#guide" class="btn-1">
            <p>
                室賀デイサービスセンター<span class="bp">の支援内容</span>
            </p>
        </a></li>
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
            <li><a href="#guide" class="btn-1">
                <p>
                    室賀デイサービスセンター<span class="bp">の支援内容</span>
                </p>
            </a></li>
            <li><a href="#facility" class="btn-1">施設概要</a></li>
            <li><a href="#fees" class="btn-1">ご利用料金</a></li>
        </ul>
    </details>
    <section class="outline">
        <div class="inner">
            <hgroup>
                <p class="elderly-care">高齢者福祉施設</p>
                <h1>室賀デイサービスセンター</h1>
            </hgroup>
            <p class="access">
                〒386-1541<br>
                上田市上室賀19番地<br>
                <span class="highlight">TEL</span><a class="call" href="tel:0268-31-0005">:0268-31-0005</a><span class="bp"><span class="highlight">FAX</span>:0268-31-0008</span>
            </p>
        </div>
        <div class="outline-content">
            <img src="fv.jpg" alt="" class="fv-image">
            <div class="inner">
                <h2>
                    心も体も、<span class="bp">もうひとつの“我が家”</span>
                </h2>
                <p class="text">
                    室賀デイサービスセンターでは、入浴（温泉あり）や食事、リハビリ、レクリエーションなどを行なっています。ご自宅での入浴が難しい方や、人との関わりが少なくなりがちな方も、安心して楽しい時間を過ごせる場所です。
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
        <div class="news-wr">
            <h3>笑顔が生まれる、いきいきとした毎日</h3>
            <p class="text">
                室賀温泉の引き湯による入浴サービスや、管理栄養士が考えた栄養バランスのとれた食事など、心も体も元気になれる工夫がいっぱいです。<br>
                明るくにぎやかな雰囲気の中でリハビリやゲームを楽しむことで、利用者同士の交流も自然と広がります。<br>
                「また来たいな」と思える時間を通して、ご自宅での暮らしも安心して続けられるようにサポートしています。
            </p>
        </div>
        <div class="images">
            <img src="day-service-1.jpg" alt="">
            <img src="day-service-2.jpg" alt="">
            <img src="day-service-3.jpg" alt="">
            <img src="day-service-4.jpg" alt="">
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
    <section id="guide">
        <hgroup class="content-head">
            <div class="head-wr">
                <h2>室賀デイサービスセンターの支援内容</h2>
            </div>
        </hgroup>
        <div class="content-wr">
            <ol class="content-list">
                <li>入浴</li>
                <li>食事</li>
                <li>相談・助言</li>
                <li>健康状態の確認</li>
                <li>機能訓練</li>
                <li>レクリエーション</li>
            </ol>
            <p class="text">など</p>
        </div>
    </section>
    <section id="facility">
        <hgroup class="content-head">
            <div class="head-wr">
                <h2>施設概要</h2>
            </div>
        </hgroup>
        <img src="muroganosato-5.jpg" alt="" class="building">
        <table class="info-table">
            <tbody>
                <tr>
                    <th>指定事業所名</th>
                    <td colspan="2">室賀デイサービスセンター</td>
                </tr>
                <tr>
                    <th>事業所番号</th>
                    <td colspan="2">2070300203</td>
                </tr>
                <tr>
                    <th>所在地</th>
                    <td colspan="2">上田市上室賀19番地</td>
                </tr>
                <tr>
                    <th>連絡先</th>
                    <td colspan="2">
                        （TEL）0268-31-0005 （FAX）0268-31-0008
                    </td>
                </tr>
                <tr>
                    <th>管理者</th>
                    <td colspan="2">施設長　村上 恒夫</td>
                </tr>
                <tr>
                    <th>事業開始年月日</th>
                    <td colspan="2">平成6年7月1日</td>
                </tr>
                <tr>
                    <th>利用定員</th>
                    <td colspan="2">30名</td>
                </tr>
                <tr>
                    <th>営業日</th>
                    <td colspan="2">月～土曜日<br>※日曜、1月1日～1月3日休業</td>
                </tr>
                <tr>
                    <th>営業時間</th>
                    <td colspan="2">9時～17時<br>※時間外対応可</td>
                </tr>
                <tr>
                    <th>送迎実施範囲</th>
                    <td colspan="2">上田市（川西・川辺・泉田・城下・塩田地区）、青木村</td>
                </tr>
                <tr>
                    <th>苦情等の連絡先</th>
                    <td colspan="2">主任生活相談員　松井 順子</td>
                </tr>
            </tbody>
        </table>
        <table class="info-table sub-table">
            <tbody>
                <tr>
                    <th class="category" rowspan="9">職員体制</th>
                        <td>施設長</td>
                        <td>1名（兼務）</td>
                    </tr>
                <tr>
                    <td>生活相談員</td>
                    <td>2名（介護職員兼務）</td>
                </tr>
                <tr>
                    <td>看護師</td>
                    <td>3名（パート2名含む）</td>
                </tr>
                <tr>
                    <td>機能訓練指導員</td>
                    <td>1名（看護職員兼務）</td>
                </tr>
                <tr>
                    <td>介護職員</td>
                    <td>11名（パート6名含む）（うち介護福祉士4名）</td>
                </tr>
                <tr>
                    <td>管理栄養士</td>
                    <td>1名（兼務）</td>
                </tr>
                <tr>
                    <td>運転手</td>
                    <td>1名</td>
                </tr>
                <tr>
                    <td>事務職員</td>
                    <td>4名（兼務）</td>
                </tr>
                <tr>
                    <td>合計</td>
                    <td>21名</td>
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
        <p class="text">基本6～7時間ご利用された場合のご利用者負担額です</p>
        <div class="box">
            <h3>要介護1～5の方(1日につき)</h3>
            <table class="info-table three-row">
                <tbody>
                    <tr>
                        <th>要介護1（6時間以上7時間未満）</th>
                        <td>―</td>
                        <td>584円</td>
                    </tr>
                    <tr>
                        <th>要介護2（6時間以上7時間未満）</th>
                        <td>―</td>
                        <td>689円</td>
                    </tr>
                    <tr>
                        <th>要介護3（6時間以上7時間未満）</th>
                        <td>―</td>
                        <td>796円</td>
                    </tr>
                    <tr>
                        <th>要介護4（6時間以上7時間未満）</th>
                        <td>―</td>
                        <td>901円</td>
                    </tr>
                    <tr>
                        <th>要介護5（6時間以上7時間未満）</th>
                        <td>―</td>
                        <td>1,008円</td>
                    </tr>
                    <tr>
                        <th>個別機能訓練加算Ⅰ</th>
                        <td>機能訓練を行った場合</td>
                        <td>76円</td>
                    </tr>
                    <tr>
                        <th>入浴介助加算Ⅰ</th>
                        <td>入浴された場合</td>
                        <td>40円</td>
                    </tr>
                    <tr>
                        <th>サービス提供体制強化加算Ⅲ</th>
                        <td>―</td>
                        <td>6円</td>
                    </tr>
                    <tr>
                        <th>介護職員等処遇改善加算Ⅱ</th>
                        <td>所定単位数に加算</td>
                        <td>9.0%</td>
                    </tr>
                    <tr>
                        <th>食事代（1食・おやつ含む）</th>
                        <td>昼食を召し上がられた場合</td>
                        <td>650円</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="box">
            <h3>要支援1～2の方(1か月につき)</h3>
            <table class="info-table three-row">
                <tbody>
                    <tr>
                        <th>事業対象者・要支援1</th>
                        <td>―</td>
                        <td>1,798円</td>
                    </tr>
                    <tr>
                        <th>事業対象者・要支援2</th>
                        <td>―</td>
                        <td>3,621円</td>
                    </tr>
                    <tr>
                        <th>サービス提供体制強化加算Ⅲ（要支援1）</th>
                        <td>事業対象者・要支援1</td>
                        <td>24円</td>
                    </tr>
                    <tr>
                        <th>サービス提供体制強化加算Ⅲ（要支援2）</th>
                        <td>事業対象者・要支援2</td>
                        <td>48円</td>
                    </tr>
                    <tr>
                        <th>介護職員等処遇改善加算Ⅱ</th>
                        <td>所定単位数に加算</td>
                        <td>9.0%</td>
                    </tr>
                    <tr>
                        <th>食事代（1食・おやつ含む）</th>
                        <td>昼食を召し上がられた場合</td>
                        <td>650円</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="box">
            <h3>通所型サービスＡ（1回につき）</h3>
            <table class="info-table three-row">
                <tbody>
                    <tr class="only">
                        <th rowspan="3">事業対象者・要支援1・要支援2<br>（週1回まで）</th>
                        <td>1割負担の利用者</td>
                        <td>450円</td>
                    </tr>
                    <tr class="only">
                        <td>2割負担の利用者</td>
                        <td>900円</td>
                    </tr>
                    <tr class="only">
                        <td>3割負担の利用者</td>
                        <td>1,350円</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="box">
            <img src="" alt="">
        </div>
    </section>
</div>
</main>
<?php include $base . '/footer.php'; ?>
</body>
</html>