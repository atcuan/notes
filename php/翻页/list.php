<?php
/**
 * ��PHP100��Ƶ�̡̳�
 */

include("conn.php");

$pagesize=5;
$url=$_SERVER["REQUEST_URI"];
$url=parse_url($url);
$url=$url[path];


$numq=mysql_query("SELECT * FROM `test`");
$num = mysql_num_rows($numq);

if($_GET[page]){
$pageval=$_GET[page];
$page=($pageval-1)*$pagesize;
$page.=',';
}
if($num > $pagesize){
 if($pageval<=1)$pageval=1;
echo "�� $num ��".
		" <a href=$url?page=".($pageval-1).">��һҳ</a> <a href=$url?page=".($pageval+1).">��һҳ</a>";
}


   echo  $SQL="SELECT * FROM `test` limit $page $pagesize ";
    $query=mysql_query($SQL);
    while($row=mysql_fetch_array($query)){

    echo "<hr><b>".$row[name]." | ".$row[sex];

    }
?>