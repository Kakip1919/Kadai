<?php
session_start();

$id = $_POST["id"];
$city = $_POST["city"];
if (!isset($_SESSION["login"])) {
    header("Location: /kadai/login_auth/controller/login_controller.php");
    exit();
}
try {
    $db_edit = new PDO("mysql:dbname=mysql;host=127.0.0.1;charset=utf8", "root", "");
    $stmt = $db_edit->prepare("UPDATE my_city SET city=:city WHERE city_id = :city_id");
    $stmt->execute(array(':city' => $_POST['city'], ':city_id' => $_POST['id']));
    echo '更新完了しました';
}catch(Exception $e){
    echo '失敗しました　:::'.$e->getMessage();
}


