<?php
//セッションを使うことを宣言
session_start();
class logout_class{
    function logout_func(){
//ログインされていない場合は強制的にログインページにリダイレクト
        if (!isset($_SESSION["login"])) {
            header("Location: login_controller.php");
            return exit();
        }
//セッション変数をクリア
        $_SESSION = array();

//クッキーに登録されているセッションidの情報を削除
        if (ini_get("session.use_cookies")) {
           return setcookie(session_name(), '', time() - 42000, '/');
        }
    }
}
//セッションを破棄
session_destroy();
