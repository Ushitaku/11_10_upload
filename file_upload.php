<?php
// var_dump($_FILES);
// exit();
session_start();
include("functions.php");
check_session_id();

// ファイルが追加されていない or エラー発生の場合を分ける．
// 送信されたファイルは$_FILES['...'];で受け取る！
// コード
if (!isset($_FILES['upfile']) && $_FILES['upfile']['error'] != 0) {
  // 送られていない，エラーが発生，などの場合
  exit('Error:画像が送信されていません');
} else {
  // 送信が正常に行われたときの処理（この後記述）
  // コード
  $uploaded_file_name = $_FILES['upfile']['name']; //ファイル名の取得
  $temp_path = $_FILES['upfile']['tmp_name']; //tmpフォルダの場所
  $directory_path = 'upload/'; //アップロード先ォルダ
}

// ファイルの拡張子の種類を取得．
// ファイルごとにユニークな名前を作成．（最後に拡張子を追加）
// ファイルの保存場所をファイル名に追加．
// コード
$extension = pathinfo($uploaded_file_name, PATHINFO_EXTENSION);
$unique_name = date('YmdHis') . md5(session_id()) . "." . $extension;
$filename_to_save = $directory_path . $unique_name;
$img = '';

if (!is_uploaded_file($temp_path)) {
  exit('Error:画像がありません'); // tmpフォルダにデータがない
} else { // ↓ここでtmpファイルを移動する
  if (!move_uploaded_file($temp_path, $filename_to_save)) {
    exit('Error:アップロードできませんでした'); // 画像の保存に失敗
  } else {
    chmod($filename_to_save, 0644); // 権限の変更
  }
}

// GETデータ取得
$username = $_SESSION['username'];
// DB接続
$pdo = connect_to_db();
// いいね状態のチェック（COUNTで件数を取得できる！）
$sql = 'INSERT INTO present_table(id, username, image, created_at) 
VALUES(NULL, :username, :image, sysdate())';

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':image', $filename_to_save, PDO::PARAM_STR);
$stmt->bindValue(':username', $username, PDO::PARAM_STR);
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
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>アップロード完了画面</title>
</head>

<body>
  <!-- ここに画像を表示しよう -->
  <?= $img ?>
  <script>
    var alert = <?php echo json_encode($alert); ?>;
    if (alert = true) {
      location.href = 'login_index.php';
    }
  </script>

</body>

</html>