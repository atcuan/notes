<a href='?out=login'>�˳�</a>
<a href='?act=update'>��������</a>
<?php
  if($_GET[out]){
  	session_destroy();
    echo "<script language=\"javascript\">location.href='login.html';</script>";
  }

  if($_GET[act]){
    echo "<script language=\"javascript\">location.href='update.php';</script>";
  }

//echo $_SESSION[id]."<br />";
//echo $_SESSION[user_shell]."<br />";
//echo $_SESSION[username]."<br />";

//һ�������ж��Ƿ��¼
include("config.php");
$arr=user_shell($_SESSION[id],$_SESSION[user_shell]);

echo$arr[username];
?>
Ȩ������gsfdffsd