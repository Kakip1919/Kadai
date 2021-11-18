<link rel="stylesheet" type="text/css" href="test.css">
<a href="/kadai/my_city_admin/controller/UI_controller.php">管理画面に戻る</a>
<form action="/kadai/my_city_admin/controller/search_controller.php" method="post">
    <!-- 任意の<input>要素＝入力欄などを用意する -->
    <input type="number" name="City_ID">
    <label>都市IDで検索</label>
    <input type="text" name="City">
    <label>都市で検索</label>
    <input type="submit" name="submit" value="送信">
</form>

<table class="tbl-r02">
    <tr>
        <th>都市ID</th>
        <th>都市</th>
        <th>Edit</th>
    </tr>
</table>

{foreach from=$stmt item=row name=loopname}
    {assign var=i value=$smarty.foreach.loopname.index}
    <table>
        <tr>
            <td>{$row[0]}</td>
            <td>{$row[1]}</td>
            <td><a href='/kadai/my_city_admin/controller/SQL_Edit_controller.php?index={$i}' class='edit'>編集</a></td>
        </tr>
    </table>
{/foreach}
