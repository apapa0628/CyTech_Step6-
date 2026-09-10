<?php

$name = $_POST["name"];
$company = $_POST["company"];
$email = $_POST["email"];
$age = $_POST["age"];
$message = $_POST["message"];

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>お問い合わせフォーム・確認画面</title>
</head>
<body>

<style>
table{
    border-collapse:collapse;
}

table, th, td{
    border:3px solid black;
}

th,td{
    padding:10px;
}
</style>

<header>
    <h2>お問い合わせフォーム・確認画面</h2>
</header>

<aside>
<ul>
    <li><a href="#">トップページ</a></li>
    <li><a href="#">人気投稿</a></li>
    <li><a href="#">エンジニアおすすめ商品</a></li>
    <li><a href="#">エンジニアおすすめ記事</a></li>
    <li><a href="#">投稿ページ</a></li>
</ul>
</aside>

<table border="3" cellspacing="0" cellpadding="10">
    <tr>
        <th>お名前</th>
        <td><?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?></td>
    </tr>

    <tr>
        <th>会社名</th>
        <td><?php echo htmlspecialchars($company, ENT_QUOTES, 'UTF-8'); ?></td>
    </tr>

    <tr>
        <th>メールアドレス</th>
        <td><?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?></td>
    </tr>

    <tr>
        <th>年齢</th>
        <td><?php echo htmlspecialchars($age, ENT_QUOTES, 'UTF-8'); ?></td>
    </tr>

    <tr>
        <th>お問い合わせ内容</th>
        <td><?php echo nl2br(htmlspecialchars($message, ENT_QUOTES, 'UTF-8')); ?></td>
    </tr>
</table>

<br>

<!-- 送信ボタン -->
<form action="contact.php" method="post" onsubmit="return confirmSend();">

    <input type="hidden" name="name" value="<?php echo $name; ?>">
    <input type="hidden" name="company" value="<?php echo $company; ?>">
    <input type="hidden" name="email" value="<?php echo $email; ?>">
    <input type="hidden" name="age" value="<?php echo $age; ?>">
    <input type="hidden" name="message" value="<?php echo $message; ?>">

    <input type="submit" value="送信">

</form>

<!-- 戻るボタン -->
<input type="button" value="戻る" onclick="history.back()">


</body>
</html>