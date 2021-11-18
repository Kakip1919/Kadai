<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: ../../login_auth/login.php");
    exit();
}
$file = file("../cook/city.txt");
$array_str = str_replace("\r\n","",$file);


foreach($array_str as $array) {
    $array_main = explode("\n", $array);
    $array_tab = explode("\t", $array);
    var_dump($array_tab[0]);

    try{
        $db = new PDO("mysql:dbname=mysql;host=127.0.0.1;charset=utf8","root","");

// (3) SQL作成
        $stmt = $db->prepare("INSERT INTO my_city (id, city) VALUES (:id, :city)");
        //sql作成したときに設定したキーに値をバインドしていく
        $stmt->bindValue(':id', $array_tab[0]);
        $stmt->bindValue(':city', $array_tab[1]);

        //上記でバインドしたデータをsqlに送る命令を実行する
        $stmt->execute();

    }catch(PDOException $e){

        echo "DB接続エラー: " . $e->getMessage();

    }finally {
        // DB接続を閉じる
        $pdo = null;
    }
}