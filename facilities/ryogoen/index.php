<?php
$base = '../..';
$facility_base ='..';
require_once $base . '/meta.php';
$title = 'しいのみ療護園＿施設紹介';
$description = '障害者自立支援法に基づき、18歳以上の身体障害者を主たる対象とする障害者支援施設です。生活介護や入所支援、短期入所を通じて、一人ひとりの暮らしに寄り添い、日々の生活が笑顔と自信につながるよう支えています。 ';
$local_path = '/facilities/ryogoen/'; // サイトのルートからのパスを記入
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
<link rel="stylesheet" href="ryogoen.css?v=1">
<link href="https://fonts.googleapis.com/css2?family=BIZ+UDPGothic:wght@400;700&family=M+PLUS+Rounded+1c:wght@100;300;400;500;700;800;900&family=Zen+Maru+Gothic:wght@300;400;500;700;900&display=swap" rel="stylesheet">
</head>
<body class="ryogoen">
<?php include $base . '/header.php'; ?>
<main class="navipage">
<div class="facility-navi">
        <ul class="navi">
            <li><a href="#news" class="btn-1">お知らせ</a></li>
            <li><a href="#smile" class="btn-1">支え合いの毎日
            </a></li>
            <li><a href="#blog" class="btn-1">ブログ</a></li>
            <li><a href="#support" class="btn-1">療護園の支援内容</a></li>
            <li><a href="#guide" class="btn-1">ご利用案内</a></li>
            <li><a href="#facility" class="btn-1">施設概要</a></li>
            <li><a href="#fees" class="btn-1">ご利用料金</a></li>
        </ul>
</div>
<div class="content">
    <details>
        <summary>このページの目次を見る</summary>
        <ul class="navi">
            <li><a href="#news" class="btn-1">お知らせ</a></li>
            <li><a href="#smile" class="btn-1">支え合いの毎日
            </a></li>
            <li><a href="#blog" class="btn-1">ブログ</a></li>
            <li><a href="#support" class="btn-1">療護園の支援内容</a></li>
            <li><a href="#guide" class="btn-1">ご利用案内</a></li>
            <li><a href="#facility" class="btn-1">施設概要</a></li>
            <li><a href="#fees" class="btn-1">ご利用料金</a></li>
        </ul>
    </details>
    <section class="outline">
        <div class="inner">
            <hgroup>
                <p class="disability-support">障害者支援施設</p>
                <h1>しいのみ療護園</h1>
            </hgroup>
            <p class="access">
                〒386-1542<br>
                上田市下室賀2826番地<br>
                <span class="highlight">TEL</span><a class="call" href="tel:0268-31-0001">:0268-31-0001</a><span class="bp"><span class="highlight">FAX</span>:0268-31-0007</span>
            </p>
        </div>
        <div class="outline-content">
            <img src="fv.jpg" alt="" class="fv-image">
            <div class="inner">
                <h2>
                    ここで過ごす時間が、<span class="bp">明日の力になる。</span>
                </h2>
                <p class="text">
                    しいのみ療護園は、18歳以上の身体障がいのある方が安心して生活できる場です。 <br>
                    生活介護や入所支援、短期入所を通じて、一人ひとりの暮らしに寄り添い、日々の生活が笑顔と自信につながるよう支えています。<br>
                    きめ細かい支援の中で過ごす時間が、利用者の明日への力となります。 
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
    <section id="smile">
        <hgroup class="content-head">
            <div class="head-wr">
                <h2>笑顔・学び・支え合いの毎日</h2>
            </div>
        </hgroup>
        <p class="text">
            しいのみ療護園には、利用者一人ひとりが安心して笑顔あふれる毎日を過ごせるように、さまざまな工夫があります。<br>
            広々とした園内は車椅子でも自由に移動でき、ご家族や地域の方々と安心して交流することができます。<br>
            季節の行事やクラブ活動、ボランティアによる特別イベントなど、楽しい余暇も充実。担当制のきめ細かな介護・看護や、医師・理学療法士による機能訓練で生活を支え、職員のチームワークと研修によって24時間の安心体制を整えています。
        </p>
        <div class="content-wr">
            <img src="smile-1.jpg" alt="">
            <div>
                <h3>豊かな生活</h3>
                <p class="text">
                    しいのみ療護園は室賀地区の山あいに位置し、豊かな自然に恵まれています。<br>
                    利用者の皆さんが車椅子で自由に行動できるよう居室・廊下・食堂・サンルームなどゆったりとしたスペースを確保しました。<br>
                    また、ご家族や地域の方々との交流の場も用意しています。
                </p>
            </div>
        </div>
        <div class="content-wr">
            <img src="smile-2.jpg" alt="">
            <div class="text-wr">
                <h3>楽しい余暇</h3>
                <p class="text">
                    季節に合った行事を計画しています。<br>
                    また、ボランティアによる特別イベントもたくさん受け入れています。
                </p>
            </div>
        </div>
        <div class="content-wr">
            <img src="smile-3.jpg" alt="">
            <div class="text-wr">
                <h3>きめ細かな看護・介護</h3>
                <p class="text">
                    担当制により、利用者の要望にきめ細かく対応します。 <br>
                    障害の内容によって個別の介助が必要となりますが、最新の設備の有効な利用と心の交流を大切にしています。
                </p>
            </div>
        </div>
        <div class="content-wr">
            <img src="smile-4.jpg" alt="">
            <div class="text-wr">
                <h3>機能訓練</h3>
                <p class="text">
                    担当制により、利用者の要望にきめ細かく対応します。 <br>
                    障害の内容によって個別の介助が必要となりますが、最新の設備の有効な利用と心の交流を大切にしています。
                </p>
            </div>
        </div>
        <div class="content-wr">
            <img src="smile-5.jpg" alt="">
            <div class="text-wr">
                <h3>職員のチームワーク</h3>
                <p class="text">
                    24時間の充実した介護体制のため、研修制度を整え、職員のチームワークと資質向上に努めています。  
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
    <section id="support">
        <hgroup class="content-head">
            <div class="head-wr">
                <h2>しいのみ療護園の<span class="bp">支援内容</span></h2>
            </div>
        </hgroup>
        <ol class="content-list">
            <li>
                <h3>食事</h3>
                <p class="text">
                    朝7時45分～　昼11時45分～　夕18時～<br>
                    基本的には食堂に集まります。
                </p>
            </li>
            <li>
                <h3>入浴</h3>
                <p class="text">
                    週2回<br>
                    入浴が困難な場合には清拭を行うなど、適切な方法で実施します。 
                </p>
            </li>
            <li>
                <h3>介護、生活支援</h3>
                <p class="text">
                    施設としての標準介護の他、個々人のケアプランに沿って介護します。
                </p>
            </li>
            <li>
                <h3>相談及び援助</h3>
                <p class="text">
                    介護以外の日常生活に関する相談も受け付けております。
                </p>
            </li>
            <li>
                <h3>機能訓練</h3>
                <p class="text">
                    集団あるいはケアプランによる個別の訓練を行います。
                </p>
            </li>
            <li>
                <h3>健康管理</h3>
                <p class="text">
                    嘱託医と看護職員が、診察や健康相談を行います。<br>
                    (受診は医療保険の対象です。費用別途)
                </p>
            </li>
            <li>
                <h3>レクリエーション行事等</h3>
                <p class="text">
                季節に応じた行事やレクリエーションを行います。
                </p>
            </li>
            <li>
                <h3>理美容サービス</h3>
                <p class="text">
                月に１度、理美容サービスを実施しています。(費用別途)
                </p>
            </li>
            <li>
                <h3>その他サービス</h3>
                <p class="text">
                日常費用支払い代行等を行なっています。
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
                    <th>指定事業所名</th>
                    <td colspan="2">しいのみ療護園</td>
                </tr>
                <tr>
                    <th>所在地</th>
                    <td colspan="2">上田市下室賀2826番地</td>
                </tr>
                <tr>
                    <th>連絡先</th>
                    <td colspan="2">（TEL）0268-31-0001　（FAX）0268-31-0007</td>
                </tr>
                <tr>
                    <th>指定事業所コード</th>
                    <td colspan="2">2010300271</td>
                </tr>
                <tr>
                    <th>事業開始年月日</th>
                    <td colspan="2">平成6年4月1日</td>
                </tr>
                <tr>
                    <th>事業所の種別</th>
                    <td colspan="2">障害者支援施設</td>
                </tr>
                <tr>
                    <th>利用定員</th>
                    <td colspan="2">
                        (施設入所支援)　定員50名<br>
                        (生活介護・入所支援)　定員50名<br>
                        (短期入所)　定員2名
                    </td>
                </tr>
                <tr>
                    <th>敷地面積</th>
                    <td colspan="2">4947.66㎡</td>
                </tr>
                <tr>
                    <th>延床面積</th>
                    <td colspan="2">2727.64㎡</td>
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
                    <td>1名</td>
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
                    <td>1名(非常勤)</td>
                </tr>
                <tr>
                    <td>生活指導員</td>
                    <td>36名（パート7名含む）（うち介護福祉士15名）</td>
                </tr>
                <tr>
                    <td>管理栄養士</td>
                    <td>1名</td>
                </tr>
                <tr>
                    <td>事務職員</td>
                    <td>3名</td>
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
                <td>1日328円</td>
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
        <p class="way">※お支払方法</p>
        <p class="way-inner">
            毎月10日までに前月分の請求を致しますので、当月の20日までにお支払下さい。<br>
            お支払方法は、現金もしくは銀行振込の中からご契約の際に選べます。受領後は領収書を発行します。
        </p>
    </section>
</div>
</main>
<?php include $base . '/footer.php'; ?>
<script src="popup.js"></script>
</body>
</html>