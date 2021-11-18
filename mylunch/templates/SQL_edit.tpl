<form action="/kadai/mylunch/controller/edit_controller.php?index={$post}" method="post">
    <div class="block2">
        <label name="id">id:{$post}</label>
        <input type="hidden" name="id" value={$post}>

    </div>
    <div class="block2">
        <label>都市名:</label>
        <select name="city" size="1">
            {foreach from=$stmt item=city_row name=bar}
                {assign var=i value=$smarty.foreach.bar.index}
                <option value={$i}>{$city_row[0]}</option>
            {/foreach}
        </select>
    </div>
    <label>ランチ名:</label>
    <input type="text" name="lunch" required
           minlength="1" maxlength="12" size="20">
    <input type="submit" value="変更する">
    <input type="reset" value="リセット">
    <a href="/kadai/mylunch/controller/UI_controller.php">管理画面に戻る</a>
</form>
<form action="/kadai/mylunch/controller/delete_controller.php?index={$post}" method="post">
    <input type="submit" value="削除する">
</form>