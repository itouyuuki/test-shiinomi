<?php
$base = '..';
require_once $base . '/meta.php';
$title = '施設紹介';
$description = '上田しいのみ会が運営する、障害福祉・高齢者福祉・相談支援の9施設を紹介します。施設一覧から詳細をご覧いただけます。';
$local_path = '/facilities/';// サイトのルートからのパスを記入
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
<link rel="stylesheet" href="./facilities.css?v=1">
<link href="https://fonts.googleapis.com/css2?family=BIZ+UDPGothic:wght@400;700&family=M+PLUS+Rounded+1c:wght@100;300;400;500;700;800;900&display=swap" rel="stylesheet">
</head>
<body>
<?php include $base . '/header.php'; ?>
<main id="main-contents">
<section id="disability-support" class="boxes-wr disability-support">
    <h2 class="facility-name-head">障がい者支援施設</h2>
    <ul>
        <li>
            <a href="shiinomien/" class="box shiinomien">
                <img width="1500" height="1000" src="../shiinomien.jpg" alt="">
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
            </a>
        </li>
        <li>
            <a href="tsumuginoie/" class="box tsumuginoie">
                <img width="1500" height="1000" src="../tsumuginoie.jpg" alt="">
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
            </a>
        </li>
        <li>
            <a href="ryogoen/" class="box ryogoen">
                <img width="1500" height="1000" src="../ryogoen.jpg" alt="">
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
            </a>
        </li>
        <li>
            <a href="shiinomi/" class="box shiinomi">
                <img width="1200" height="630" src="../ogp.jpg" alt="">
                <div class="text-box">
                    <p class="small-title">障がい者支援施設</p>
                    <div class="title-wr">
                        <h3>椎の実</h3>
                        <div class="toggle"></div>
                    </div>
                    <p class="desc">
                        障がいのある方やご家族など、福祉サービスの利用をお考えの方のお話しを伺い、一人ひとりに合った利用計画を作成します。
                    </p>
                </div>
            </a>
        </li>
    </ul>
</section>
<section id="elderly-care"class="boxes-wr elderly-care">
    <h2 class="facility-name-head">高齢者福祉施設</h2>
    <ul>
        <li>
            <a href="muroganosato/" class="box muroganosato">
                <img width="1500" height="1000" src="../muroganosato.jpg" alt="">
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
            </a>
        </li>
        <li>
            <a href="day-service/" class="box day-service">
                <img width="1500" height="1000" src="../day-service.jpg" alt="">
                <div class="text-box">
                    <p class="small-title">高齢者福祉施設</p>
                    <div class="title-wr">
                        <h3>
                            <span>室賀デイサービス</span
                            ><span>センター</span>
                        </h3>
                        <div class="toggle"></div>
                    </div>
                    <p class="desc">
                        入浴（温泉あり）や食事、身体機能維持訓練、レクリエーションなどを行うデイサービスです。<br>
                        ご自宅での入浴が難しい方や、人との関わりが少なくなりがちな方も、安心して楽しい時間を過ごせます。
                    </p>
                </div>
            </a>
        </li>
        <li>
            <a href="ikiikikaigo/" class="box ikiikikaigo">
                <img width="1500" height="1000" src="../ikiikikaigo.jpg" alt="">
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
            </a>
        </li>
    </ul>
</section>
<section id="consultation" class="boxes-wr consultation">
    <h2 class="facility-name-head">相談</h2>
    <ul>
        <li>
            <a href="kawanishi/" class="box kawanishi">
                <img width="1500" height="1000" src="../kawanishi.jpg" alt="">
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
            </a>
        </li>
        <li>
            <a href="https://www.shiinomikai.com/khoukatsu/" target="houkatsu" class="box chiikihoukatsushien">
                <img width="1500" height="1000" src="../chiikihoukatsushien.jpg" alt="">
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
            </a>
        </li>
    </ul>
</section>
</main>
<?php include $base . '/footer.php'; ?>
</body>
</html>