
<?php

ʹ��PDO��ʽ��ֹSQLע��
$sql="select * from users where username=? and password=?";
//1.����һ��pdo����
$my_pdo = new PDO(mysql:host=localhsot;prot=3306;dbname="test","root","");
//2.���ñ���
$my_pdo->exec("set names utf8");
//3.Ԥ����$sql
$pdo_state=$my_pdo->prepare($sql);
//4.�ѽ��յ��û�������������
$pdo_state->execute(array($username,$password));
5.//ȡ�����
$res=$pdo_state->fetch();

if(empty($res)){
	exit("����û������������");
}else{
	header("localtion:mangeusers.php");
}
