<?php
session_start();
require_once 'contact_def.php';
require_once 'formlib.php';

confirm_fun();
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>確認画面</title>
    <link rel="stylesheet" href="contactform.css">
    <?php if (! DEBUG) { ?><script src="https://www.google.com/recaptcha/api.js"></script><?php } ?>
    <script>
    function onSubmit(token) {
    if (document.getElementById("contact-form").reportValidity()) {
        document.getElementById("contact-form").submit();
        }
    }
    </script>
</head>
<body>
<main>
<?php // include_once ''; ?>
<section id="confirm">
    <h2>確認画面</h2>
    <p>以下の内容でよろしければ『送信する』を押してください。変更する場合は『入力内容を修正』を押してください。</p>
    <form action="submit.php" method="post" id="contact-form">
        <input type="hidden" name="code" value="<?= $_SESSION['nonce'] ?>">
	    <?php confirm_list(); ?>
        <div class="btn_wrapper">
            <button class="btn" type="button" onclick="history.back();">入力内容を修正</button>
            <button class="submit_btn">送信する</button>
        </div>
    </form>
</section>
</main>
<?php // include_once ''; ?>
</body>
</html>