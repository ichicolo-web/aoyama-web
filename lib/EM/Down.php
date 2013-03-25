<?php
require_once ('Init.php');
require_once ('Db.php');
Init();

$db = $_POST['db'];
$confirm_down = htmlspecialchars($_POST['down']);

if (preg_match("/^[0-9]+$/", $confirm_down)) {
  $sql = 'SELECT id from ' .$db. ' WHERE id < ' .$confirm_down. ' order by id DESC LIMIT 1';
  $result = mysql_query($sql);

  $prev_id = $confirm_down - 1;
  
  $sql = 'UPDATE ' .$db. ' SET id = 99999 WHERE id = ' .$prev_id;
  $result = mysql_query($sql);

  $sql = 'UPDATE ' .$db. ' SET id = ' .$prev_id. ' WHERE id = ' .$confirm_down;
  $result = mysql_query($sql);

  $sql = 'UPDATE ' .$db. ' SET id = ' .$confirm_down. ' WHERE id = 99999';
  $result = mysql_query($sql);

  if ($db == 'atelier') {
    header("Location: /admin/atelier/index.php");
  } else if ($db == 'posts_piano') {
    header("Location: /admin/piano/index.php");
  } else {
    header("Location: /admin/violin/index.php");
  }
} else {
  $_SESSION["error_message"] = "変更できませんでした。";
  if ($db == 'atelier') {
    header("Location: /admin/atelier/index.php");
  } else if ($db == 'posts_piano') {
    header("Location: /admin/piano/index.php");
  } else {
    header("Location: /admin/violin/index.php");
  }
}
