<?php
ini_set('display_errors', "Off");
$id = $_GET["index"];
session_start();
require("C:\MAMP\htdocs\kadai\Smarty\Smarty.class.php");//
require_once "../models/delete.php";
$smarty = new Smarty();
$delete_db = new delete_db();
$delete_record = $delete_db->delete_record($id);
$smarty->template_dir =  dirname(dirname(__FILE__)) . '/templates';
$smarty->compile_dir =  dirname(dirname(__FILE__)) . '/templates_c';
$smarty->display('delete.tpl');

