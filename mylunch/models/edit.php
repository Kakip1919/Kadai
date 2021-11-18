<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: /kadai/login_auth/controller/login_controller.php");
    exit();
}

$db_edit = new PDO("mysql:dbname=mysql;host=127.0.0.1;charset=utf8", "root", "");
$stmt = $db_edit->prepare("UPDATE my_lunch SET city_id=:city_id,lunch_name=:my_lunch WHERE id = :id");
$stmt->execute(array(':city_id' => $_POST['city'], ':my_lunch' => $_POST['lunch'], ':id' => $_POST['id']));
echo '更新完了しました';
