<?php /* Smarty version 2.6.32, created on 2021-10-30 08:46:24
         compiled from search.tpl */ ?>
<link rel="stylesheet" type="text/css" href="test.css">
<a href="/kadai/mylunch/controller/UI_controller.php?page=1">管理画面に戻る</a>
<form action="/kadai/mylunch/controller/search_controller.php" method="post">
    <input type="number" name="ID">
    <label>IDで検索</label>
    <input type="text" name="Lunch">
    <label>ランチで検索</label>
    <input type="text" name="City">
    <label>都市で検索</label>
    <input type="submit" name="submit" value="送信">
</form>
<table class="tbl-r02">
    <tr>
        <th>ID</th>
        <th>都市</th>
        <th>都市ID</th>
        <th>ランチ</th>
        <th>Edit</th>
    </tr>
</table>
<?php $_from = $this->_tpl_vars['stmt']; if (($_from instanceof StdClass) || (!is_array($_from) && !is_object($_from))) { settype($_from, 'array'); }$this->_foreach['loopname'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['loopname']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['row']):
        $this->_foreach['loopname']['iteration']++;
?>
    <?php $this->assign('i', ($this->_foreach['loopname']['iteration']-1)); ?>
    <table>
        <tr>
            <td><?php echo $this->_tpl_vars['row'][0]; ?>
</td>
            <td><?php echo $this->_tpl_vars['row'][2]; ?>
</td>
            <td><?php echo $this->_tpl_vars['row'][1]; ?>
</td>
            <td><?php echo $this->_tpl_vars['row'][3]; ?>
</td>
            <td><a href='/kadai/mylunch/controller/SQL_Edit_controller.php?index=<?php echo $this->_tpl_vars['row'][$this->_tpl_vars['i']]; ?>
' class='edit'>編集</a></td>
        </tr>
    </table>
<?php endforeach; endif; unset($_from); ?>