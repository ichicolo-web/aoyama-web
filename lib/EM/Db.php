<?php

/*
 ** DB
 */

/*
 ** local
 */

  $link = mysql_connect('localhost', 'root', 'root');
  $db_selected = mysql_select_db('update', $link);

/*
 ** production
 */

  //$link = mysql_connect('sddb0040086768.cgidb', 'sd_dba_ODI4MzQ2', 'XahJtrWz');
  //$db_selected = mysql_select_db('sddb0040086768', $link);
  
  mysql_set_charset('utf-8');
