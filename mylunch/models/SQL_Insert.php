
<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: /kadai/login_auth/controller/login_controller.php");
    exit();
}
class db_insert{
    function db_in(){
        return new PDO("mysql:dbname=mysql;host=127.0.0.1;charset=utf8","root","");
    }
    function db_in_on($db){
        $sql = "SELECT my_city.city FROM my_city ";
        return $db->query($sql);
    }
}


