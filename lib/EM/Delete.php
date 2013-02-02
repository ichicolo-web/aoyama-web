<?php
require_once ('Init.php');
require_once ('Db.php');
Init();

$db = $_POST['db'];
$confirm_delete = htmlspecialchars($_POST['delete']);

if (preg_match("/^[0-9]+$/", $confirm_delete)) {
  $sql = 'DELETE FROM ' .$db. ' WHERE id = ?';
  $sth = $pdo->prepare($sql);
  $sth->execute(array($confirm_delete));
  if ($db == 'atelier') {
    header("Location: /admin/atelier/index.php");
  } else if ($db == 'posts_piano') {
    header("Location: /admin/piano/index.php");
  } else {
    header("Location: /admin/violin/index.php");
  }
} else {
  $_SESSION["error_message"] = "削除できませんでした。";
  if ($db == 'atelier') {
    header("Location: /admin/atelier/index.php");
  } else if ($db == 'posts_piano') {
    header("Location: /admin/piano/index.php");
  } else {
    header("Location: /admin/violin/index.php");
  }
}
