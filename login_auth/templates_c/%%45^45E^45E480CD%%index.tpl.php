<?php /* Smarty version 2.6.32, created on 2021-10-28 10:36:03
         compiled from login.tpl */ ?>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../Comn/style.css">

</head>
<body>
<header>
</header>
<div class="container">
    <section>
        <a href="../Home/TOP.php" class="back">URL集に戻る</a>
    </section>
    <section>
        <div class="form_box">
            <p>オプションを選んでください</p>

            <form action="../../rand_word/controller/controller.php" method="post">

                <div class="check">
                    <label for="scales">
                        <input type="checkbox" id="scales" name="num[]" value="num_on" checked>
                        数字
                    </label>
                    <label for="">
                        <input type="checkbox" id="" name="num[]" value="eizi_bg">
                        英字(大文字)
                    </label>
                    <label for="">
                        <input type="checkbox" id="" name="num[]" value="eizi_sm">
                        英字(小文字)
                    </label>
                    <label for="">
                        <input type="checkbox" id="" name="num[]" value="hyphen">
                        -(ハイフン)
                    </label>
                    <label for="">
                        <input type="checkbox" id="" name="num[]" value="under">
                        _(アンダーバー)
                    </label>
                    <label for="">
                        <input type="checkbox" id="" name="num[]" value="slash">
                        /(スラッシュ)
                    </label>
                    <label for="">
                        <input type="checkbox" id="" name="num[]" value="aste">
                        *(アスタリスク)
                    </label>
                    <label for="">
                        <input type="checkbox" id="" name="num[]" value="plus">
                        +(プラス)
                    </label>
                    <label for="">
                        <input type="checkbox" id="" name="num[]" value="dot">
                        .(ドット)
                    </label>
                    <label for="">
                        <input type="checkbox" id="" name="num[]" value="com">
                        ,(カンマ)
                    </label>
                    <label for="">
                        <input type="checkbox" id="" name="num[]" value="ex">
                        !(エクスクラメーション)
                    </label>
                    <label for="">
                        <input type="checkbox" id="" name="num[]" value="doll">
                        $(ドル)
                    </label>
                    <label for="">
                        <input type="checkbox" id="" name="num[]" value="sharp">
                        #(シャープ)
                    </label>
                    <label for="">
                        <input type="checkbox" id="" name="num[]" value="per">
                        %(パーセント)
                    </label>
                    <label for="">
                        <input type="checkbox" id="" name="num[]" value="amper">
                        &(アンパサンド)
                    </label>
                    <label for="">
                        <input type="checkbox" id="" name="num[]" value="left">
                        ((左かっこ)
                    </label>
                    <label for="">
                        <input type="checkbox" id="" name="num[]" value="right">
                        )(右かっこ)
                    </label>
                    <label for="">
                        <input type="checkbox" id="" name="num[]" value="tilde">
                        ~(チルダ)
                    </label>
                    <label for="">
                        <input type="checkbox" id="" name="num[]" value="pipe">
                        |(パイプ)
                    </label>
                    <label for="">
                        文字数：
                        <input type="number" name="word_count_number" value="3">
                    </label>
                    <label for="">
                        生成数：
                        <input type="number" name="word_create_count" value="3">
                    </label>
                    <input class="submit_button" type="submit" value="送信">

                    <?php unset($this->_sections['bar']);
$this->_sections['bar']['name'] = 'bar';
$this->_sections['bar']['start'] = (int)0;
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
                        <ul>
                            <li><?php echo $this->_tpl_vars['shuffled'][$this->_tpl_vars['i']]; ?>
</li>
                        </ul>
                    <?php endfor; endif; ?>
                </div>
            </form>
        </div>
    </section>
</div>
</body>
</html>
