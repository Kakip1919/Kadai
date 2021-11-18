<?php
session_start();
require("C:\MAMP\htdocs\kadai\Smarty\Smarty.class.php");
require_once "../models/UI.php";
$smarty = new Smarty();
$ui_logic = new ui_rogic();

//----------------------------------------------------------------------------Func
$page_return = $ui_logic->page_return();
$db = $ui_logic->db();
$count_db = $ui_logic->count_db($db);
$table_rowdata = $ui_logic->table_rowdata($page_return,$db);
//----------------------------------------------------------------------------Func

$smarty->template_dir = dirname(dirname(__FILE__)) . '/templates';
$smarty->compile_dir = dirname(dirname(__FILE__)) . '/templates_c';
$smarty->assign("stmt",$table_rowdata);
$smarty->assign("page_return",$page_return);
$smarty->assign("count",$count_db);
$smarty->display('UI.tpl');
