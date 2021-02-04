<?php
// データ取得
$name = $_POST['name'];
$subject = $_POST['subject'];
$body = $_POST['body'];

//送信メール作成
mb_language("Japanese");
mb_internal_encoding("utf-8");
$to = "送信先メールアドレス";
$header = "From: 送信元メールアドレス";
$subject = ".$subject;
$body = "お名前".$name."
お問合せ内容：".$body."";

// メール送信
if(mb_send_mail($to,$subject,$body,$header)){
  echo "success";
}