
<?php
session_start();
include ('config.php');
if ($_POST[submit]) {
	$username = str_replace(" ", "", $_POST[user]);

	if($_POST[login] == "user"){
		$sql = "select * from `user_list` where `username`='$username'";
	}elseif($_POST[login] == "email"){
		$sql = "select * from `user_list` where `email`='$username'";
	}
	
	$query = mysql_query($sql);
	$row = mysql_fetch_array($query);
	
	if(is_array($row)){
	$us = is_array($row);
	$ps = $us ? md5($_POST[password].ALL_PS) == $row[password] : FALSE;
	}
	
		if ($ps) {
		$_SESSION[id] = $row[id];
		$_SESSION[username] = $row[username];
		$_SESSION[user_shell] = md5($row[username] . $row[password] . ALL_PS);
		//		$_SESSION[times]=mktime();
//		echo $row[username], ' ��ӭ�㣡�����ҵ�<a href="myzone.php">��������</a><br />';
		sleep(1);
		echo "<script language='javascript'>window.location.href='myzone.php'</script>";

		//		echo $_SESSION[username]."<br />";
		//		echo $_SESSION[id]."<br />";

	} else {
		echo "�û��������������";
//		session_destroy();
		echo ' <a href="javascript:history.back(-1);">����˴���������</a>';
		exit;
	}

}else{
?>
	
<!--css start-->
<style type="text/css">
    html{font-size:12px;}
    fieldset{width:520px; margin: 0 auto;}
    legend{font-weight:bold; font-size:14px;}
    label{float:left; width:70px; margin-left:10px;}
    .left{margin-left:80px;}
    .input{width:150px;}
    span{color: #666666;}
	select{width:60px;margin-right:14px;cursor:pointer}
</style>
<!--css end-->





<fieldset>
<legend>�û���¼</legend>
<form name="LoginForm" method="post" action="" onSubmit="return InputCheck(this)">
<p>

<select name="login">
<option value="user">�û���</option>
<option value="email">Email</option>
</select>

<input id="username" name="user" type="text" class="input" value="" />
</p>

<p>
<label for="password" class="label">�ܡ���:</label>
<input id="password" name="password" type="password" class="input" />
</p>

<p>
<input type="submit" name="submit" value="  ȷ ��  " class="left" />
</p>

</form>
</fieldset>
<?php
	}
?>