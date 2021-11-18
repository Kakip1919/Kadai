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
{foreach from=$stmt item=row name=loopname}
    {assign var=i value=$smarty.foreach.loopname.index}
    <table>
        <tr>
            <td>{$row[0]}</td>
            <td>{$row[2]}</td>
            <td>{$row[1]}</td>
            <td>{$row[3]}</td>
            <td><a href='/kadai/mylunch/controller/SQL_Edit_controller.php?index={$row[$i]}' class='edit'>編集</a></td>
        </tr>
    </table>
{/foreach}
