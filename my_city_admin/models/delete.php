<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: /kadai/login_auth/controller/login_controller.php");
    exit();
}
class delete_db
{
    function delete_record($id)
    {
        try {
            $db = new PDO("mysql:dbname=mysql;host=127.0.0.1;charset=utf8", "root", "");
            $sql = "DELETE FROM my_city WHERE city_id={$id}";
            $stmt = $db->prepare($sql);
            $stmt->execute();
            return "更新に成功しました";
        } catch (Exception $e) {
            echo '失敗しました　:::' . $e->getMessage();
        }
    }
}