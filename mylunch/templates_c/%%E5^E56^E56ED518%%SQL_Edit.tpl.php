<?php /* Smarty version 2.6.32, created on 2021-10-30 08:46:27
         compiled from SQL_Edit.tpl */ ?>
<form action="/kadai/mylunch/controller/edit_controller.php?index=<?php echo $this->_tpl_vars['post']; ?>
" method="post">
    <div class="block2">
        <label name="id">id:<?php echo $this->_tpl_vars['post']; ?>
</label>
        <input type="hidden" name="id" value=<?php echo $this->_tpl_vars['post']; ?>
>

    </div>
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
    <label>ランチ名:</label>
    <input type="text" name="lunch" required
           minlength="1" maxlength="12" size="20">
    <input type="submit" value="変更する">
    <input type="reset" value="リセット">
    <a href="/kadai/mylunch/controller/UI_controller.php">管理画面に戻る</a>
</form>
<form action="/kadai/mylunch/controller/delete_controller.php?index=<?php echo $this->_tpl_vars['post']; ?>
" method="post">
    <input type="submit" value="削除する">
</form>