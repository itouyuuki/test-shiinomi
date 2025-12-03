<?php
$base = '..';
require_once $base . '/meta.php';
$title = '';
$description = '';
$local_path = '/'; // サイトのルートからのパスを記入
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
<meta property="og:type" content="website">
<meta property="og:site_name" content="<?= $site_name ?>">
<meta property="og:url" content="<?= $site_url . $local_path ?>">
<meta property="og:title" content="<?= "$title | $site_name" ?>">
<meta property="og:description" content="<?= $description ?>">
<meta property="og:image" content="<?= $site_url . $local_path . $og_image ?>">
<link rel="stylesheet" href="<?= $base ?>/common.css?v=1">
<link rel="stylesheet" href="./style.css?v=1">
<link href="https://fonts.googleapis.com/css2?family=BIZ+UDPGothic:wght@400;700&family=M+PLUS+Rounded+1c:wght@100;300;400;500;700;800;900&display=swap" rel="stylesheet">
</head>
<body>
<?php include $base . '/header.php'; ?>
<main>
<section class="boxes-wr disability-support">
    <h2>障がい者支援施設</h2>
    <div class="box shiinomien">
        <img src="../shiinomien.jpg" alt="">
        <div class="text-box">
            <p class="small-title">障がい者支援施設</p>
            <div class="title-wr">
                <h3>上田しいのみ園</h3>
                <div class="toggle"></div>
            </div>
            <p class="desc">
                18歳以上の障がいのある方を対象に、入所支援や生活介護、短期入所のサービスを行っています。<br>
                日常生活を自立して過ごせる方を中心に、軽作業（生産活動）や創作的活動などを通じて、その人らしい毎日を送れるように支援しています。
            </p>
        </div>
    </div>
    <div class="box tsumuginoie">
        <img src="../tsumuginoie.jpg" alt="">
        <div class="text-box">
            <p class="small-title">障がい者支援施設</p>
            <div class="title-wr">
                <h3>上田つむぎの家</h3>
                <div class="toggle"></div>
            </div>
            <p class="desc">
                重い障がいを持つお子さんや成人の方が通う、日中活動の施設です。<br>
                専門スタッフが医療的ケアや食事、入浴などを支援しながら、創作活動や機能訓練、個別・集団での療育を通して、一人ひとりの成長と笑顔つむいでいます。
            </p>
        </div>
    </div>
    <div class="box ryogoen">
        <img src="../ryogoen.jpg" alt="">
        <div class="text-box">
            <p class="small-title">障がい者支援施設</p>
            <div class="title-wr">
                <h3>しいのみ療護園</h3>
                <div class="toggle"></div>
            </div>
            <p class="desc">
                18歳以上の身体に障がいのある方を対象とした支援施設です。<br>
                入浴や食事、排せつの介助をはじめ、創作活動やレクリエーションなどを通して、穏やかで安心できる毎日をサポートしています。<br>
                また、在宅で生活する重度の障がいのある方を対象に、短期入所の支援も行っています。
            </p>
        </div>
    </div>
    <div class="box shiinomi">
        <img src="../ryogoen.jpg" alt="">
        <div class="text-box">
            <p class="small-title">障がい者支援施設</p>
            <div class="title-wr">
                <h3>椎の実</h3>
                <div class="toggle"></div>
            </div>
            <p class="desc">
                障がいのある方やご家族など、福祉サービスの利用えをお考えの方のお話しを伺い、一人ひとりに合った利用計画を作成します。
            </p>
        </div>
    </div>
</section>
<section class="boxes-wr elderly-care">
    <h2>高齢者福祉施設</h2>
    <div class="box muroganosato">
        <img src="../muroganosato.jpg" alt="">
        <div class="text-box">
            <p class="small-title">高齢者福祉施設</p>
            <div class="title-wr">
                <h3>特養・室賀の里</h3>
                <div class="toggle"></div>
            </div>
            <p class="desc">
                入居される方が自分らしく、穏やかな毎日を過ごせるよう支援する特別養護老人ホームです。<br>
                少人数のユニットケアで家庭的な雰囲気を大切にしながら、地域の方々との交流も大切にしています。<br>
                外出やおやつ作り、季節の行事などを通して、笑顔あふれる時間を一緒に過ごしています。
            </p>
        </div>
    </div>
    <div class="box day-service">
        <img src="../day-service.jpg" alt="">
        <div class="text-box">
            <p class="small-title">高齢者福祉施設</p>
            <div class="title-wr">
                <h3>室賀デイサービスセンター</h3>
                <div class="toggle"></div>
            </div>
            <p class="desc">
                入浴（温泉あり）や食事、身体機能維持訓練、レクリエーションなどを行うデイサービスです。<br>
                ご自宅での入浴が難しい方や、人との関わりが少なくなりがちな方も、安心して楽しい時間を過ごせます。
            </p>
        </div>
    </div>
    <div class="box ikiikikaigo">
        <img src="../ikiikikaigo.jpg" alt="">
        <div class="text-box">
            <p class="small-title">高齢者福祉施設</p>
            <div class="title-wr">
                <h3>いきいき介護センター</h3>
                <div class="toggle"></div>
            </div>
            <p class="desc">
                在宅生活継続のためのケアプラン作成、利用者支援などを行う、ケアマネージャー（介護支援専門員）の事業所です。
            </p>
        </div>
    </div>
</section>
<section class="boxes-wr consultation">
    <h2>相談</h2>
    <div class="box kawanishi">
        <img src="../kawanishi.jpg" alt="">
        <div class="text-box">
            <p class="small-title">相談</p>
            <div class="title-wr">
                <h3>かわにし</h3>
                <div class="toggle"></div>
            </div>
            <p class="desc">
                障がいのある方や高齢の方、ご家族からのご相談に寄り添い、安心した暮らしを支援しています。
            </p>
        </div>
    </div>
    <div class="box chiikihoukatsushien">
        <img src="../chiikihoukatsushien.jpg" alt="">
        <div class="text-box">
            <p class="small-title">相談</p>
            <div class="title-wr">
                <h3>地域包括支援センター</h3>
                <div class="toggle"></div>
            </div>
            <p class="desc">
                高齢者の介護や暮らしに関する、さまざまなお悩みをご相談いただけます。
            </p>
        </div>
    </div>
</section>
</main>
<?php include $base . '/footer.php'; ?>
</body>
</html>