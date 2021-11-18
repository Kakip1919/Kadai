<?php

$submit_button = $_GET["submit"];
$cookie_username = $_GET["username"];
$cookie_birthday_year = $_GET["target_year"];
$cookie_birthday_month = $_GET["target_month"];
$cookie_birthday_day = $_GET["target_day"];

setcookie("username", $cookie_username, time()+60*60*24*14);
setcookie("birthday_year", $cookie_birthday_year, time()+60*60*24*14);
setcookie("birthday_month", $cookie_birthday_month, time()+60*60*24*14);
setcookie("birthday_day", $cookie_birthday_day, time()+60*60*24*14);

ini_set('display_errors', 0);

if(isset($_COOKIE["birthday"])){
    $cookie_birthday_year = $_COOKIE["birthday"];
}else{
    $cookie_birthday_year = "";
}

echo "<h1>プロフィール作成画面</h1>";
echo "<h2>お名前を入力してください</h2>";
?>
<form action="" method="get" class="form-example">
    <div class="form-example">
        <input type="text" name="username" class="text_field" value="">
        <?php echo "<h2>生年月日を入力してください</h2>"; ?>
        <input maxlength="4" type="tel" name="target_year" class="text_field" value="2000">
        <input maxlength="2" type="tel" name="target_month" class="text_field">
        <input maxlength="2" type="tel" name="target_day" class="text_field">
        <input type="submit" name="submit" value="クッキーを設定する！">
    </div>
</form>

<?php
if($submit_button == "クッキーを設定する！"){
    echo "<h1>クッキーを設定しました</h1>";
}

