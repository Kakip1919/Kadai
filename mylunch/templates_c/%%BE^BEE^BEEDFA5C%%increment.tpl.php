<?php /* Smarty version 2.6.32, created on 2021-11-01 00:58:26
         compiled from increment.tpl */ ?>
<form action="/kadai/mylunch/controller/UI_controller.php?page=1" method="post">
<?php if (isset ( $this->_tpl_vars['get_post_city'] ) || isset ( $this->_tpl_vars['get_post_lunch'] )): ?>
    <h3>id:<?php echo $this->_tpl_vars['id']; ?>
,city:<?php echo $this->_tpl_vars['get_post_city']; ?>
,lunch:<?php echo $this->_tpl_vars['get_post_lunch']; ?>
を追加しました。</h3>
<?php else: ?>
    追加できませんでした
<?php endif; ?>
    <input type="submit" value="OK">
</form>