
<?php

ini_set( 'display_errors', 0 );
if (!isset($_SESSION["login"])) {
    header("Location: /kadai/login_auth/controller/login_controller.php");
    exit();
}
if(!isset($_GET['page'])){
    $page = 1; // 設定されてない場合は1ページ目にする
}else{
    $page = $_GET['page'];
}

class ui_logic_ad{
    function page_return_ad(){
        if(!isset($_GET['page'])){
            return 1;
        }else{
            return $_GET['page'];
        }
    }
    function db_ad(){
        return new PDO("mysql:dbname=mysql;host=127.0.0.1;charset=utf8","root","");
    }
    function count_db_ad($db){
        $sql = "SELECT my_lunch.id, my_city.city_id, my_city.city, my_lunch.lunch_name  FROM my_lunch LEFT JOIN my_city ON my_lunch.city_id = my_city.city_id";
        $stmt = $db-> query($sql);
        $count = $stmt -> rowCount();// データの総数

        $perPage = 10; // １ページあたりのデータ件数
        return ceil($count / $perPage); // 最大ページ数
    }
    function table_rowdata_ad($page,$db){

        $counter = ($page - 1) * 10;
        $count_sql = "SELECT my_lunch.id, my_city.city_id, my_city.city, my_lunch.lunch_name  FROM my_lunch LEFT JOIN my_city ON my_lunch.city_id = my_city.city_id LIMIT 10 OFFSET {$counter}";
        return $db-> query($count_sql);
    }
}

