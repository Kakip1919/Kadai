<?php
if (!isset($_SESSION["login"])) {
    header("Location: /kadai/login_auth/controller/login_controller.php");
    exit();
}
class search_admin{

    function db_search(){
        return new PDO("mysql:dbname=mysql;host=127.0.0.1;charset=utf8","root","");
    }

    function search_db($db,$select_id,$like_lunch,$like_city){

        if($_POST["ID"] or $_POST["Lunch"] or $_POST["City"]) {

            if($_POST["ID"] && $_POST["Lunch"] or $_POST["City"] && $_POST["ID"])
            {
                return "IDとその他を絡めた検索はできません。".exit;
            }
            elseif($_POST["ID"]){
                $sql = "SELECT my_lunch.id, my_city.city_id, my_city.city, my_lunch.lunch_name  FROM my_lunch 
                LEFT JOIN my_city ON my_lunch.city_id = my_city.city_id WHERE id= '".$select_id."'";
                return $db-> query($sql);
            }
            elseif($_POST["Lunch"]){
                $sql = "SELECT my_lunch.id, my_city.city_id, my_city.city, my_lunch.lunch_name  FROM my_lunch LEFT JOIN my_city 
                ON my_lunch.city_id = my_city.city_id WHERE lunch_name LIKE '" . $like_lunch . "' ";
                return $db-> query($sql);
            }
            elseif($_POST["City"]) {
                $sql = "SELECT my_lunch.id, my_city.city_id, my_city.city, my_lunch.lunch_name  FROM my_lunch LEFT JOIN my_city 
                ON my_lunch.city_id = my_city.city_id WHERE city LIKE '" . $like_city . "' ";
                return $db->query($sql);
            }
            elseif($_POST["Lunch"] && $_POST["City"]){
                $sql = "SELECT my_lunch.id, my_city.city_id, my_city.city, my_lunch.lunch_name  FROM my_lunch LEFT JOIN my_city 
                ON my_lunch.city_id = my_city.city_id WHERE lunch_name LIKE '" . $like_lunch . "' AND WHERE city LIKE '" . $like_city . "' ";
                return $db-> query($sql);
            }
        }
    }
}