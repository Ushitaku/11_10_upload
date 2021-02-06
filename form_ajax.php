<?php
// データ取得
// var_dump($_POST);
// exit();

session_start();
include('functions.php');
check_session_id();

$username = $_POST['username'];
$email = $_POST['email'];
$title = $_POST['title'];
$content = $_POST['content'];

// DB接続
$pdo = connect_to_db();

// いいね状態のチェック（COUNTで件数を取得できる！）
$sql = 'INSERT INTO atarime_form_table(id , username , email , title , content) 
VALUES(NULL , :username, :email , :title , :content)';

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':username', $username, PDO::PARAM_STR);
$stmt->bindValue(':email', $email, PDO::PARAM_STR);
$stmt->bindValue(':title', $title, PDO::PARAM_STR);
$stmt->bindValue(':content', $content, PDO::PARAM_STR);
$status = $stmt->execute();
if ($status == false) {
    // エラー処理
} else {
    $alert = "<script type='text/javascript'>alert('応募完了しました！');</script>";
    echo $alert;
}

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <script>
        var alert = <?php echo json_encode($alert); ?>;
        if (alert = true) {
            location.href = 'login_index.php';
        }
    </script>
</body>

</html>