<?php /* Smarty version 2.6.32, created on 2021-10-30 08:38:48
         compiled from index.tpl */ ?>
<html lang="jp">
<head>
    <link rel="stylesheet" type="text/css" href="../Comn/style.css">
</head>
<body>
<header>
    <h1 class="site_name">制作物まとめ</h1>
</header>
<div class="container">
    <form action="" method="post">
        <section>

            <?php if (isset ( $_SESSION['login'] ) === True): ?>
                <a href="/kadai/login_auth/controller/success_controller.php">"マイページ"</a>
            <?php endif; ?>
            -------------URL集--------------
            <br>
            <a href="/kadai/mylunch/controller/UI_controller.php?page=1">my_lunch管理画面</a>
            <br>
            <a href="/kadai/my_city_admin/controller/UI_controller.php">my_city管理画面</a>
            <br>
            <a href="/kadai/rand_word/controller/controller.php">ランダム文字生成</a>
            <br>
            <a href="/kadai/Rokuyo_Cal/controller/controller.php">六曜/記念日計算</a>
            <br>
            <a href="/kadai/word_count-master/controller/controller.php">文字数カウント</a>
            <br>
            <a href="/kadai/koyomi/controller/controller.php">西暦から昭和などを計算</a>
        </section>
    </form>
</div>
<footer>
</footer>
</body>
</html>