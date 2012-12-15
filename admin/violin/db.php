<?php
require_once("init.php");

init();

$confirm_date = htmlspecialchars($_POST['check_date']);
$confirm_filename = htmlspecialchars($_POST['check_file']);
$confirm_writer = htmlspecialchars($_POST['check_writer']);
$confirm_title = htmlspecialchars($_POST['check_title']);
$view_description = htmlspecialchars($_POST['check_description']);
$confirm_description = nl2br($view_description);

  $link = mysql_connect('sddb0040086768.cgidb', 'sd_dba_ODI4MzQ2', 'XahJtrWz');
  $db_selected = mysql_select_db('sddb0040086768', $link);
  mysql_set_charset('utf-8');
  $sql = "INSERT INTO posts (id,date,file,writer,title,description) VALUES ('', '$confirm_date', '$confirm_filename', '$confirm_writer', '$confirm_title', '$confirm_description')";
  $result = mysql_query('SELECT id,date,file,writer,title,description FROM posts ORDER BY id DESC');
  $result_flag = mysql_query($sql);
  $close_flag = mysql_close($link);

  header("Location: ../../violin_student.php");
  header("Location: ../../admin/violin/index.php");
?> 
