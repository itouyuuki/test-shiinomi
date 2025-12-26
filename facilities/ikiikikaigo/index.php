<?php
$base = '../..';
$facility_base ='..';
require_once $base . '/meta.php';
$title = 'いきいき介護センター＿施設紹介｜上田しいのみ会';
$description = 'いきいき介護センターは、ケアマネージャー（介護支援専門員）が常駐する、居宅介護支援の事業所です。介護が必要になった方やご家族の相談に応じ、介護認定の申請から、ケアプラン（介護サービス計画）の作成、サービスの紹介までを一貫してサポートしています。';
$local_path = '/facilities/ikiikikaigo/'; // サイトのルートからのパスを記入
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
<body class="ikiikikaigo">
<?php include $base . '/header.php'; ?>
<main class="navipage">
<div class="facility-navi">
    <ul class="navi">
        <li><a href="#news" class="btn-1">お知らせ</a></li>
        <li><a href="#blog" class="btn-1">ブログ</a></li>
        <li><a href="#guide" class="btn-1">
            <p>
                いきいき介護センター<span class="bp">の支援内容</span>
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
                    いきいき介護センター<span class="bp">の支援内容</span>
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
                <h1>いきいき介護センター</h1>
            </hgroup>
            <p class="access">
                〒386-1541<br>
                上田市上室賀19番地<br>
                <span class="highlight">TEL</span><a class="call" href="tel:0268-31-0006">:0268-31-0006</a><span class="bp"><span class="highlight">FAX</span>:0268-31-0008</span>
            </p>
        </div>
        <div class="outline-content">
            <img src="fv.jpg" alt="" class="fv-image">
            <div class="inner">
                <h2>
                    心も体も、<span class="bp">もうひとつの“我が家”</span>
                </h2>
                <p class="text">
                    いきいき介護センターは、ケアマネージャー（介護支援専門員）が常駐する、居宅介護支援の事業所です。<br>
                    介護が必要になった方やご家族の相談に応じ、介護認定の申請から、ケアプラン（介護サービス計画）の作成、サービスの紹介までを一貫してサポートしています。<br>
                    「住み慣れた家で、できるだけ自分らしく過ごしたい」<br>
                    そんな想いに寄り添いながら、一人ひとりに合った支援を大切にしています。
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
            <img src="ikiikikaigo-1.jpg" alt="">
            <div class="news-wr">
                <h3>気軽に相談できる、暮らしのパートナー</h3>
                <p class="text">
                    「相談して気が楽になった」「自分に合ったサービスが受けられて安心」と、多くの方に喜ばれています。<br>
                    ケアマネージャーがしっかり寄り添い、利用者や家族の暮らしが少しでも安心で快適になるようサポート。日々の暮らしの中で困ったことがあれば、気軽に相談できる“頼れる場所”として、これからも地域に根差した支援を行っていきます。
                </p>
            </div>
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
    <section id="facility">
        <hgroup class="content-head">
            <div class="head-wr">
                <h2>施設概要</h2>
            </div>
        </hgroup>
        <img src="ikiikikaigo-2.jpg" alt="" class="building">
        <table class="info-table">
            <tbody>
                <tr>
                    <th>指定事業所名</th>
                    <td colspan="2">室賀の里いきいき介護センター</td>
                </tr>
                <tr>
                    <th>事業所番号</th>
                    <td colspan="2">2070300021</td>
                </tr>
                <tr>
                    <th>所在地</th>
                    <td colspan="2">上田市上室賀19番地</td>
                </tr>
                <tr>
                    <th>連絡先</th>
                    <td colspan="2">
                        （TEL）0268-31-0006 （FAX）0268-31-0008
                    </td>
                </tr>
                <tr>
                    <th>管理者</th>
                    <td colspan="2">施設長　村上 恒夫</td>
                </tr>
                <tr>
                    <th>開始年月日</th>
                    <td colspan="2">平成12年4月1日</td>
                </tr>
                <tr>
                    <th>営業日</th>
                    <td colspan="2">
                        月～金曜日<br>※祝日・12月29日～1月3日を除く
                    </td>
                </tr>
                <tr>
                    <th>営業時間</th>
                    <td colspan="2">
                        平日 8時30分～17時15分<br>※時間外であっても受付可
                    </td>
                </tr>
                <tr>
                    <th>苦情等の連絡先</th>
                    <td colspan="2">主任相談員　窪田 由理絵</td>
                </tr>

            </tbody>
        </table>
        <table class="info-table sub-table">
            <tbody>
                <tr>
                    <th class="category" rowspan="4">職員体制</th>
                    <td>施設長</td>
                    <td>1名（兼務）</td>
                </tr>
                <tr>
                    <td>介護支援専門員</td>
                    <td>3名</td>
                </tr>
                <tr>
                    <td>事務職員</td>
                    <td>4名（兼務）</td>
                </tr>
                <tr>
                    <td>合計</td>
                    <td>8名</td>
                </tr>
            </tbody>
        </table>
    </section>
</div>
</main>
<?php include $base . '/footer.php'; ?>
</body>
</html>