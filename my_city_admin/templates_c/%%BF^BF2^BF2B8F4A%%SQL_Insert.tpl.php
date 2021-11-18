<?php /* Smarty version 2.6.32, created on 2021-10-30 08:41:16
         compiled from SQL_Insert.tpl */ ?>
<link rel="stylesheet" type="text/css" href="test.css">
<div class="block"></div>
<form action="/kadai/my_city_admin/controller/increment_controller.php" method="post">
    <div class="block2">
    </div>
    <div class="block2">
        <label>都市名:</label>
        <input type="text" id="name" name="city" required
               minlength="1" maxlength="12" size="20">
    </div>
    <input type="submit" name="push" value="追加する">
    <input type="reset" value="リセット">
    <a href="/kadai/my_city_admin/controller/UI_controller.php">管理画面へ戻る</a>
