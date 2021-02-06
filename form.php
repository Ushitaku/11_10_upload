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
    <div id="sending" class="sending">
        送信中です…
    </div>
    <div id="sendafter" class="sendafter">
        送信完了しました！
    </div>
    <div class="content">
        <h1 class="content_title scroll-fade">お気軽にお問合せください</h1>
        <table class="form-table scroll-fade">
            <form action="form_ajax.php" method="POST">
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
                        <td><input id="title" type="text" name="title" size="60" value="" placeholder="件名を入力してください。" required>
                        </td>
                    </tr>
                    <tr>
                        <th>お問い合わせ内容</th>
                        <td><textarea id="content" name="content" cols="30" rows="10" placeholder="お問い合わせ内容を入力してください。" required></textarea>
                        </td>
                    </tr>
                </tbody>
        </table>
        <button id="button" class="button" type="submit">送信する</button>
        </form>
    </div>
    <!-- フォント読み込み -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script type="text/javascript" src="js/font.js"></script>
    <script src="js/animation.js"></script>
    <!-- Ajax送信 -->
    <!-- <script>
        $('#button').on('click', function() {
            $('#sending').fadeIn();
            const requestUrl = 'form_ajax.php';
            // PHPへのリクエストと結果表示
            axios.post(`${requestUrl}`) // リクエスト送信
                .then(function(response) {
                    console.log(response);
                    const output = [];
                    response.data.forEach(function(x) {
                        output.push(`<tr><td>${x.todo}<td><tr>`);
                    });
                })
                .catch(function(error) {
                    console.log(error);
                })
                .finally();
        });
    </script> -->
</body>

</html>