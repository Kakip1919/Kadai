<form action="/kadai/my_city_admin/controller/edit_controller.php?index={$post}" method="post">
    <div class="block2">
        <label name="id">id:{$post}</label>
        <input type="hidden" name="id" value={$post}>

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
<form action="/kadai/my_city_admin/controller/delete_controller.php?index={$post}" method="post">
    <input type="submit" value="削除する">
</form>