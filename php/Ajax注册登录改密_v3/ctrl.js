<!--
function InputCheck(RegFm)
{

  if (RegFm.user.value.length < 6)
  {
//   alert("�û�����������6�ַ�!");
	RegFm.user.focus();
    return (false);
  }
  if (RegFm.password.value == "")
  {
//    alert("�����趨��¼����!");
    RegFm.password.focus();
    return (false);
  }
  if (RegFm.repassword.value != RegFm.password.value)
  {
//    alert("�������벻һ��!");
    RegFm.repassword.focus();
    return (false);
  }
  if (RegFm.email.value == "")
  {
//    alert("���䲻��Ϊ��!");
    RegFm.email.focus();
    return (false);
  }
}

//-->