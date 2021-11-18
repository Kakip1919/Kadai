<?php
require("C:\MAMP\htdocs\kadai\Smarty\Smarty.class.php");
require_once "../models/today_lunch_model.php";

$smarty = new Smarty();
$today_lunch = new Today_lunch();
$display_lunch = $today_lunch->display_Random_Lunch();
$smarty->template_dir = dirname( dirname(__FILE__)) . '/templates/';
$smarty->compile_dir = dirname( dirname(__FILE__)) . '/templates_c/';
$smarty->assign("display_lunch",$display_lunch);
$smarty->display('index.tpl');
