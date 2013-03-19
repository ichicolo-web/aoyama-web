<?php

/*
 ** DB
 */

/*
 ** production
 */
//$host = 'localhost';
//$dbname = 'update';
//$root = 'root';
//$password = 'root';

/*
 ** local
 */
$host     = 'localhost'; // ホスト名
$database = 'update';      // データベース名
$user     = 'root';      // ユーザー名
$pass     = 'root';  // パスワード

try {
  $pdo = new PDO(
      "mysql:host=localhost; dbname=update", "root", "root");
      //"mysql:host=sddb0040086768.cgidb; dbname=sddb0040086768", "sd_dba_ODI4MzQ2", "XahJtrWz");
} catch (PDOException $e) {
    var_dump($e->getMessage());
}
