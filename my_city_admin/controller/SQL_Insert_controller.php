<?php
ini_set( 'display_errors', 0 );
session_start();
require("C:\MAMP\htdocs\kadai\Smarty\Smarty.class.php");
require_once "../models/SQL_Insert.php";
$smarty = new Smarty();
//dirname(__file__)は__file__がファイル直下のディレクトリ dirname(__file__)がファイルディレクトリを示す　dirname(__file__)__file__)
$smarty->template_dir = dirname(dirname(__FILE__)) . '/templates';
$smarty->compile_dir = dirname(dirname(__FILE__)) . '/templates_c';
$smarty->display('SQL_Insert.tpl');



