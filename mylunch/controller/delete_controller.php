<?php
$id = $_GET["index"];
ini_set('display_errors', "Off");
session_start();
require("C:\MAMP\htdocs\kadai\Smarty\Smarty.class.php");
require_once "../models/delete.php";
$smarty = new Smarty();
$smarty->template_dir =  dirname(dirname(__FILE__)) . '/templates';
$smarty->compile_dir =  dirname(dirname(__FILE__)) . '/templates_c';
$smarty->display('delete.tpl');

