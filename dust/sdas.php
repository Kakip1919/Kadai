<?php

try {
    $pdo = new PDO('mysql:dbname=dasda;host=localhost:8889' , 'root', 'root');
    $stmt = $pdo->query('SELECT * FROM comments');
}
catch (PDOException $e){
    echo 'DB接続エラー！: ' . $e->getMessage();
}

$array = [];
foreach($stmt as $comments){
    $array[] = [$comments["id"],
        $comments["parent"],
        $comments["reply_id"],
        $comments["comment"]];
}

foreach($array as $comment){

    if($comment[1] == 0){
        print("ID: ".$comment[0]."--------".$comment[3]). "\n";
        reply( $array, $comment);
    }
}

function reply( $comments, $comment){
    if($comment[2] > 0){
        foreach($comments as $comment2){
            if($comment[0] == $comment2[1]){
                var_dump($comment2[2]);
                $l = str_repeat(" ", $comment[2]);
                print($l .$comment2[3]."id-:".$comment2[0]."親---:".$comment2[1]."\n");
                reply( $comments, $comment2);
            }
        }
    }
}

// reply_idは対象自体にリプライがあった場合いくつインデントを開けるかのデータ

// 返信があるコメントのみ以下を実行

//    foreach($comments as $value){
//        if($comment[0] == $value[1]){
//            var_dump($value[1]);
//            $array_key[] = $value[1];
//
//        }
//    }
//    var_dump($array_key);
