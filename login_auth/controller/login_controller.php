<?php
require("C:\MAMP\htdocs\kadai\Smarty\Smarty.class.php");
require_once "../models/login.php";
$smarty = new Smarty();
$login_auth = new login_auth();
$result = $login_auth->result();
$verifyied = $login_auth->verifyied($result);
$smarty->template_dir = dirname(dirname(__FILE__)) . '/templates';
$smarty->compile_dir = dirname(dirname(__FILE__)) . '/templates_c';
$smarty->display('login.tpl');