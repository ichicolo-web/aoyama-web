<?php
require_once ('Init.php');
require_once ('Db.php');
Init();

$db = $_POST['db'];
$confirm_id = htmlspecialchars($_POST['check_id']);
$confirm_date = htmlspecialchars($_POST['check_date']);
$confirm_filename = htmlspecialchars($_POST['check_file']);
$confirm_writer = htmlspecialchars($_POST['check_writer']);
$confirm_title = htmlspecialchars($_POST['check_title']);
$view_description = htmlspecialchars($_POST['check_description']);
$confirm_description = nl2br($view_description);

$sql = 'UPDATE ' .$db. ' SET id =' .$confirm_id. ', date =' .$confirm_date. ', file =' .$confirm_filename. ', writer =' .$confirm_writer. ', title =' .$confirm_title. ', description =' .$confirm_description. 'WHERE id =' .$confirm_id;
$result = mysql_query($sql);

  if ($db == 'atelier') {
    header("Location: /admin/atelier/index.php");
  } else if ($db == 'posts_piano') {
    header("Location: /admin/piano/index.php");
  } else {
    header("Location: /admin/violin/index.php");
  }
