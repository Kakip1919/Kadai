<?php /* Smarty version 2.6.32, created on 2021-10-30 08:46:41
         compiled from SQL_Edit.tpl */ ?>
<form action="/kadai/my_city_admin/controller/edit_controller.php?index=<?php echo $this->_tpl_vars['post']; ?>
" method="post">
    <div class="block2">
        <label name="id">id:<?php echo $this->_tpl_vars['post']; ?>
</label>
        <input type="hidden" name="id" value=<?php echo $this->_tpl_vars['post']; ?>
>

    </div>
    <div class="block2">
        <label>都市名:</label>
        <input type="text" name="city" required
               minlength="1" maxlength="12" size="20">
    </div>
    <input type="submit" value="変更する">
    <input type="reset" value="リセット">
    <a href="/kadai/my_city_admin/controller/UI_controller.php">管理画面に戻る</a>
</form>
<form action="/kadai/my_city_admin/controller/delete_controller.php?index=<?php echo $this->_tpl_vars['post']; ?>
" method="post">
    <input type="submit" value="削除する">
</form>