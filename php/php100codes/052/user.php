<?php
 include("config.php");

  if($_POST[submit]){
    $username= str_replace(" ","",$_POST[username]);
    $sql="select * from user_list where `username` = '$username'";
    $query=mysql_query($sql);
    $us=is_array($row=mysql_fetch_array($query));
    $ps= $us ? md5($_POST[password].ALL_PS)== $row[password] : FALSE;
    if($ps){
    	$_SESSION[uid]=$row[uid];
    	$_SESSION[user_shell]=md5($row[username].$row[password].ALL_PS);
    	$_SESSION[times]=mktime();
    	echo "��½�ɹ�";
    }else{
        echo "��������û�������";
         session_destroy();
    }

  }



?>
<LINK href="common.css" type=text/css rel=stylesheet>

  <form action="" method="post">

  �û�����<input type="text" name="username" style="height:23px" /><br>
  �ܡ��룺<input type="password" name="password"  style="height:23px" /><br>
  ��֤�룺<input type="code" name="code" size="10" style="height:23px" />
  <img src="imgcode.php">
  <br><br>
  <input type="submit" name="submit" value="��½"/>
  </form>
