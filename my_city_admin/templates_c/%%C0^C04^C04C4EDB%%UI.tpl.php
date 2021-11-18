<?php /* Smarty version 2.6.32, created on 2021-10-30 08:40:10
         compiled from UI.tpl */ ?>
<html lang="ja">
<head>
<link rel="stylesheet" type="text/css" href="../Comn/test.css">
</head>
<body>
<a href="/kadai/my_city_admin/controller/search_controller.php">検索画面へ行く</a>
<h1>my_city用管理画面</h1>
<h3><a href="/kadai/my_city_admin/controller/SQL_Insert_controller.php">データベースに追加する</a></h3>
<a href="/kadai/mylunch/controller/UI_controller.php?page=1">my_lunch管理画面へ</a>
<a href="/kadai/Home/controller/TOP.php" class="back">URL集に戻る</a>

<table class="tbl-r02">
    <tr>
        <th>都市ID</th>
        <th>都市</th>
        <th>Edit</th>
    </tr>
</table>
<?php $_from = $this->_tpl_vars['stmt']; if (($_from instanceof StdClass) || (!is_array($_from) && !is_object($_from))) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['row']):
?>
    <table>
        <tr>
            <td> <?php echo $this->_tpl_vars['row'][0]; ?>
</td>
            <td> <?php echo $this->_tpl_vars['row'][1]; ?>
</td>
            <td><a href='/kadai/my_city_admin/controller/SQL_Edit_controller.php?index=<?php echo $this->_tpl_vars['row'][0]; ?>
' class='edit'>編集</a></td>
        </tr>
<?php endforeach; endif; unset($_from); ?>
<?php unset($this->_sections['bar']);
$this->_sections['bar']['name'] = 'bar';
$this->_sections['bar']['start'] = (int)1;
$this->_sections['bar']['loop'] = is_array($_loop=$this->_tpl_vars['count']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['bar']['show'] = true;
$this->_sections['bar']['max'] = $this->_sections['bar']['loop'];
$this->_sections['bar']['step'] = 1;
if ($this->_sections['bar']['start'] < 0)
    $this->_sections['bar']['start'] = max($this->_sections['bar']['step'] > 0 ? 0 : -1, $this->_sections['bar']['loop'] + $this->_sections['bar']['start']);
else
    $this->_sections['bar']['start'] = min($this->_sections['bar']['start'], $this->_sections['bar']['step'] > 0 ? $this->_sections['bar']['loop'] : $this->_sections['bar']['loop']-1);
if ($this->_sections['bar']['show']) {
    $this->_sections['bar']['total'] = min(ceil(($this->_sections['bar']['step'] > 0 ? $this->_sections['bar']['loop'] - $this->_sections['bar']['start'] : $this->_sections['bar']['start']+1)/abs($this->_sections['bar']['step'])), $this->_sections['bar']['max']);
    if ($this->_sections['bar']['total'] == 0)
        $this->_sections['bar']['show'] = false;
} else
    $this->_sections['bar']['total'] = 0;
if ($this->_sections['bar']['show']):

            for ($this->_sections['bar']['index'] = $this->_sections['bar']['start'], $this->_sections['bar']['iteration'] = 1;
                 $this->_sections['bar']['iteration'] <= $this->_sections['bar']['total'];
                 $this->_sections['bar']['index'] += $this->_sections['bar']['step'], $this->_sections['bar']['iteration']++):
$this->_sections['bar']['rownum'] = $this->_sections['bar']['iteration'];
$this->_sections['bar']['index_prev'] = $this->_sections['bar']['index'] - $this->_sections['bar']['step'];
$this->_sections['bar']['index_next'] = $this->_sections['bar']['index'] + $this->_sections['bar']['step'];
$this->_sections['bar']['first']      = ($this->_sections['bar']['iteration'] == 1);
$this->_sections['bar']['last']       = ($this->_sections['bar']['iteration'] == $this->_sections['bar']['total']);
?>
    <?php $this->assign('i', $this->_sections['bar']['index']); ?>
        <a href="/kadai/my_city_admin/controller/UI_controller.php?page=<?php echo $this->_tpl_vars['i']; ?>
"><?php echo $this->_tpl_vars['i']; ?>
</a>
<?php endfor; endif; ?>
</body>
</html>