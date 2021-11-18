<?php
session_start();
ini_set('display_errors', "Off");
require("C:\MAMP\htdocs\kadai\Smarty\Smarty.class.php");
require_once "../models/increment.php";
$smarty = new Smarty();
$increment_insert = new increment_insert();
$post_city = $increment_insert->post_city();
$insert_db = $increment_insert->insert_db($post_city);
$smarty->template_dir =  dirname(dirname(__FILE__)) . '/templates';
$smarty->compile_dir =  dirname(dirname(__FILE__))  . '/templates_c';
$smarty->assign("id_max",$insert_db);
$smarty->assign("city",$post_city);
$smarty->display('increment.tpl');