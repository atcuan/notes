<?php
include("configphp");
$arr=user_shell($_SESSION[id],$_SESSION[user_shell]);

$sql="SELECT * FROM `user_list` WHERE id='$_SESSION[id]' ";
$query= mysql_query($sql);
$row=mysql_fetch_array($query);

if($_POST[ans]==$row[answer]){
	$_POST[code]=md5($_POST[code].ALL_PS);
	$sql="UPDATE `user_list` SET `password`='$_POST[code]' WHERE `user_list`.`id`='$_SESSION[id]' LIMIT 1 ";
	$query=mysql_query($sql);
	if($query){
		session_destroy();
		exit ('�����޸ĳɹ���<a href="login.html">����˴����µ�¼</a>');
	}else{
		echo '��Ǹ���޸�����ʧ�ܣ�', mysql_error(), '<br />';
		echo ' <a href="javascript:history.back(-1);">����˴���������</a> ';
	}
}
?>


<!--js start-->
<script type="text/javascript">
<!--
function InputCheck(renew)
{
  if (renew.ans.value == "")
  {
    alert("��֤�𰸲���Ϊ��!");
    renew.ans.focus();
    return (false);
  }
  if (renew.code.value == "")
  {
    alert("�����趨����!");
    renew.password.focus();
    return (false);
  }
  if (renew.code.value.length<6)
  {
    alert("���볤�Ȳ�������6λ!");
    renew.password.focus();
    return (false);
  }
  if (renew.recode.value == "")
  {
    alert("��ȷ�϶�����!");
    renew.recode.focus();
    return (false);
  }
  if (renew.recode.value != renew.code.value)
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
<span>��֤�ܱ�����<span>:<?php echo $row[question];?>
<p>�𰸣�<input type="text" name="ans" /></p>
<p>�µ����룺<input type="password" name="code" /></p>
<p>ȷ�����룺<input type="password" name="recode" /></p>
<input type="submit" name="submit" value="ȷ���޸�" />

</form>
</fieldset>



