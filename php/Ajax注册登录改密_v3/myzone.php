
<?php
include_once("logout.php");
?>

<a href="myzone.php">��������</a>
<a href='?act=update'>��������</a>
<?php
  if($_GET[act]){
    echo "<script language=\"javascript\">location.href='update.php';</script>";
  }




//echo $_SESSION[id]."<br />";
//echo $_SESSION[user_shell]."<br />";
//echo $_SESSION[username]."<br />";

//���������ж��Ƿ��¼
include("config.php");
$arr=user_shell($_SESSION[id],$_SESSION[user_shell]);

echo$arr[username];
?>
Ȩ������gsfdffsd