<?php
ini_set( 'display_errors', 0 );
if (!isset($_SESSION["login"])) {
    header("Location: /kadai/login_auth/controller/login_controller.php");
    return exit();
}
class ui_rogic{

    function page_return(){
        if(!isset($_GET['page'])){
            return 1;
        }else{
            return $_GET['page'];
        }
    }
    function db(){
        return new PDO("mysql:dbname=mysql;host=127.0.0.1;charset=utf8","root","");
    }
    function count_db($db){
        $count_sql = "SELECT city_id,city FROM my_city";
        $stmt1 = $db-> query($count_sql);
        $count = $stmt1-> rowCount();// データの総数
        $perPage = 10; // １ページあたりのデータ件数
        return ceil($count / $perPage)+1;// 最大ページ数
    }
    function table_rowdata($page_return,$db){
        $counter = ($page_return - 1) * 10;
        $sql = "SELECT city_id,city FROM my_city LIMIT 10 OFFSET {$counter}";
        return $db->query($sql);
    }
}