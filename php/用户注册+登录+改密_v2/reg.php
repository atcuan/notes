<?php

//ע����
if (!isset ($_POST['submit'])) {
	exit ('�Ƿ�����!');
}

$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
//ע����Ϣ�ж�
if (!preg_match('/^[\w\x80-\xff]{3,15}$/', $username)) {
	exit ('�����û��������Ϲ涨��<a href="javascript:history.back(-1);">����</a>');
}
if (strlen($password) < 6) {
	exit ('�������볤�Ȳ����Ϲ涨��<a href="javascript:history.back(-1);">����</a>');
}
/**ò������������������ʽ������
if(!preg_match('/^w+([-+.]w+)*@w+([-.]w+)*.w+([-.]w+)*$/', $email)){
    exit('���󣺵��������ʽ����<a href="javascript:history.back(-1);">����</a>');
}
*/

/**
*���δ������ȼ���Ƿ� POST �ύ���ʸ�ҳ������������ע��Ҫ���û��� 3-15 �ַ����ȣ�֧�ֺ��֡���ĸ�����ּ�_�����벻������ 6 *λ�����û��ύ��ע����Ϣ���м�⡣�ڼ���û����͵�������ʱ�����������⣬����������ʽ������Ϣ��ο���PHP ������ʽ����
*/

//���ݿ⽻��
//�������ݿ������ļ�
include ('config.php');
//����û����Ƿ��Ѿ�����
$check_query = mysql_query("SELECT * FROM `user_list` WHERE `username`='$username'");
$array = mysql_fetch_array($check_query);
if ($array) {
	echo '�����û��� ', $username, ' �Ѵ��ڡ�<a href="javascript:history.back(-1);">����</a>';
	exit;
}
/**
*д������
*�öδ������ȼ���û����Ƿ��Ѿ����ڣ���������������ʾ��Ϣ��������ֹ����ִ�С�����û������������ע����Ϣд�����ݿ⣬�������Ӧ**��ʾ��Ϣ��
*/
$password = md5($password . ALL_PS);
$sql = "INSERT INTO `user_list` (id,username,password,email,regdate,question,answer) VALUES ('','$username','$password','$email',
now(),'$_POST[ques]','$_POST[ans]')";

if (mysql_query($sql, $conn)) {
	exit ('�û�ע��ɹ�������˴� <a href="login.html">��¼</a>');
} else {
	echo '��Ǹ���������ʧ�ܣ�', mysql_error(), '<br />';
	echo ' <a href="javascript:history.back(-1);">����˴����� ����</a>';
}
?>