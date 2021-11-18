<?php
if (!isset($_SESSION["login"])) {
    header("Location: /kadai/login_auth/controller/login_controller.php");
    exit();
}
//$sql = "SELECT * FROM my_city WHERE city_id= '". $_POST['City_ID'] . "' OR city= '" . $_POST['City'] . "' ";
class search_class{

    function search_db(){
        return new PDO("mysql:dbname=mysql;host=127.0.0.1;charset=utf8", "root", "");
    }
    function db_query($db,$post_id,$post_like_city){

        if($_POST["City_ID"]) {
            $sql = "SELECT * FROM my_city WHERE city_id='" . $post_id . "'";
            return $db->query($sql);
        }
        if($_POST["City"]) { //IDおよびユーザー名の入力有無を確認
            $sql = "SELECT * FROM my_city WHERE city LIKE '" . $post_like_city . "'";
            return $db->query($sql);
        }
        if($_POST["City"] && $_POST["City_ID"]){
            $sql = "SELECT * FROM my_city WHERE city LIKE '" . $post_like_city . "' AND WHERE city_id='" . $post_id . "'";
            return $db->query($sql);
        }
        if($_POST["City_ID"] or $_POST["City"]) {
            $sql = "SELECT * FROM my_city WHERE city_id='" . $post_id . "' WHERE city LIKE '" . $post_like_city . "'";
            return $db->query($sql);

        }
    }
}