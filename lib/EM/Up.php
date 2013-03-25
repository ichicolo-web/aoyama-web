<?php
require_once ('Init.php');
require_once ('Db.php');
Init();

$db = $_POST['db'];
$confirm_up = htmlspecialchars($_POST['up']);

if (preg_match("/^[0-9]+$/", $confirm_up)) {
  $sql = 'SELECT id from ' .$db. ' WHERE id > ' .$confirm_up. ' order by id LIMIT 1';
  $result = mysql_query($sql);

  $next_id = $confirm_up + 1;
  $sql = 'UPDATE ' .$db. ' SET id = 99999 WHERE id = ' .$next_id;
  $result = mysql_query($sql);

  $sql = 'UPDATE ' .$db. ' SET id = ' .$next_id. ' WHERE id = ' .$confirm_up;
  $result = mysql_query($sql);

  $sql = 'UPDATE ' .$db. ' SET id = ' .$confirm_up. ' WHERE id = 99999';
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
?>
