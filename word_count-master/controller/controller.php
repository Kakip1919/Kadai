<?php
require("C:\MAMP\htdocs\kadai\Smarty\Smarty.class.php");
require_once "../models/models.php";
$word_text = $_POST["count_words"];
$smarty = new Smarty();
$Word_Count = new Word_Count();

//-----------------------------------------------------------------------Func
$marks_count = $Word_Count->marks_count_func($word_text);
$marks_half_size = $Word_Count->marks_half_size_func($word_text);
$period_count = $Word_Count->period_count_func($word_text);
$period_half_count = $Word_Count->period_half_size_func($word_text);
$final_marks_count = $Word_Count->final_marks_count_func($marks_count, $period_count, $marks_half_size, $period_half_count);
$row_count = $Word_Count->row_count_func($word_text);
$row_half_size = $Word_Count->row_half_size_func($row_count);
$row_count_one = $Word_Count->row_count_one_func($row_count);
$space_word_count = $Word_Count->space_word_count_func($word_text);
$space_full_width = $Word_Count->space_full_width_func($word_text);
$text_count = $Word_Count->text_count_func($word_text);
$all_text_count = $Word_Count->all_text_count_func($text_count,$row_half_size);
$paragraph_array = $Word_Count->paragraph_array_func($word_text);
$final_text_count = $Word_Count->final_text_count_func($text_count, $space_word_count, $space_full_width, $row_half_size);
$paragraph_count = $Word_Count->paragraph_count_func($paragraph_array);
//-----------------------------------------------------------------------Func

$smarty->template_dir = dirname(dirname(__FILE__)) . '/templates';
$smarty->compile_dir = dirname(dirname(__FILE__)) . '/templates_c';
$smarty->assign('final_marks_count', $final_marks_count);
$smarty->assign('row_count', $row_count);
$smarty->assign('row_half_size',$row_half_size);
$smarty->assign('row_count_one', $row_count_one);
$smarty->assign('space_word_count', $space_word_count);
$smarty->assign('space_full_width', $space_full_width);
$smarty->assign('text_count',$text_count);
$smarty->assign('all_text_count', $all_text_count);
$smarty->assign('paragraph_array', $paragraph_array);
$smarty->assign('final_text_count', $final_text_count);
$smarty->assign('paragraph_count', $paragraph_count);
$smarty->display('index.tpl');
