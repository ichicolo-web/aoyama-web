<?php

//$host="localhost";
//$user="root";
//$pass="root";
//$dbname="update";
$host="sddb0040086768.cgidb";
$user="sd_dba_ODI4MzQ2";
$pass="XahJtrWz";
$dbname="sddb0040086768";

if (isset($_GET["page"])) {
$page=$_GET["page"];
} else {
$page=1;
}
mysql_select_db($dbname,mysql_connect($host,$user,$pass)) or die("DBコネクトエラー");
$maxrow=3;
$sql = "SELECT count(*) as count FROM atelier";
$result=mysql_query($sql);
$row=mysql_fetch_assoc($result);
$count = $row["count"];
$first = (($page-1)*$maxrow);
$maxpage=intval((($count-1)/$maxrow)+1);
$pagelink = "<font size=\"+1\"><b>全".$count."件</b></font><br>\n";
for ($i=1;$i<=$maxpage;$i++) {
$pagelink = $pagelink."<a class=\"test\" href=\"?page=".$i."\">";
if ($i==$page) {
$pagelink = $pagelink."<span class=\"selected\">".$i."</span></a> ";
} else {
$pagelink = $pagelink.$i."</a>\n";
}
}

// 情報を取得
$sql = "SELECT * FROM atelier";
$sql = $sql." ORDER BY id DESC limit ".$first.", ".$maxrow;
$result=mysql_query($sql);
