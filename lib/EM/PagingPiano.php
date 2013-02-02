<?php

require_once ('Init.php');
require_once ('Db.php');
Init();

if (isset($_GET["page"])) {
$page=$_GET["page"];
} else {
$page=1;
}
$maxrow=3;
$sql = "SELECT count(*) as count FROM posts_piano";
$sth = $pdo->prepare($sql);
$sth->execute();
$count =  $sth->fetchObject()->count;
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
$sql = "SELECT * FROM posts_piano";
$sql = $sql." ORDER BY id DESC limit ".$first.", ".$maxrow;
$sth = $pdo->prepare($sql);
$sth->execute();
