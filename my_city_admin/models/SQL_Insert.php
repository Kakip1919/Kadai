<?php
session_start();
//関数化する必要のないコードもある
if (!isset($_SESSION["login"])) {
    header("Location: /kadai/login_auth/controller/login_controller.php");
    exit();
}


