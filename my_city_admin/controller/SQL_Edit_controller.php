<?php
session_start();
ini_set('display_errors', "Off");
require("C:\MAMP\htdocs\kadai\Smarty\Smarty.class.php");
require_once "../models/SQL_Edit.php";
$smarty = new Smarty();
$post_index = new post_index();
$post_i = $post_index->post_id();
$smarty->template_dir = dirname(dirname(__FILE__)) . '/templates';
$smarty->compile_dir = dirname(dirname(__FILE__)) . '/templates_c';
$smarty->assign("post",$post_i);
$smarty->display('SQL_Edit.tpl');


