<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: /kadai/login_auth/controller/login_controller.php");
    exit();
}
$id = $_GET["index"];
$db = new PDO("mysql:dbname=mysql;host=127.0.0.1;charset=utf8","root","");
$sql = "DELETE FROM my_lunch WHERE id= {$id}";
$stmt = $db->query($sql);
$stmt->execute();
if($id){
echo "削除完了しました";
}