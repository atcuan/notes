<?php
 session_start();

$conn=@mysql_connect('localhost','root','') or die('MYsql����ʧ��');
$sql=mysql_select_db('double',$conn) or die ('�������ݿ�ʧ��');
mysql_query("set names 'GBK'");

//���峣��
define(ALL_PS,'river');

//�ж�Ȩ��
function user_shell($id,$shell){
	$sql="SELECT * FROM `user_list` WHERE `id`='$id'";
	$query=mysql_query($sql);
	$us=is_array($row=mysql_fetch_array($query));
	$shell=$us ? $shell==md5($row[username].$row[password].ALL_PS):FALSE;

	if($shell){
		return $row;
	}else{
		exit('����Ȩ�޷��ʸ�ҳ');
	}
}


?>
