<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: /kadai/login_auth/controller/login_controller.php");
    exit();
}
class post_index_ad{
    function post_id(){
        return $_GET["index"];
    }

    function post_city(){
        $db = new PDO("mysql:dbname=mysql;host=127.0.0.1;charset=utf8","root","");
        $sql = "SELECT my_city.city FROM my_city ";
        $stmt = $db->query($sql);
        $stmt->execute();
        return $stmt;
    }

}
