<?php
session_start();
//���ݿ�����
$conn=mysql_connect('localhost','root','');
mysql_select_db('member',$conn);

//���峣��
define(ALL_PS,"php100");

//����Ȩ�޲鿴���ݵĿ���
function user_shell($uid,$shell,$m_id){
	$sql="select * from user_list where `uid`='$uid'";
	$query=mysql_query($sql);
	$us=is_array($row=mysql_fetch_array($query));
	$shell=$us ? $shell=md5($row[username].$row[password].ALL_PS):FALSE;
	if($shell)
	{
		if($row[m_id]<=$m_id){
		return $row;
		}else{
			echo "��Ȩ�޲���";
			exit();
		}
	}else{
		echo "���޷��ʸ�ҳȨ��";
		exit();
	}
}

//��¼��ʱ������
function user_mktime($onlinetime){
	$new_time=mktime();
	echo $new_time-$onlinetime;
	if($new_time-$onlinetime>'1800'){
		echo "��¼��ʱ";
		session_destroy();
	}else{
		$_SESSION[times]=mktime();
	}
}



?>









