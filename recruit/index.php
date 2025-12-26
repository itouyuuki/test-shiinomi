<?php
$base = '..';
require_once $base . '/meta.php';
session_start();
require_once 'contact_def.php';
require_once 'formlib.php';
$_SESSION['nonce'] = createNonce();
$title = '上田しいのみ園＿施設紹介';
$description = '障害者支援施設上田しいのみ園〒386-0034上田市中之条801番地TEL:0268-27-3166FAX:0268-27-3175当施設は社会福祉法（障害者自立支援法）に基づく「障害者支援施設」です。障害のある大人の方に施設入所支援を行うとともに、通所・短期入所等を利用していただく施設です。';
$local_path = '/facilities/shiinomien/'; // サイトのルートからのパスを記入
$og_image = ''; 
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
<meta property="og:title" content="<?= $title ?>">
<meta property="og:description" content="<?= $description ?>">
<meta property="og:image" content="<?= $site_url . $local_path . $og_image ?>">
<link rel="stylesheet" href="<?= $base ?>/common.css?v=1">
<link rel="stylesheet" href="./recruit.css?v=1">
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
            <li><a href="#fasility" class="btn-1">施設概要</a></li>
            <li><a href="#fees" class="btn-1">ご利用料金</a></li>
        </ul>
    </details>
    <section id="notice">
        <div class="title-wr">
            <h2>お知らせ</h2>
        </div>
    </section>
    <section id="career">
        <div class="title-wr">
            <h2>研修・キャリアアップ</h2>
        </div>
        <p>
            福祉の仕事に関わる者としての心構えや、介護の基本を再確認するために。<br>
            また、職場で気持ちよくコミュニケーションを取る方法や楽しく働くための工夫、
            <br>スキルアップ・キャリアアップにつながる学びの場として、<br>
            年に2～5回ほど研修を行なっています。<br>
            こうした取り組みによって、一人ひとりの人間力や組織としての力を高め、チームワークをより深めています。
        </p>
        <img src="career-path.png" alt="">
    </section>
    <section id="requirements"></section>
    <section id="question">
        <div class="title-wr">
            <h2>よくある質問</h2>
        </div>
        <ul>
            <li>
                <details>
                    <summary>
                        <h3>未経験でも応募できますか？</h3>
                    </summary>
                    <div class="answer">
                        <p>
                            はい、大丈夫です。<br>
                            入社後の研修やOJTで、介護の基礎から丁寧に学べます。 
                        </p>
                    </div>
                </details>
            </li>
            <li>
                <details>
                    <summary>
                        <h3>勤務する施設は選べますか？</h3>
                    </summary>
                    <div class="answer">
                        <p>
                            基本的には指定の施設での勤務となりますが、本人の希望や特性を考慮して決定します。<br>
                            気になることがありましたら、面接時にご相談ください。
                        </p>
                    </div>
                </details>
            </li>
            <li>
                <details>
                    <summary>
                        <h3>見学はできますか？</h3>
                    </summary>
                    <div class="answer">
                        <p>
                            可能です。<br>
                            お問い合わせフォームよりご連絡ください。
                        </p>
                    </div>
                </details>
            </li>
        </ul>
    </section>
    <section id="apply">
        <div class="title-wr">
            <h2>応募フォーム</h2>
        </div>
        <p class="ap-desc">
            ご応募はこちらから。<br>
            5日以内に担当者より返信いたします。
        </p>
        <form action="confirm.php" method="post">            
            <div class="form-item">
                <label for="experience" class="term-wr">
                    <div class="required">必須</div>
                    <div class="form-term">区分</div>
                </label>
                <div class="radio-box" id="experience">
                    <label><input type="radio" name="experience" value="新卒" required>新卒</label>
                    <label><input type="radio" name="experience" value="中途" required>中途</label>
                </div>
            </div>
            <div class="form-item">
                <label for="fullname" class="term-wr">
                    <div class="required">必須</div>
                    <div class="form-term">お名前</div>
                </label>
                <input type="text" id="fullname" name="fullname" placeholder="例：山田太郎" required>
            </div>
            <div class="form-item">
                <label for="furigana" class="term-wr">
                    <div class="required">必須</div>
                    <div class="form-term">
                        お名前（ふりがな）
                    </div>
                </label>
                <input type="text" id="furigana" name="furigana" placeholder="例：やまだたろう" required>
            </div>
            <div class="form-item">
                <label for="tel" class="term-wr">
                    <div class="required">必須</div>
                    <div class="form-term">電話番号</div>
                </label>
                <input type="tel" id="tel" name="tel" placeholder="例：090-1234-5678" required>
            </div>
            <div class="form-item">
                <label for="email" class="term-wr">
                    <div class="required">必須</div>
                    <div class="form-term">メールアドレス</div>
                </label>
                <input type="email" id="email" name="email" placeholder="例：sample@sample.co.jp" required>
            </div>
            <div class="form-item">
                <label for="certification" class="term-wr">
                    <div class="required">必須</div>
                    <div class="form-term">保有資格</div>
                </label>
                <input type="text" id="certification" name="certification" placeholder="例：介護福祉士" required>
            </div>  
            <div class="form-item">
                <label for="others" class="term-wr">
                    <div class="required">必須</div>
                    <div class="form-term">その他</div>
                </label>
                <textarea name="others" id="others" rows="10" placeholder="ご自由にご記入ください。" required></textarea>
            </div>         
            <button class="btn-2">
                <p>確認する</p>
            </button>
        </form>
    </section>
</div>
</main>
<?php include $base . '/footer.php'; ?>
<script src=""></script>
</body>
</html>

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3211.419553030385!2d138.22277747639552!3d36.39904327236413!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601da2db75d8c807%3A0xe6fd8f7d5ef695d3!2z5LiK55Sw44GX44GE44Gu44G_5ZyS!5e0!3m2!1sja!2sjp!4v1763109110905!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>