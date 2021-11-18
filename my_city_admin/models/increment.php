<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: /kadai/login_auth/controller/login_controller.php");
    exit();
}
class increment_insert{

    function insert_db($get_post_city){

        $db = new PDO("mysql:dbname=mysql;host=127.0.0.1;charset=utf8","root","");
        $id_max = $db->query("SELECT max(city_id) FROM my_city")->fetchColumn();
        $id_max += 1;
        $stmt_insert = $db->prepare("INSERT INTO my_city (city_id, city) VALUES (:city_id, :city)");
        $stmt_insert->bindValue(':city_id', $id_max);
        $stmt_insert->bindValue(':city', $get_post_city);
        $stmt_insert->execute();
        if(!empty($id_max)){
            return $id_max;
        }
    }
    function post_city(){
        return $_POST["city"];
    }
}