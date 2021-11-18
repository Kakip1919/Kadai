<?php
session_start();
require("C:\MAMP\htdocs\kadai\Smarty\Smarty.class.php");
require_once "../models/UI.php";
$smarty = new Smarty();
$ui_logic_ad = new ui_logic_ad();

//----------------------------------------------------------------------------Func
$page_return_ad = $ui_logic_ad->page_return_ad();
$db_ad = $ui_logic_ad->db_ad();
$count_db_ad = $ui_logic_ad->count_db_ad($db_ad);
$table_rowdata_ad = $ui_logic_ad->table_rowdata_ad($page_return_ad,$db_ad);
//----------------------------------------------------------------------------Func

$smarty->template_dir = dirname(dirname(__FILE__)) . '/templates';
$smarty->compile_dir = dirname(dirname(__FILE__)) . '/templates_c';
$smarty->assign("stmt",$table_rowdata_ad);
$smarty->assign("page_return",$page_return_ad);
$smarty->assign("count",$count_db_ad);
$smarty->display('UI.tpl');
