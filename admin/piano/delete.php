<?php
require_once("init.php");

init();

$confirm_delete = htmlspecialchars($_POST['delete']);
if (preg_match("/^[0-9]+$/", $confirm_delete)) {
  $link = mysql_connect('localhost', 'root', 'root');
  $db_selected = mysql_select_db('update', $link);
  $sql = "DELETE FROM `posts` WHERE id = $confirm_delete";
  $delete = mysql_query($sql);
  $result_flag = mysql_query($sql);
  $close_flag = mysql_close($link);
  header("Location: admin.php");
} else {
  $_SESSION["error_message"] = "削除できませんでした。半角数字を入力してください。";
  header("Location: admin.php");
}
?>
