<?php
$base = '..';
require_once $base . '/meta.php';
// require_once $base . '/wp-get-blog.php';
$title = '上田しいのみ園について';
$description = '上田しいのみ会の法人理念や沿革、名前の由来などをご紹介します。組織体制や決算報告などの情報開示についても、こちらのページをご覧ください。';
$local_path = '/about/'; // サイトのルートからのパスを記入
$og_image = 'shiinoki.jpg'; 
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
<link rel="stylesheet" href="about.css?v=1">
<link href="https://fonts.googleapis.com/css2?family=BIZ+UDPGothic:wght@400;700&family=M+PLUS+Rounded+1c:wght@100;300;400;500;700;800;900&display=swap" rel="stylesheet">
</head>
<body class="about">
<?php include $base . '/header.php'; ?>
<main>
<section class="beginning" id="main-contents">
    <h2 class="head-leaf">小さな若木から始まった、しいのみ会の物語</h2>
    <div class="about-wr">
        <img src="shiinoki.jpg" alt="">
        <p class="text">
            しいのみ会のシンボルツリーである『<ruby>椎<rp>(</rp><rt>しい</rt><rp>)</rp></ruby>の木』は、上田しいのみ園の玄関前に2本並んで立っています。上田しいのみ会という法人名は、椎の木の持つ、強くたくましい生命力にちなんで名づけられました。<br>
            1988年、初代理事長が新潟県の弥彦神社から分けていただいた若木は、今では立派に根を張り、訪れる人をあたたかく迎えています。<br>
            地域に根差し、人々がどんな困難にも負けずに生きていけるように――そんな願いが、この2本の椎の木に込められています。
        </p>
    </div>
</section>
<section class="to-blog">
    <h2 class="head-leaf">今日も、しいのみ日和。</h2>
    <p class="text">
        「しいのみ日和」は、しいのみ会で過ごす日常のひとこまをお届けするブログです。<br>
        利用者さんの笑顔、季節の行事、地域とのふれあい――それらすべてが、私たちの“今”を形づくっています。<br>
        小さな芽が少しずつ伸びていくように、人も地域も支えながら育っていく。<br>
        そんな温もりを、ここから感じていただけたら嬉しいです。
    </p>
    <div class="wp-blog">
        <?php include $base . '/wp-blog.php' ?>
    </div>
    <a href="<?= $base ?>/wp/category/blog/" class="btn-2">もっと見る</a>
</section>
<section class="philosophy">
    <h2 class="head-leaf">法人理念・ご挨拶</h2>
    <ul class="content-list">
        <li>
            <h3>法人理念</h3>
            <img src="rinen.jpg" class="rinen" alt="上田しいのみ会はすべての人が自立した幸せな生活を送ることを願い社会福祉事業を通じてその実現を目指します">
            <div class="text-box text">
                <p>
                    上田しいのみ会は身体障害者、高齢者のための福祉事業を仕事としています。
                </p>
                <ol class="content-list">
                    <li>
                        施設を利用する方々が明るく健康的で安心した生活を送れるための支援をいたします。
                    </li>
                    <li>
                        地域の方々やボランティアの方々と共に、社会に開かれた施設運営を目指します。
                    </li>
                    <li>
                        利用者の方々の人権を尊重し、人間性豊かな介護、支援を実践いたします。
                    </li>
                    <li>
                        利用される方々の自主性を重んじ、主体的な生活のための支援をいたします。
                    </li>
                    <li>
                        温かい心を添えた介護、支援を心掛け、謙虚な気持ちを忘れないよう努めます。
                    </li>
                </ol>
            </div>
        </li>
        <li>
            <h3>ご挨拶</h3>
            <div class="greet-wr">
                <div class="riji">
                    <img src="riji.jpg" alt="">
                    <p>
                        理事長<br>
                        <span class="highlight">村上恒夫</span>
                    </p>
                </div>
                <p class="text">
                    1977年、肢体不自由のハンディキャップを持つ子どもたちの将来を案じたご家族の皆様を中心とした、長年にわたる社会福祉施設建設の運動が実を結び、「社会福祉法人上田しいのみ会」は認可、設立されました。<br>
                    以来、私たちは法人の理念のもと、時代とともに変化する福祉のニーズに応えながら、地域に根差した支援を続けてまいりました。<br>
                    今日まで事業を継続できましたのは、行政の皆様のご指導をはじめ、地域の皆様の深いご理解と温かいご協力の賜物です。心より感謝申し上げます。<br>
                    これからも上田しいのみ会では、全職員が一丸となり、全てのご利用者が安心して過ごせる毎日のために努めてまいります。<br>
                    今後とも変わらぬご支援とご指導を賜りますよう、お願い申し上げます。
                </p>
            </div>
        </li>
    </ul>
</section>
<section id="ayumi">
    <h2 class="head-leaf">法人の歩み</h2>
    <dl id="ayumi-list">
        <div>
            <dt>1977年</dt>
            <dd class="text">
                「社会福祉法人 上田しいのみ会」が厚生大臣より認可
            </dd>
        </div>
        <div>
            <dt>1978年</dt>
            <dd class="text">
                重度身体障害者授産施設「上田しいのみ園」開設
            </dd>
        </div>
        <div>
            <dt>1994年</dt>
            <dd class="text">
                「しいのみ療護園・室賀の里」開設<br>
                デイサービスセンターの事業開始<br>
                在宅介護支援センターの事業開始
            </dd>
        </div>
        <div>
            <dt>2000年</dt>
            <dd class="text">
                いきいき介護サービス事業開始<br>
                生きがいデイサービス事業開始
            </dd>
        </div>
        <div>
            <dt>2002年</dt>
            <dd class="text">
                母子通園「上田市しいのみ園」受託解除<br>
                「上田しいのみ園」、居室改修
            </dd>
        </div>
        <div>
            <dt>2006年</dt>
            <dd class="text">
                在宅介護支援センターから移行届け出<br>
                「川西地域包括センター」開始
            </dd>
        </div>
        <div>
            <dt>2007年</dt>
            <dd class="text">
                しいのみ療護園が障害者支援施設へ移行<br>
                小規模多機能型居宅介護施設「陽だまりの家」完成
            </dd>
        </div>
        <div>
            <dt>2008年</dt>
            <dd class="text">
                小規模多機能型居宅介護施設「陽だまりの家」開設
            </dd>
        </div>
        <div>
            <dt>2009年</dt>
            <dd class="text">
                「上田しいのみ園」が障害者支援施設へ移行
            </dd>
        </div>
        <div>
            <dt>2012年</dt>
            <dd class="text">
                重症心身障害児者通園施設「上田市つむぎの家」上田市より運営を受託<br>
                相談支援事業所「椎の実」開所
            </dd>
        </div>
        <div>
            <dt>2013年</dt>
            <dd class="text">
                室賀の里、18床増床
            </dd>
        </div>
        <div>
            <dt>2019年</dt>
            <dd class="text">
                「しいのみ療護園」内に、託児ルーム完成<br>
                6月より運用開始
            </dd>
        </div>
        <div>
            <dt>2020年</dt>
            <dd class="text">
                介護・福祉相談センター「かわにし」開設<br>
                室賀の里、外国人介護技能実習生4名受け入れ
            </dd>
        </div>
        <div>
            <dt>2021年</dt>
            <dd class="text">
                「陽だまりの家」事業廃止<br>
                「室賀の里ヘルパーステーション」の休止を決定
            </dd>
        </div>
        <div>
            <dt>2023年</dt>
            <dd class="text">
                介護技能実習生の寮が完成（古民家を改修）
            </dd>
        </div>
        <div>
            <dt>2024年</dt>
            <dd class="text">
                「上田市つむぎの家」を、旧陽だまりの家に移転<br>
                5月より事業開始
            </dd>
        </div>
    </dl>
    <button id="view-more" class="btn-2"><span>もっと見る</span></button>
</section>
<section class="corporate-info">
    <h2 class="head-leaf">法人情報・運営について</h2>
    <p class="text">
        法人の運営に関する情報をまとめています。<br>
        決算報告や組織体制、苦情への対応、個人情報保護方針などを公開し、透明性のある運営を心がけています。
    </p>
    <a href="./corporate-info/" class="btn-2">詳細はこちら</a>
</section>
</main>
<?php include $base . '/footer.php'; ?>
<script src="view-more.js" defer></script>
</body>
</html>