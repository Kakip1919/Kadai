<?php
session_start();
$post_like_city = '%' . $_POST["City"] . '%';
$post_id = $_POST["City_ID"];
require("C:\MAMP\htdocs\kadai\Smarty\Smarty.class.php");
require_once "../models/search.php";
$smarty = new Smarty();
$search_class = new search_class();
$search_db = $search_class->search_db();
$do_query = $search_class->db_query($search_db,$post_id,$post_like_city);
$smarty->template_dir =  dirname(dirname(__FILE__)) . '/templates';
$smarty->compile_dir =  dirname(dirname(__FILE__)) . '/templates_c';
$smarty->assign("stmt",$do_query);
$smarty->display('search.tpl');
