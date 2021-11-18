<?php
//mycityとmylunch管理画面にアクセスした際にセッションにログイン情報がなかった場合は、ログイン画面が表示される処理

//セッションを使うことを宣言
session_start();

//ログイン状態の場合ログイン後のページにリダイレクト
class login_auth
{
    public function result()
    {
        try {
            $pdo = new PDO("mysql:dbname=login_auth;host=localhost;charset=utf8", "root", "");
            $sth = $pdo->query('SELECT * from account');
            $result = $sth->fetch(PDO::FETCH_ASSOC);
            if(!empty($result)){
                return $result;
            }
            $sth = null;
        } catch (PDOException $e) { // PDOExceptionをキャッチする
            print "エラー!: " . $e->getMessage() . "<br/gt;";
        }
    }

    public function verifyied($result)
    {
        var_dump($_POST["pass"]);
        if (!$_POST['pass'] == $result['pass']) {
            $message = "ユーザー名かパスワードが違います";
            return $message;
        } //正しいとき

        session_regenerate_id(TRUE); //セッションidを再発行
        $_SESSION["login"] = $_POST['uname']; //セッションにログイン情報を登録
        echo "ここまで来ています";
        header("Location: success_controller.php"); //ログイン後のページにリダイレクト
        return exit();
    }
}
