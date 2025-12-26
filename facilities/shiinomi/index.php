<?php
$base = '../..';
$facility_base ='..';
require_once $base . '/meta.php';
$title = '椎の実＿施設紹介';
$description = '障がいのある方やご家族の「これからどうしよう」「どこに相談すればいいの？」という不安に寄り添いながら、一人ひとりに合った福祉サービスの利用計画を一緒に考えます。 ';
$local_path = '/facilities/shiinomi/'; // サイトのルートからのパスを記入
$og_image = 'ogp.jpg';
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
<link rel="stylesheet" href="shiinomi.css?v=1">
<link href="https://fonts.googleapis.com/css2?family=BIZ+UDPGothic:wght@400;700&family=M+PLUS+Rounded+1c:wght@100;300;400;500;700;800;900&family=Zen+Maru+Gothic:wght@300;400;500;700;900&display=swap" rel="stylesheet">
</head>
<body class="shiinomi">
<?php include $base . '/header.php'; ?>
<main class="navipage">
<div class="facility-navi">
    <ul class="navi">
        <li><a href="#news" class="btn-1">お知らせ</a></li>
        <li><a href="#blog" class="btn-1">ブログ</a></li>
        <li><a href="#support" class="btn-1">
            <p>
                椎の実の<span class="bp">支援内容</span>
            </p>
        </a></li>
        <li><a href="#five-support" class="btn-1">5つのサポート体制</a></li>
        <li><a href="#guide" class="btn-1">ご利用案内</a></li>
        <li><a href="#facility" class="btn-1">施設概要</a></li>
    </ul>
</div>
<div class="content">
    <details>
        <summary>このページの目次を見る</summary>
        <ul class="navi">
            <li><a href="#news" class="btn-1">お知らせ</a></li>
            <li><a href="#blog" class="btn-1">ブログ</a></li>
            <li><a href="#support" class="btn-1">
                <p>椎の実の<span class="bp">支援内容</span></p>
            </a></li>
            <li><a href="#five-support" class="btn-1">5つのサポート体制</a></li>
            <li><a href="#guide" class="btn-1">ご利用案内</a></li>
            <li><a href="#facility" class="btn-1">施設概要</a></li>
        </ul>
    </details>
    <section class="outline">
        <div class="inner">
            <hgroup>
                <p class="disability-support">障害者支援施設</p>
                <h1>椎の実</h1>
            </hgroup>
            <p class="access">
                〒386-0034<br>
                上田市中之条803番地2<br>
                <span class="highlight">TEL</span><a class="call" href="tel:0268-23-4188">:0268-23-4188</a><span class="bp"><span class="highlight">FAX</span>:0268-23-4188</span>
            </p>
        </div>
        <div class="outline-content">
            <div class="inner">
                <h2>
                    “できることを”、<span class="bp">一緒に探します。</span>
                </h2>
                <p class="text">
                    障がいのある方やご家族の「これからどうしよう」「どこに相談すればいいの？」という不安に寄り添いながら、一人ひとりに合った福祉サービスの利用計画を一緒に考えます。 <br>
                    安心して話せる“地域の相談窓口”として、これからの暮らしを支えていきます。 
                </p>
                <a href="<?= $facility_base ?>/shiinomi/" class="btn-2">相談する</a>
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
        <h3>“相談できる”という安心を。</h3>
        <p class="text">
            日常のちょっとした悩みから、制度や手続きに関するご相談まで。<br>
            どんなことでも安心して話せる“身近な相談先”として、地域の方々とのつながりを大切にしています。<br>
            福祉サービスの利用にあたっては、「どんな支援が必要か」「どんな暮らしを目指したいか」を整理することが大切です。<br>
            相談支援専門員がお話をうかがいながら、最適なサービス利用計画を作成。“その人らしい生活”を、一緒に形にしていきます。
        </p>
    </section>
    <section id="support">
        <hgroup class="content-head">
            <div class="head-wr">
                <h2>椎の実の支援内容</h2>
            </div>
        </hgroup>
        <ol class="content-list">
            <li>
                <h3>指定特定障害者相談支援事業（実施主体：市町村）</h3>
                <p class="text">
                    18歳以上の障がい者の相談支援を行います。<br>
                    基本的には食堂に集まります。<br>
                    基本相談支援<br>
                    計画相談支援
                </p>
            </li>
            <li>
                <h3>指定特定障害児相談支援事業（実施主体：市町村）</h3>
                <p class="text">
                    障がい児の相談支援を行います。<br>
                    基本相談支援<br>
                    計画相談支援
                </p>
            </li>
            <li>
                <h3>指定一般相談支援事業（実施主体：長野県）</h3>
                <p class="text">
                    精神障がい者の地域移行・定着の相談支援を行います。<br>
                    基本相談支援<br>
                    計画相談支援
                </p>
            </li>
        </ol>
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
                    <h3>基本相談支援</h3>
                    <p class="text">
                        あらゆる相談に応じ総合的に相談支援を行います。
                    </p>
                </li>
                <li>
                    <h3>計画相談支援</h3>
                    <p class="text">
                        サービス等利用計画書の作成支援を行います。
                    </p>
                </li>
                <li>
                    <h3>継続サービス利用支援</h3>
                    <p class="text">
                    利用計画の適否を一定期間ごとに検証し、計画の見直し等を行います。
                    </p>
                </li>
                <li>
                    <h3>地域移行支援</h3>
                    <p class="text">
                    施設及び精神科病棟に入所されている方の地域移行の相談支援を行います。
                    </p>
                </li>
                <li>
                    <h3>地域定着支援</h3>
                    <p class="text">
                    居宅等で単身生活をしている方の安定した生活のための相談支援を行います。
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
            <ol class="content-list">
                <li>当事業所もしくは圏域総合支援センター、在住市町村の福祉窓口に相談</li>
                <li>利用契約等必要な手続き書類を提出</li>
            </ol>
        </div>
    </section>
    <section id="policy">
        <hgroup class="content-head">
            <div class="head-wr">
                <h2>基本方針</h2>
            </div>
        </hgroup>
        <p class="text">
            利用児者主体の相談支援を基本原則として、思いや夢の共有と実現のためのチャレンジ支援をいたします。  
        </p>
        <ul class="content-wr text">
            <li>情報提供支援</li>
            <li>自己選択支援</li>
            <li>自己決定支援</li>
            <li>適切なサービス等利用計画の作成支援</li>
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
                    <td colspan="2">椎の実</td>
                </tr>
                <tr>
                    <th>所在地</th>
                    <td colspan="2">長野県上田市中之条803番地2 </td>
                </tr>
                <tr>
                    <th>連絡先</th>
                    <td colspan="2">（TEL）0268-23-4188　（FAX）0268-23-4188</td>
                </tr>
                <tr>
                    <th>指定事業所コード</th>
                    <td colspan="2">2030300061</td>
                </tr>
                <tr>
                    <th>事業開始年月日</th>
                    <td colspan="2">平成24年4月1日</td>
                </tr>
            </tbody>
        </table>
        <table class="info-table sub-table">
            <tbody>
                <tr>
                    <th class="category" rowspan="10">職員体制</th>
                    <td>管理者（所長）</td>
                    <td>1名（常勤兼務）</td>
                </tr>
                <tr>
                    <td>相談支援専門員</td>
                    <td>2名（うちは1人は常勤専従）</td>
                </tr>
                <tr>
                    <td>事務職員</td>
                    <td>1名（常勤兼務）</td>
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