<?php

require("C:\MAMP\htdocs\kadai\Smarty\Smarty.class.php");
require_once "../models/models.php";
$smarty = new Smarty();
$Post_data = $_POST["num"];
$word_gene = new Word_gene($Post_data);

//--------------------------------------------------func
$word_generate = $word_gene->word_generate();
$word_count = $word_gene->count();
$shuffled_word = $word_gene->shuffled_word($word_generate);
//--------------------------------------------------func
$smarty->template_dir = dirname(dirname(__FILE__)) . '/templates/';
$smarty->compile_dir = dirname(dirname(__FILE__)) . '/templates_c/';
$smarty->assign('shuffled',$shuffled_word);
$smarty->assign("count",$word_count);
$smarty->display('index.tpl');
