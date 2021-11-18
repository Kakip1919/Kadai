<?php /* Smarty version 2.6.32, created on 2021-10-30 08:45:36
         compiled from index.tpl */ ?>
<!doctype html>
<html lang="jp">
<head>
    <meta charset="utf-8">
    <title>文字数カウンタ</title>
</head>
<body>
<a href="/kadai/Home/controller/TOP.php" class="back">URL集に戻る</a>
<form action="/kadai/word_count-master/controller/controller.php" method="post">
<textarea name="count_words" rows="10" cols="50">
</textarea>
<button type="submit">送信</button>
</form>
<ul>
<li>行数は、<?php echo $this->_tpl_vars['row_count_one']; ?>
です</li>
<li>半角スペースの数は<?php echo $this->_tpl_vars['space_word_count']; ?>
文字です</li>
<li>全角スペースの数は<?php echo $this->_tpl_vars['space_full_width']; ?>
文字です</li>
<li>段落の数は<?php echo $this->_tpl_vars['paragraph_count']; ?>
です</li>
<li>句読点の数は<?php echo $this->_tpl_vars['final_marks_count']; ?>
文字です</li>
<li>文字数は<?php echo $this->_tpl_vars['text_count']; ?>
文字です</li>
<li>スペース込みの全文字数は<?php echo $this->_tpl_vars['all_text_count']; ?>
文字です</li>
</ul>
</body>
</html>