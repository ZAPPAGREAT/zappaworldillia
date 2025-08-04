<?php
header('Content-Type: application/json');
mb_language("Japanese");
mb_internal_encoding("UTF-8");

$name = $_POST['item_name_1'];
$age = $_POST['item_age'];
$email = $_POST['item_mail_1'];
$subject = $_POST['item_subject'];
$message = $_POST['item_contents'];

$to = "zappagreat@yahoo.co.jp"; // 自分のアドレスに変更！
$subject = "【フォーム送信】" . $subject;
$body = "以下の内容でフォームが送信されました。\n\n";
$body .= "お名前: $name\n";
$body .= "年齢: $age\n";
$body .= "メール: $email\n";
$body .= "件名: $subject\n";
$body .= "内容:\n$message\n";

$headers = "From: ザッパワールディリア お問い合わせフォーム <zappaworldillia.com@sv16527.xserver.jp>";

if (mb_send_mail($to, $subject, $body, $headers)) {
    echo json_encode(['status' => 'success']);
} else {
    echo json_encode(['status' => 'error']);
}
?>