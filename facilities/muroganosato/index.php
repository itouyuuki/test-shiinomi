<?php
$base = '../..';
$facility_base ='..';
require_once $base . '/meta.php';
$title = '特養・室賀の里＿施設紹介';
$description = '特別養護老人ホーム室賀の里は、入居される方が自分らしく、穏やかな毎日を過ごせるよう支援する施設です。少人数のユニットケアで家庭的な雰囲気を大切にしながら、地域の方々とのつながりも大切にしています。';
$local_path = '/facilities/muroganosato/'; // サイトのルートからのパスを記入
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
<link rel="stylesheet" href="muroganosato-style.css?v=1">
<link href="https://fonts.googleapis.com/css2?family=BIZ+UDPGothic:wght@400;700&family=M+PLUS+Rounded+1c:wght@100;300;400;500;700;800;900&family=Zen+Maru+Gothic:wght@300;400;500;700;900&display=swap" rel="stylesheet">
</head>
<body class="muroganosato">
<?php include $base . '/header.php'; ?>
<main class="navipage">
<div class="facility-navi">
    <ul class="navi">
        <li><a href="#news" class="btn-1">お知らせ</a></li>
        <li><a href="#blog" class="btn-1">ブログ</a></li>
        <li><a href="#guide" class="btn-1">
            <p>
                室賀の里の<span class="bp">支援内容</span>
            </p>
        </a></li>
        <li><a href="#border" class="btn-1">入所基準</a></li>
        <li><a href="#flow" class="btn-1">ご利用の流れ</a></li>
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
            <li><a href="#guide" class="btn-1">室賀の里の支援内容</a></li>
            <li><a href="#border" class="btn-1">入所基準</a></li>
            <li><a href="#flow" class="btn-1">ご利用の流れ</a></li>
            <li><a href="#facility" class="btn-1">施設概要</a></li>
            <li><a href="#fees" class="btn-1">ご利用料金</a></li>
        </ul>
    </details>
    <section class="outline">
        <div class="inner">
            <hgroup>
                <p class="elderly-care">高齢者福祉施設</p>
                <h1>特養・室賀の里</h1>
            </hgroup>
            <p class="access">
                〒386-1541<br>
                上田市上室賀19番地<br>
                <span class="highlight">TEL</span><a class="call" href="tel:0268-31-0002">:0268-31-0002</a><span class="bp"><span class="highlight">FAX</span>:0268-31-0008</span>
            </p>
        </div>
        <div class="outline-content">
            <img src="fv.jpg" alt="" class="fv-image">
            <div class="inner">
                <h2>
                    笑顔で過ごす、<span class="bp">もうひとつの“我が家”</span>
                </h2>
                <p class="text">
                    特別養護老人ホーム室賀の里は、入居される方が自分らしく、穏やかな毎日を過ごせるよう支援する施設です。<br>
                    少人数のユニットケアで家庭的な雰囲気を大切にしながら、地域の方々とのつながりも大切にしています。外出やおやつ作り、季節の行事などを通して、安心して暮らせる場所を目指しています。
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
            <img src="muroganosato-1.jpg" alt="">
            <div class="news-wr">
                <h3>ゆっくり、自分らしく暮らす。</h3>
                <p class="text">
                    2つのリビング『<ruby>楽<rt>たの</rt></ruby>』と『<ruby>和<rt>なごみ</rt></ruby>』に分かれ、家庭的な雰囲気の中で食事やおしゃべりを楽しみます。<br>
                    入浴には室賀温泉の引き湯を使用。身体の状態に合わせた浴槽を利用でき、心も体もほっと温まります。<br>
                    地域のボランティアさんが訪れたり、花見や納涼祭、敬老会などの季節行事、書道や生け花などのクラブ活動を楽しんだり。笑顔あふれる、にぎやかで優しい時間が流れています。<br>
                    定期的な医師の往診や理学療法士による訓練で、健康面のサポートも充実しています。
                </p>
            </div>
        </div>
        <div class="images">
            <img src="<?= $base ?>/muroganosato.jpg" alt="">
            <img src="muroganosato-2.jpg" alt="">
            <img src="muroganosato-3.jpg" alt="">
            <img src="muroganosato-4.jpg" alt="">
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
                <h2>室賀の里の支援内容</h2>
            </div>
        </hgroup>
        <div class="content-wr">
            <ol class="content-list">
                <li>週2回以上の入浴か清拭</li>
                <li>嗜好に配慮した食事の提供</li>
                <li>適切な排せつ自立の援助、適切なおむつ介助、離床、更衣、整容などの援助</li>
                <li>教養・娯楽・レクリエーション・各種行事</li>
                <li>機能訓練</li>
                <li>健康管理</li>
                <li>相談援助</li>
                <li>行政機関への代行事務</li>
                <li>短期宿泊</li>
            </ol>
            <p class="text">など</p>
        </div>
    </section>
    <section id="border">
        <hgroup class="content-head">
            <div class="head-wr">
                <h2>入所基準</h2>
            </div>
        </hgroup>
        <table class="info-table">
            <tbody>
                <tr>
                    <th>年齢</th>
                    <td colspan="2">65歳以上</td>
                </tr>
                <tr>
                    <th>介護レベル</th>
                    <td colspan="2">要介護３～５</td>
                </tr>
                <tr>
                    <th>認知症</th>
                    <td colspan="2">対応</td>
                </tr>
                <tr>
                    <th>共同生活</th>
                    <td colspan="2">要</td>
                </tr>
            </tbody>
        </table>
    </section>
    <section id="flow">
        <hgroup class="content-head">
            <div class="head-wr">
                <h2>ご利用の流れ</h2>
            </div>
        </hgroup>
        <div class="content-wr">
            <p class="text">
                まずはお気軽にご相談ください。
            </p>
            <div class="link-content">
                <p class="text">
                    ※高齢者全般の相談はこちら
                </p>
                <a href="<?= $facility_base ?>/shiinomi/" class="btn-2">川西地域包括センター</a>
            </div>
            <div class="link-content">
                <p class="text">
                    ※介護保険・要介護１以上の方の相談はこちら
                </p>
                <a href="<?= $facility_base ?>/shiinomi/" class="btn-2">いきいき介護センター</a>
            </div>
            <div class="link-content">
                <p class="text">
                    ※福祉全般の相談はこちら
                </p>
                <a href="<?= $facility_base ?>/shiinomi/" class="btn-2">かわにし</a>
            </div>
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
                    <td colspan="2">室賀の里</td>
                </tr>
                <tr>
                    <th>サービスの種類</th>
                    <td colspan="2">特別養護老人ホーム</td>
                </tr>
                <tr>
                    <th>所在地</th>
                    <td colspan="2">上田市上室賀19番地</td>
                </tr>
                <tr>
                    <th>連絡先</th>
                    <td colspan="2">（TEL）0268-31-0002（FAX）0268-31-0008</td>
                </tr>
                <tr>
                    <th>事業所番号</th>
                    <td colspan="2">2070300252</td>
                </tr>
                <tr>
                    <th>管理者</th>
                    <td colspan="2">施設長 村上 恒夫</td>
                </tr>
                <tr>
                    <th>事業開始年月日</th>
                    <td colspan="2">平成6年7月1日</td>
                </tr>
                <tr>
                    <th>利用定員</th>
                    <td colspan="2">74名</td>
                </tr>
                <tr>
                    <th>営業日</th>
                    <td colspan="2">年中無休（24時間対応）</td>
                </tr>
                <tr>
                    <th>苦情等の連絡先</th>
                    <td colspan="2">主任生活相談員　倉島 和彦</td>
                </tr>
            </tbody>
        </table>
        <table class="info-table sub-table">
            <tbody>
                <tr>
                    <th class="category" rowspan="12">職員体制</th>
                    <td>施設長</td>
                    <td>1名</td>
                </tr>
                <tr>
                    <td>生活相談員</td>
                    <td>2名（1名兼務）</td>
                </tr>
                <tr>
                    <td>介護支援専門員</td>
                    <td>1名</td>
                </tr>
                <tr>
                    <td>医師</td>
                    <td>2名（非常勤）</td>
                </tr>
                <tr>
                    <td>看護師</td>
                    <td>4名</td>
                </tr>
                <tr>
                    <td>理学療法士</td>
                    <td>1名（非常勤）</td>
                </tr>
                <tr>
                    <td>機能訓練指導員</td>
                    <td>1名</td>
                </tr>
                <tr>
                    <td>介護職員</td>
                    <td>41名（パート4名含む）（うち介護福祉士28名）</td>
                </tr>
                <tr>
                    <td>管理栄養士</td>
                    <td>2名（1名兼務）</td>
                </tr>
                <tr>
                    <td>事務職員</td>
                    <td>4名（兼務）</td>
                </tr>
                <tr>
                    <td>その他の職員</td>
                    <td>4名</td>
                </tr>
                <tr>
                    <td>合計</td>
                    <td>62名</td>
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
        <table class="info-table">
            <tbody>
                <tr>
                    <th>要介護1の方</th>
                    <td>589円/日</td>
                </tr>
                <tr>
                    <th>要介護2の方</th>
                    <td>659円/日</td>
                </tr>
                <tr>
                    <th>要介護3の方</th>
                    <td>732円/日</td>
                </tr>
                <tr>
                    <th>要介護4の方</th>
                    <td>802円/日</td>
                </tr>
                <tr>
                    <th>要介護5の方</th>
                    <td>871円/日</td>
                </tr>
                <tr>
                    <th>個別機能訓練加算Ⅰ</th>
                    <td>12円/日</td>
                </tr>
                <tr>
                    <th>個別機能訓練加算Ⅱ</th>
                    <td>20円/月</td>
                </tr>
                <tr>
                    <th>看護体制加算Ⅰ</th>
                    <td>4円/日</td>
                </tr>
                <tr>
                    <th>夜勤職員配置加算Ⅲ</th>
                    <td>16円/日</td>
                </tr>
                <tr>
                    <th>日常生活継続支援加算Ⅰ</th>
                    <td>36円/日</td>
                </tr>
                <tr>
                    <th>褥瘡マネジメント加算Ⅰ</th>
                    <td>3円/月</td>
                </tr>
                <tr>
                    <th>科学的介護推進体制加算Ⅱ</th>
                    <td>50円/月</td>
                </tr>
                <tr>
                    <th>介護職員等処遇改善加算Ⅰ</th>
                    <td>14.0%（所定単位数に加算）</td>
                </tr>
                <tr>
                    <th class="mark">療養食加算</th>
                    <td>6円/回（1日3回を限度）</td>
                </tr>
                <tr>
                    <th class="mark">経口維持加算Ⅰ</th>
                    <td>400円/月</td>
                </tr>
                <tr>
                    <th class="mark">看取り介護加算1</th>
                    <td>72円/日</td>
                </tr>
                <tr>
                    <th class="mark">看取り介護加算2</th>
                    <td>144円/日</td>
                </tr>
                <tr>
                    <th class="mark">看取り介護加算3</th>
                    <td>680円/日</td>
                </tr>
                <tr>
                    <th class="mark">看取り介護加算4</th>
                    <td>1,280円/日</td>
                </tr>
                <tr>
                    <th class="mark">安全対策体制加算</th>
                    <td>20円/回（入所時1回限り）</td>
                </tr>
                <tr>
                    <th class="mark">再入所時栄養連携加算</th>
                    <td>200円/回</td>
                </tr>
                <tr>
                    <th class="mark">外泊時費用</th>
                    <td>246円/日（月6日を限度）</td>
                </tr>
                <tr>
                    <th class="mark">初期加算</th>
                    <td>30円/日（入所日～30日以内）</td>
                </tr>
                <tr>
                    <th>食費</th>
                    <td>1,600円/日</td>
                </tr>
                <tr>
                    <th>居住費（多床室）</th>
                    <td>915円/日</td>
                </tr>
            </tbody>
        </table>
        <p class="text">◆は必要な方のみの加算です。</p>
        <p class="text">
            ※特別養護老人ホームへの入所(入所申込み含む)は、原則要介護3以上の方です。<br>
            なお要介護1や2であっても、やむを得ない事情がある場合は、上田市の認可を受けて特例的に入所(入所申込み)をすることができます。
        </p>
    </section>
</div>
</main>
<?php include $base . '/footer.php'; ?>
</body>
</html>