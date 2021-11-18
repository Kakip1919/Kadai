<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: /kadai/login_auth/controller/login_controller.php");
    exit();
}
class post_index{
    function post_id(){
        return $_GET["index"];
    }

}
