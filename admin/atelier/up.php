<?php
require_once("init.php");

init();

$confirm_up = htmlspecialchars($_POST['up']);
if (preg_match("/^[0-9]+$/", $confirm_up)) {
  $link = mysql_connect('sddb0040086768.cgidb', 'sd_dba_ODI4MzQ2', 'XahJtrWz');
  $db_selected = mysql_select_db('sddb0040086768', $link);
  //$link = mysql_connect('localhost', 'root', 'root');
  //$db_selected = mysql_select_db('update', $link);
  $sql = 'SELECT id from atelier WHERE id > '.$confirm_up. ' order by id LIMIT 1';
  $result_flag = mysql_query($sql);
  while ($row = mysql_fetch_assoc($result_flag)) {
    $next_id = $row['id'];
  }
  $sql = 'UPDATE atelier SET id = 99999 WHERE id = '.$next_id;
  $result_flag = mysql_query($sql);

  $sql = 'UPDATE atelier SET id =' .$next_id.' WHERE id = '.$confirm_up;
  $result_flag = mysql_query($sql);

  $sql = 'UPDATE atelier SET id =' .$confirm_up.' WHERE id = 99999';
  $result_flag = mysql_query($sql);
  
  $close_flag = mysql_close($link);
  header("Location: index.php");
} else {
  $_SESSION["error_message"] = "削除できませんでした。";
  header("Location: index.php");
}
?>
