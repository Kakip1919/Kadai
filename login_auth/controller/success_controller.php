<?php
require("C:\MAMP\htdocs\kadai\Smarty\Smarty.class.php");
require_once "../models/success.php";
$smarty = new Smarty();
$smarty->template_dir = dirname(dirname(__FILE__)) . '/templates';
$smarty->compile_dir = dirname(dirname(__FILE__)) . '/templates_c';
$smarty->display('success.tpl');