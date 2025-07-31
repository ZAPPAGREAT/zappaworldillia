<?php
header('Content-Type: application/json'); // JSで扱いやすくする

// 文字化け防止
mb_language("Japanese");
mb_internal_encoding("UTF-8");

// POSTデータ取得
$name = $_POST['item_name_1'] ?? '';
$age = $_POST['item_age'] ?? '';
$email = $_POST['item_mail_1'] ?? '';
$subject = $_POST['item_subject'] ?? '';
$message = $_POST['item_contents'] ?? '';

// バリデーション（お好みで省略可）
if (!$name || !$email || !$subject || !$message) {
    echo json_encode(['status' => 'error', 'message' => '必須項目が未入力です']);
    exit;
}

// 宛先と件名など
$to = "zappagreat@yahoo.co.jp"; // 自分のアドレスに変更！
$subjectFull = "【フォーム送信】" . $subject;
$body = "以下の内容でフォームが送信されました。\n\n";
$body .= "お名前: $name\n";
$body .= "年齢: $age\n";
$body .= "メール: $email\n";
$body .= "件名: $subject\n";
$body .= "内容:\n$message\n";

// メール送信
$headers = "From: $email";
if (mb_send_mail($to, $subjectFull, $body, $headers)) {
    echo json_encode(['status' => 'success']);
} else {
    echo json_encode(['status' => 'error', 'message' => 'メール送信に失敗しました']);
}
