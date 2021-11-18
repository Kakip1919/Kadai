<?php
ini_set('display_errors', "Off");
session_start();
require("C:\MAMP\htdocs\kadai\Smarty\Smarty.class.php");
require_once "../models/SQL_Edit.php";
$smarty = new Smarty();
$post_index_ad = new post_index_ad();
$post_id = $post_index_ad->post_id();
$post_city = $post_index_ad->post_city();
$smarty->template_dir = dirname(dirname(__FILE__)) . '/templates';
$smarty->compile_dir = dirname(dirname(__FILE__)) . '/templates_c';
$smarty->assign("stmt",$post_city);
$smarty->assign("post",$post_id);
$smarty->display('SQL_Edit.tpl');


