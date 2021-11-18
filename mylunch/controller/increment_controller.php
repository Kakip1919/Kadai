<?php
ini_set('display_errors', "Off");
session_start();
$get_post_city = $_POST["city"];
$get_post_lunch = $_POST["lunch"];
require("C:\MAMP\htdocs\kadai\Smarty\Smarty.class.php");
require_once "../models/increment.php";
$smarty = new Smarty();
$id_return = new id_return();
$smarty->template_dir =  dirname(dirname(__FILE__)) . '/templates';
$smarty->compile_dir =  dirname(dirname(__FILE__))  . '/templates_c';
$id_re = $id_return->id_re();
$smarty->assign("get_post_city",$get_post_city);
$smarty->assign("get_post_lunch",$get_post_lunch);
$smarty->assign("id",$id_re);
$smarty->display('increment.tpl');