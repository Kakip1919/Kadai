<?php /* Smarty version 2.6.32, created on 2021-11-01 00:56:46
         compiled from SQL_Insert.tpl */ ?>
<link rel="stylesheet" type="text/css" href="../Comn/test.css">
<a href="/kadai/mylunch/controller/UI_controller.php?page=1">管理画面に戻る</a>
<form action="/kadai/mylunch/controller/increment_controller.php" method="post">
    <div class="block2">
        <label>都市名:</label>
        <select name="city" size="1">
<?php $_from = $this->_tpl_vars['stmt']; if (($_from instanceof StdClass) || (!is_array($_from) && !is_object($_from))) { settype($_from, 'array'); }$this->_foreach['bar'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['bar']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['city_row']):
        $this->_foreach['bar']['iteration']++;
?>
    <?php $this->assign('i', ($this->_foreach['bar']['iteration']-1)); ?>
        <option value=<?php echo $this->_tpl_vars['i']; ?>
><?php echo $this->_tpl_vars['city_row'][0]; ?>
</option>
<?php endforeach; endif; unset($_from); ?>
</select>

</div>
<div class="block2">
    <label>ランチ名:</label>
    <input type="text" name="lunch" required
           minlength="1" maxlength="12" size="20">
</div>
<input type="submit" name="push" value="追加する">
<input type="reset" value="リセット">
<a href="/kadai/mylunch/controller/UI_controller.php">
</form>