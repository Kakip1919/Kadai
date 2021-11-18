<?php
session_start();
$like_lunch =  '%'. $_POST['Lunch'] .'%';
$like_city = '%'. $_POST['City'] .'%';
$select_id = $_POST["ID"];
require("C:\MAMP\htdocs\kadai\Smarty\Smarty.class.php");
require_once "../models/search.php";
$smarty = new Smarty();
$search_class = new search_admin();
$search_db = $search_class->db_search();
$do_query = $search_class->search_db($search_db,$select_id,$like_lunch,$like_city);
$smarty->template_dir =  dirname(dirname(__FILE__)) . '/templates';
$smarty->compile_dir =  dirname(dirname(__FILE__)) . '/templates_c';
$smarty->assign("stmt",$do_query);
$smarty->display('search.tpl');
