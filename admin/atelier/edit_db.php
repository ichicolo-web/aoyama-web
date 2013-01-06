<?php
require_once("init.php");

init();

$confirm_id = htmlspecialchars($_POST['check_id']);
$confirm_date = htmlspecialchars($_POST['check_date']);
$confirm_filename = htmlspecialchars($_POST['check_file']);
$confirm_writer = htmlspecialchars($_POST['check_writer']);
$confirm_title = htmlspecialchars($_POST['check_title']);
$view_description = htmlspecialchars($_POST['check_description']);
$confirm_description = nl2br($view_description);

//$link = mysql_connect('sddb0040086768.cgidb', 'sd_dba_ODI4MzQ2', 'XahJtrWz');
//$db_selected = mysql_select_db('sddb0040086768', $link);
$link = mysql_connect('localhost', 'root', 'root');
$db_selected = mysql_select_db('update', $link);
  mysql_set_charset('utf-8');
  $sql = "UPDATE atelier SET id = '".$confirm_id."', date = '".$confirm_date."', file = '".$confirm_filename."', writer = '".$confirm_writer."', title = '".$confirm_title."', description = '".$confirm_description."' WHERE id = '".$confirm_id."' ";
  $result_flag = mysql_query($sql);
  $close_flag = mysql_close($link);

  header("Location: /admin/atelier/index.php");
?> 
