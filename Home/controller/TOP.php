
<?php
ini_set('display_errors', "On");
session_start();
require("C:\MAMP\htdocs\kadai\Smarty\Smarty.class.php");
$smarty = new Smarty();
$smarty->template_dir = dirname(dirname(__FILE__)) . '/templates';
$smarty->compile_dir = dirname(dirname(__FILE__)) . '/templates_c';
$smarty->assign('ses', $_SESSION["login"]);
$smarty->display('index.tpl');


