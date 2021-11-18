<?php

// ID, replyするID, replyの件数, comment

$pdo = new PDO('mysql:dbname=bbs_test;host=localhost' , 'root', '');
$stmt = $pdo->query('SELECT * FROM comments');
$comments = $stmt->fetchAll();
foreach($comments as $comment){
    var_dump($comment);
}

foreach($comments as $comment){
    if($comment[1] == null){

// reply以外のcommentを表示
       // print($comment[3]). "\n";
// replyの"L" 初期値はnull
        $l = "";
// 返信があった場合にprintする関数を読み込む
   //     reply($l, $comments, $comment);
    }
}

function reply($l, $comments, $comment){
// 返信があるコメントのみ以下を実行
    if($comment[2] > 0){
        foreach($comments as $comment2){
// commentIDと返信対象のcommentIDが一致していれば以下を実行
            if($comment[0] == $comment2[1]){
// replyの"L"追加
                $l = $l ." L ";
                print($l .$comment2[3]. "\n");
// 再度、返信があった場合にprintする関数を読み込む
                reply($l, $comments, $comment2);
            }
        }
    }
}