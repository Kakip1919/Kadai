<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>ログインページ</title>
</head>
<body>
<h1>ログインページ</h1>
<form action="/kadai/login_auth/controller/login_controller.php" method="post">
    <ul>
        <li>ユーザー名：<input name="uname" type="text"></li>
        <li>パスワード：<input name="pass" type="password"></li>
        <li><input name="送信" type="submit"></li>
        {$verifyied}
        <li><a href="/kadai/Home/controller/TOP.php">URL集に戻る</a></li>
    </ul>
</form>
</body>
</html>