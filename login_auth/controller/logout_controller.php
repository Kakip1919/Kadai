<?php

require("C:\MAMP\htdocs\kadai\Smarty\Smarty.class.php");
require_once "../models/logout.php";
$smarty = new Smarty();
$logout_class = new logout_class();
$logout_func = $logout_class->logout_func();
$smarty->template_dir = dirname(dirname(__FILE__)) . '/templates';
$smarty->compile_dir = dirname(dirname(__FILE__)). '/templates_c';
$smarty->display('logout.tpl');