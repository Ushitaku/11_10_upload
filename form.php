<?php

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>お買い上げ</title>
</head>

<body>
    <div class="content">
        <h1 class="content_title scroll-fade">お買い上げありがとうございました！</h1>
        <div class="content_box scroll-fade">
            <input type="text" id="send-name" name="send-name" placeholder="名前を入力してください。" value="" />
            <input type="text" placeholder="件名を入力してください。" id="send-subject" value="" />
            <textarea placeholder="メッセージを入力して下さい。" id="send-body" rows="10"></textarea>
            <input type="button" id="send-btn" value="送信する">
        </div>
    </div>
    <!-- フォント読み込み -->
    <script type="text/javascript" src="js/font.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="js/form.js"></script>
    <script src="js/animation.js"></script>
</body>

</html>