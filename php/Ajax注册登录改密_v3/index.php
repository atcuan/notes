<?php
include_once("config.php");
if($_POST['submit']){
	$username=$_POST[user];
	
	//����û����Ƿ���������ַ�
	$username=str_replace(" ","",str_replace("*","",str_replace("%","",$username)));
	if($_POST[user]!=$username){
		echo "<b style='color:red'>�û������������ַ�</b>";
		echo'<a href="javascript:history.back(-1);">����</a>';
		exit;
		}
		
	//����û����Ƿ��Ѿ�����
	$check_user = mysql_query("SELECT * FROM `user_list` WHERE `username`='$username'");
	$array = mysql_fetch_array($check_user);
	if ($array) {
		echo '�����û��� ', $username, ' �Ѵ��ڣ�<a href="javascript:history.back(-1);">����</a>';
		exit;
	}
	//��������Ƿ���Ϲ���
	$email=$_POST[email];
	$mode="/^[\w-]+(\.[\w-]+)*@[\w-]+(\.[\w-]+)+$/";
	if(!preg_match($mode,$email)) {
		echo "<font color=red>Email ��ַ��Ч</font><a href='javascript:history.back(-1);'>��������</a>";
		exit;
	}

	//��������Ƿ��Ѿ�����
	$check_email = mysql_query("SELECT * FROM `user_list` WHERE `email`='$email'");
	$array = mysql_fetch_array($check_email);
	if ($array) {
		echo '����:���� ', $email, ' �Ѵ��ڣ�<a href="javascript:history.back(-1);">����</a>';
		exit;
	}
	
	//�������д������
	$pw=md5($_POST[password].ALL_PS);
	
	$sql="INSERT INTO `user_list` (`id`, `username`, `password`, `email`, `regdate`) VALUES ('','$username', '$pw', '$email',now())";
	$query=mysql_query($sql);

	if($query){

		echo '<script language="javascript">window.location.href="reg_done.php"</script>';
		}else{
				echo '��Ǹ���������ʧ�ܣ�<br />';
				echo ' <a href="javascript:history.back(-1);">����˴���������</a>';

		}
}else{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<link rel="stylesheet" type="text/css" href="basic.css" />
<script type="text/javascript" src="ajax.js"></script>
<script type="text/javascript" src="ctrl.js"></script>
<title>���û�ע��</title>
</head>

<body>
	<div id="reg">
		<form name="regFm" action="" method="post" onSubmit="return InputCheck(this)">
			<ul id="top">
				<li id="left">����ע��</li><li id="right"><a href="login.php">�����ʺţ����ڵ�¼��</a></li>	
			</ul>
			<br />
			<ul class="tb">
				<li class="left"><em>*</em><label for="user">�û���:</label></li><li class="center"><input type="text" name="user" id="user" onblur="checkName()" onfocus="alertName()" /></li><li class="right"><span id="check_name"></span></li>	
			</ul>
			
			<ul class="tb">
				<li class="left"><em>*</em><label for="pw">����:</label></li><li class="center"><input type="password" name="password" id="pw" onblur="checkPw()" onfocus="alertPw()" /></li><li class="right"><span id="check_pw"></span></li>	
			</ul>

			<ul class="tb">
				<li class="left"><em>*</em><label for="repw">ȷ������:</label></li><li class="center"><input type="password" name="repassword" id="repw" onblur="checkRePw()" onfocus="alertRepw()" /></li><li class="right"><span id="check_reRw"></span></li>	
			</ul>
			
			<ul class="tb">
				<li class="left"><em>*</em><label for="email">Email:</label></li><li class="center"><input type="text" name="email" id="email" onblur="checkEmail()" onfocus=alertemail() /></li><li class="right"><span id="check_email"></span></li>	
			</ul>
			<ul class="tb" id="buttom">
				<li class="left"></li><li class="center"><button type="submit" name="submit" value="ok">�ύ</button></li><li class="right"></li>	
			</ul>			
				
		</form>
	</div>
</body>
</html>
<?php
}
?>