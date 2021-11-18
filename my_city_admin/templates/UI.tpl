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
{* ここでテーブル量産するため、データベースから配列を受け取る必要がある *}
{foreach from=$stmt item=row}
    <table>
        <tr>
            <td> {$row[0]}</td>
            <td> {$row[1]}</td>
            <td><a href='/kadai/my_city_admin/controller/SQL_Edit_controller.php?index={$row[0]}' class='edit'>編集</a></td>
        </tr>
{/foreach}
{section name=bar start=1 loop=$count}
    {assign var=i value=$smarty.section.bar.index}
        <a href="/kadai/my_city_admin/controller/UI_controller.php?page={$i}">{$i}</a>
{/section}
</body>
</html>