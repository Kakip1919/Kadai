<?php
//
//
//// (1) 登録するデータを用意
//$id = 1;
//$city = "Tokyo";
//$lunch_name = "pasta";
//
//
//// (2) データベースに接続
//try{
//
//    $db = new PDO("mysql:dbname=mysql;host=127.0.0.1;charset=utf8","root","");
//
//// (3) SQL作成
//    $stmt = $db->prepare("INSERT INTO my_lunch (id, lunch_name, city) VALUES (:id, :lunch_name, :city)");
//    //sql作成したときに設定したキーに値をバインドしていく
//    $stmt->bindValue(':id', 2);
//    $stmt->bindValue(':lunch_name', '牛丼');
//    $stmt->bindValue(':city', '神奈川県');
//    //上記でバインドしたデータをsqlに送る命令を実行する
//    $stmt->execute();
//
//}catch(PDOException $e){
//
//    echo "DB接続エラー: " . $e->getMessage();
//
//}finally {
//    // DB接続を閉じる
//    $pdo = null;
//}
