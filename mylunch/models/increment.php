<?php
session_start();

$get_post_city = $_POST["city"];
$get_post_lunch = $_POST["lunch"];
if (!isset($_SESSION["login"])) {
    header("Location: /kadai/login_auth/controller/login_controller.php");
    exit();
}

$db = new PDO("mysql:dbname=mysql;host=127.0.0.1;charset=utf8","root","");
$id_max = $db->query("SELECT max(id) FROM my_lunch")->fetchColumn();
$id_max += 1;
$stmt_insert = $db->prepare("INSERT INTO my_lunch (id, city_id, lunch_name) VALUES (:id, :city_id, :lunch_name)");
$stmt_insert->bindValue(':id', $id_max);
$stmt_insert->bindValue(':city_id', $get_post_city);
$stmt_insert->bindValue(':lunch_name', $get_post_lunch);
$stmt_insert->execute();

class id_return{
    function id_re(){
        $db = new PDO("mysql:dbname=mysql;host=127.0.0.1;charset=utf8","root","");
        return $db->query("SELECT max(id) FROM my_lunch")->fetchColumn() + 1;
    }
}