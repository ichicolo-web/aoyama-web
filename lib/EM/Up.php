<?php
require_once ('Init.php');
require_once ('Db.php');
Init();

$db = $_POST['db'];
$confirm_up = htmlspecialchars($_POST['up']);

if (preg_match("/^[0-9]+$/", $confirm_up)) {
  $sql = 'SELECT id from ' .$db. ' WHERE id > ? order by id LIMIT 1';
  $sth = $pdo->prepare($sql);
  $sth->execute(array($confirm_up));

  $next_id = $sth->fetchObject()->id;
  $sql = 'UPDATE ' .$db. ' SET id = 99999 WHERE id = ?';
  $sth = $pdo->prepare($sql);
  $sth->execute(array($next_id));

  $sql = 'UPDATE ' .$db. ' SET id = ? WHERE id = ?';
  $sth = $pdo->prepare($sql);
  $sth->execute(array($next_id, $confirm_up));

  $sql = 'UPDATE ' .$db. ' SET id = ? WHERE id = 99999';
  $sth = $pdo->prepare($sql);
  $sth->execute(array($confirm_up));

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
