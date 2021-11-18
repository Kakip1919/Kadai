<?php
//セッションを使うことを宣言
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: login_controller.php");
    return exit();
}
