
<?php
include("config.php");
$arr=user_shell($_SESSION[id],$_SESSION[user_shell]);

$sql="SELECT * FROM `user_list` WHERE id='$_SESSION[id]' ";
$query= mysql_query($sql);
$row=mysql_fetch_array($query);
	
if($_POST[submit]){
	$code=md5($_POST[code].ALL_PS);	
	
	//���ԭʼ�����Ƿ���ȷ
	if($row[password]==$code){	
	}else{
		echo 'ԭʼ������� <a href="javascript:history.back(-1);">��������</a>';
		exit;
	}
	
	//�ύ���䲻��Ϊ��
	if(strlen($_POST[email]) == 0){
		echo '���䲻��Ϊ�գ�<a href="javascript:history.back(-1);">��˷������ԣ�</a>';
		exit;
	}
	
	//��������ȷ�����䲻�䣬��������
	$recode=md5($_POST[recode].ALL_PS);	
	if($row[email]==$_POST[email]){
		$sql="UPDATE `user_list` SET `password`='$recode' WHERE `id`='$_SESSION[id]' LIMIT 1 ";
		$query=mysql_query($sql);
			if($query){
				session_destroy();
				exit ('�����޸ĳɹ���<a href="login.php">����˴����µ�¼</a>');
			}else{
					echo '��Ǹ���޸�����ʧ�ܣ�', mysql_error(), '<br />';
					echo ' <a href="javascript:history.back(-1);">����˴���������</a> ';
					exit;
			 }
	}
	/*����ǰ�������䲻Ϊԭʼ�������*/
	//��������Ƿ���Ϲ���	
	$email=$_POST[email];
	$mode="/^[\w-]+(\.[\w-]+)*@[\w-]+(\.[\w-]+)+$/";
	if(!preg_match($mode,$email)) {
		echo "<font color=red>Email ��ַ��Ч</font><a href='javascript:history.back(-1);'>����˴���������</a>";
		exit;
	}
	
	//��������Ƿ��Ѿ�����
	$check_email = mysql_query("SELECT * FROM `user_list` WHERE `email`='$email'");
	$array = mysql_fetch_array($check_email);
	if ($array) {
		echo '�Բ������� ', $email, ' �Ѵ��ڣ�<a href="javascript:history.back(-1);">����˴���������</a>';
		exit;
	}
	
  //�ж������д������
	$sql="UPDATE `user_list` SET `password`='$recode' , `email`='$email'  WHERE `id`='$_SESSION[id]' LIMIT 1 ";
	$query=mysql_query($sql);
		if($query){
			session_destroy();
			exit ('�����޸ĳɹ���<a href="login.php">����˴����µ�¼</a>');
		}else{
				echo '��Ǹ���޸�����ʧ�ܣ�', mysql_error(), '<br />';
				echo ' <a href="javascript:history.back(-1);">����˴���������</a> ';
				exit;
		 }
			


}else{

?>

<!--js start-->
<script type="text/javascript">
<!--
function InputCheck(renew)
{
  if (renew.code.value == "")
  {
    alert("������֤ԭʼ����!");
    renew.code.focus();
    return (false);
  }
  if (renew.newcode.value.length<6)
  {
    alert("�����볤�Ȳ�������6λ!");
    renew.newcode.focus();
    return (false);
  }

  if (renew.code.value == renew.newcode.value)
  {
    alert("�����벻�ܺ�ԭʼ����һ��!");
    renew.newcode.focus();
    return (false);
  }

  if (renew.recode.value == "")
  {
    alert("������ȷ������!");
    renew.recode.focus();
    return (false);
  }
  if (renew.recode.value != renew.newcode.value)
  {
    alert("�������벻һ��!");
    renew.recode.focus();
    return (false);
  }
}

//-->
</script>
<!--js end-->
<fieldset>
<legend>��������</legend>
<form name="renew" method="post" action="" onSubmit="return InputCheck(this)">
	
<p>ԭʼ���룺<em style="color:red">*</em>&nbsp;<input type="password" name="code" /></p>
<p>�µ����룺<em style="color:red">*</em>&nbsp;<input type="password" name="newcode" /></p>
<p>ȷ�����룺<em style="color:red">*</em>&nbsp;<input type="password" name="recode" /></p>
<p>Email��&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="email" value="<?php echo $row[email] ?>" /></p>
<button type="submit" name="submit" value="ok">ȷ���޸�zenm</button><!--button��ǩ�����趨ֵ-->
<!--
<input type="submit" name="submit" value="ȷ���޸�" />
-->
</form>
</fieldset>

<?php
}
?>