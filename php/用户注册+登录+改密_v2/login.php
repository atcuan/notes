
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
	$ps = $us ? md5($_POST[password] . ALL_PS) == $row[password] : FALSE;
	}
	if ($ps) {
		$_SESSION[id] = $row[id];
		$_SESSION[username] = $row[username];
		$_SESSION[user_shell] = md5($row[username] . $row[password] . ALL_PS);
		//		$_SESSION[times]=mktime();
		echo $row[username], ' ��ӭ�㣡�����ҵ�<a href="myzone.php">��������</a><br />';
		//		echo $_SESSION[username]."<br />";
		//		echo $_SESSION[id]."<br />";

	} else {
		echo "�û��������������";
		session_destroy();
		echo ' <a href="javascript:history.back(-1);">����˴���������</a>';
	}


	}
}

?>