<?php
include_once("config.php");
if($_POST[submit]){
	$username = htmlspecialchars($_POST['username']);
	//����û����Ƿ��Ѿ�����
	$check_user = mysql_query("SELECT * FROM `user_list` WHERE `username`='$username'");
	$array = mysql_fetch_array($check_user);
	if ($array) {
		echo '�����û��� ', $username, ' �Ѵ��ڣ�<a href="javascript:history.back(-1);">����</a>';
		exit;
	}
	
	//��������Ƿ��Ѿ�����
	$email=$_POST[email];
	$check_email = mysql_query("SELECT * FROM `user_list` WHERE `email`='$email'");
	$array = mysql_fetch_array($check_email);
	if ($array) {
		echo '����:���� ', $email, ' �Ѵ��ڣ�<a href="javascript:history.back(-1);">����</a>';
		exit;
	}

	$pw=md5('$_POST[password].ALL_PS');

	$sql="INSERT INTO `user_list` (`id`, `username`, `password`, `email`, `regdate`, `question`, `answer`) VALUES ('','$username', '$pw', '$email', 'now()', '$POST[ques]', '$_POST[ans]')";
	$query=mysql_query($sql);

	if($query){
		exit ('�û�ע��ɹ�������˴� <a href="login.html">��¼</a>');
		}else{
				echo '��Ǹ���������ʧ�ܣ�<br />';
				echo ' <a href="javascript:history.back(-1);">����˴���������</a>';

		}
}else{
?>
<script type="text/javascript" src="ajax.js"></script>
<script type="text/javascript" src="ctrl.js"></script>
<link rel="stylesheet" type="text/css" href="class.css" />
	
<fieldset>	
<legend>���û�ע��</legend>

	<form name="regFm" action="" method="post" onSubmit="return InputCheck(this)">
<ul>	
	
	<label for="user">�� �� ����</label>
	<em>*</em>
	<input type="text" name="user" id="user" onblur="checkName()" onfocus="alertName()"/>
	<span id="check_name"></span><br /><br />
</ul>
<ul>
	
	<label for="pw">�ܡ����룺</label>
	<em>*</em>
	<input type="password" name="password" id="pw" onblur="checkPw()"/>
	<span id="check_pw"></span><br /><br />
</ul>	
<ul>
	
	<label for="repw">ȷ�����룺</label>
	<em>*</em>
	<input type="password" name="repassword" id="repw" onblur="checkRePw()"/>
	<span id="check_reRw"></span><br /><br />
</ul>	
<ul>

	<label for="email">Email��</label>
	<em>*</em>
	<input type="text" name="email" id="email" onblur="checkEmail()"/>
	<span id="check_email"></span><br /><br />
</ul>
<ul>
	
	<label id="tx">��ѡ���ܱ����⣿</label><em>*</em><br /><br />

	<select name="ques">
	<option value="�㸸�׵����գ�">�㸸�׵����գ�</option>
	<option value="��ĸ�׵����գ�">��ĸ�׵����գ�</option>
	<option value="������˵����գ�" selected>������˵����գ�</option>
	<option value="��ĵ�һ���ֻ����룿">��ĵ�һ���ֻ����룿</option>
	<option value="��ļ��պ���λ���֣�">��ļ��պ���λ���֣�</option>
	<option value="��ĳ�����ʦ������">��ĳ�����ʦ������</option>
	</select>
	<br />
</ul>	
<ul>
	
	<label for="ans">��Ĵ𰸣�</label><em>*</em>	<br /><br />
	<input type="text" name="ans" id="ans" style="width:260px" /><br /><br />
</ul>

	<input type="submit" name="submit" value="ȷ��ע��" style="width:70px">

  </form>
</fieldset>

<?php
}
?>


















