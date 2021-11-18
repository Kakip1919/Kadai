<link rel="stylesheet" type="text/css" href="../Comn/test.css">
<a href="/kadai/mylunch/controller/UI_controller.php?page=1">管理画面に戻る</a>
<form action="/kadai/mylunch/controller/increment_controller.php" method="post">
    <div class="block2">
        <label>都市名:</label>
        <select name="city" size="1">
{foreach from=$stmt item=city_row name=bar}
    {assign var=i value=$smarty.foreach.bar.index}
        <option value={$i}>{$city_row[0]}</option>
{/foreach}
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
