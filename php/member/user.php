<?php
include("config_class.php");
//	����+����==>����md5����=======��������

//�ж�������ȷ���
echo $rand;
if($_POST[submit]){
	$username=str_replace(" ","",$_POST[username]);
	$sql="select * from user_list where `username`='$username'";
	$query=mysql_query($sql);
	$us=is_array($row=mysql_fetch_array($query));
	$ps=$us ? md5($_POST[password].ALL_PS)==$row[password]:FALSE;

	if($ps){
		$_SESSION[uid]=$row[uid];
		$_SESSION[m_id]=$row[m_id];
		$_SESSION[username]=$row[username];
		$_SESSION[user_shell]=md5($row[username].$row[password].ALL_PS);
		$_SESSION[times]=mktime();
		echo "��¼�ɹ�<br />";
		echo $_SESSION[username]."<br />";
//		echo $_SESSION[uid]."<br />";
//		echo $_SESSION[m_id]."<br />";

	}else{
		echo "�û��������������";
		session_destroy();
	}
}
?>

<link href="common.css" type=text/css rel=stylesheet" />

<form action="" method="post">
	<label for="username">��Ա����</label>
	<input type="text" name="username" id="username" size=20 /><br />
	<label for="password">�ܡ��룺</label>
	<input type="password" name="password" id="password" size=21 /><br />
	<label for="code">��֤�룺</label>
	<input type="code" name="code" id="code" size=10 /><br />
	<img src="imgcode.php"><br /><br />
	<input type="submit" name="submit" value="LOGIN" />
</form>