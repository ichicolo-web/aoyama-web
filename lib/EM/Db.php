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

  //$link = mysql_connect('mysql482.db.sakura.ne.jp', 'ichicolo', 'jkh784jkbgdf74dfajk4');
  //$db_selected = mysql_select_db('ichicolo_aoyama', $link);
  
  mysql_set_charset('utf-8');
