<?php
session_start();
include("functions.php");
check_session_id();
?>

<!DOCTYPE html>
<html lang="ja">
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>購入画面</title>

    <link rel="stylesheet" href="css/upload_style.css" media="screen" title="no title" charset="utf-8">
    <script src="https://code.jquery.com/jquery-2.2.4.js" charset="utf-8"></script>
    <meta name="robots" content="noindex,follow" />
</head>

<body>
    <div class="content">
        <h1 class="content_title scroll-fade">レシート応募キャンペーン</h1>
        <h3 class="scroll-fade">あたりめを購入したレシート画像をアップして豪華景品を当てよう！</h3>
        <form method="post" action="file_upload.php" enctype="multipart/form-data">
            <div id="dragDropArea">
                <div class="drag-drop-inside">
                    <p class="drag-drop-info">ここにファイルをドロップ</p>
                    <p>または</p>
                    <p class="drag-drop-buttons">
                        <input id="fileInput" type="file" accept="image/*" value="ファイルを選択" name="upfile" onChange="photoPreview(event)">
                    </p>
                    <div id="previewArea"></div>
                </div>
            </div>
            <button class="button" type="submit" onclick="location.href='file_upload.php'">応募する</button>
        </form>
    </div>

    <script type="text/javascript" src="js/upload.js"></script>
    <script type="text/javascript" src="js/animation.js"></script>
    <!-- フォント読み込み -->
    <script type="text/javascript" src="js/font.js"></script>
    <script src="js/animation.js"></script>
</body>

</html>