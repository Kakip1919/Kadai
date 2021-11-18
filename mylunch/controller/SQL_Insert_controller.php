<?php
ini_set('display_errors', "Off");
session_start();
require("C:\MAMP\htdocs\kadai\Smarty\Smarty.class.php");
require_once "../models/SQL_Insert.php";
$smarty = new Smarty();
$db_insert = new db_insert();
//dirname(__file__)は__file__がファイル直下のディレクトリ dirname(__file__)がファイルディレクトリを示す　dirname(__file__)__file__)
$smarty->template_dir = dirname(dirname(__FILE__)) . '/templates';
$smarty->compile_dir = dirname(dirname(__FILE__)) . '/templates_c';
$db_in = $db_insert->db_in();
$db_in_on = $db_insert->db_in_on($db_in);
$smarty->assign("stmt",$db_in_on);
$smarty->display('SQL_Insert.tpl');



