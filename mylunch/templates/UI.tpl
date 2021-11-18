<html lang="ja">
<head>
    <link rel="stylesheet" type="text/css" href="../Comn/test.css">
</head>
<body>

    <h1>my_lunch用管理画面</h1>
    <h3><a href="/kadai/mylunch/controller/SQL_Insert_controller.php">データベースに追加する</a></h3>
    <a href="/kadai/my_city_admin/controller/UI_controller.php?page=1" class="url">my_city管理画面へ</a>
    <a href="/kadai/Home/controller/TOP.php" class="back">URL集に戻る</a>
    <a href="/kadai/mylunch/controller/search_controller.php">検索画面へ行く</a>

<table class="tbl-r02">
    <tr>
        <th>ID</th>
        <th>都市</th>
        <th>都市ID</th>
        <th>ランチ</th>
        <th>Edit</th>
    </tr>
</table>
{* ここでテーブル量産するため、データベースから配列を受け取る必要がある *}
{foreach from=$stmt item=row}
    <table>
        <tr>
            <td>{$row[0]}</td>
            <td>{$row[2]}</td>
            <td>{$row[1]}</td>
            <td>{$row[3]}</td>
            <td><a href='/kadai/mylunch/controller/SQL_Edit_controller.php?index={$row[0]}' class='edit'>編集</a></td>
        </tr>
    </table>
{/foreach}

{section name=bar start=0 loop=$count}{*11*}
    {assign var=i value=$smarty.section.bar.iteration}
        <a href="/kadai/mylunch/controller/UI_controller.php?page={$i}">{$i}</a>
{/section}
</body>
</html>