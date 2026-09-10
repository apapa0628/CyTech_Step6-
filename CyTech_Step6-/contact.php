<?php

$name = $_POST['name'];
$company = $_POST['company'];
$email = $_POST['email'];
$age = $_POST['age'];
$message = $_POST['message'];

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>送信完了</title>
</head>
<body>

<h2>送信内容</h2>

<?php endif; ?>
<p>お名前：<?php echo $name; ?></p>
<p>会社名：<?php echo $company; ?></p>
<p>メールアドレス：<?php echo $email; ?></p>
<p>年齢：<?php echo $age; ?></p>
<p>お問い合わせ内容：<?php echo nl2br($message); ?></p>
<?php if (...): ?>

</body>
</html>

