<?php
session_start();
require_once 'contact_def.php';
require_once 'formlib.php';

$result = submit_fun();
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>予約完了</title>
<link rel="stylesheet" href="contactform.css">
</head>
<body>
<main>
<?php // include_once ''; ?>
<section id="submit">
    <h2>予約完了</h2>
    <?php mail_content($result); ?>
	</div>
    <div class="submit-btn">
        <a href="./" class="to-contact">お問い合わせページへ</a>
        <a href="<?= $base ?>" class="to-top">トップページへ</a>
    </div>
</section>
</main>
<?php // include_once ''; ?>
</body>
</html>