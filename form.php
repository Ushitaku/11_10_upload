<?php
session_start();
include("functions.php");
check_session_id();
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/form_styles.css">
    <title>お問合せ</title>
</head>

<body>
    <div class="content">
        <h1 class="content_title scroll-fade">お気軽にお問合せください</h1>
        <table class="form-table scroll-fade">
            <form action="location.href='form_ajax.php'" method="POST">
                <tbody>
                    <tr>
                        <th>ログイン名</th>
                        <td><input id="username" type="text" name="username" size="60" value="<?php echo $_SESSION['username']; ?>">
                        </td>
                    </tr>
                    <tr>
                        <th>メールアドレス</th>
                        <td><input id="email" type="text" name="email" size="60" value="<?php echo $_SESSION['email']; ?>">
                        </td>
                    </tr>
                    <tr>
                        <th>件名</th>
                        <td><input id="title" type="text" name="title" size="60" value="" placeholder="件名を入力してください。">
                        </td>
                    </tr>
                    <tr>
                        <th>お問い合わせ内容</th>
                        <td><textarea id="content" name="content" cols="30" rows="10" placeholder="お問い合わせ内容を入力してください。"></textarea>
                        </td>
                    </tr>
                </tbody>
            </form>
        </table>
        <button class="button" type="submit" onclick="location.href='form_ajax.php'">送信する</button>
    </div>
    <!-- フォント読み込み -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="js/font.js"></script>
    <script type="text/javascript" src="js/form.js"></script>
    <script src="js/animation.js"></script>
</body>

</html>