<?php
 session_start();
 //���ݿ�����
 $conn=mysql_connect('localhost','root','');
 mysql_select_db('member',$conn);
 //���峣��
 define(ALL_PS,"PHP100");

  function user_shell($uid,$shell,$m_id){
    $sql="select * from user_list where `uid` = '$uid'";
    $query=mysql_query($sql);
    $us=is_array($row=mysql_fetch_array($query));
    $shell=$us ? $shell==md5($row[username].$row[password].ALL_PS):FALSE;
    if($shell){
    	if($row[m_id]<=$m_id){
    	   return $row;
    	}else{
    	echo "���Ȩ�޲���";
        exit();
    	}
    }else{
     echo "����Ȩ�޷��ʸ�ҳ";
     exit();
    }
  }

    function user_mktime($onlinetime){
  	$new_time = mktime();
  	echo $new_time-$onlinetime;
  	if($new_time-$onlinetime > '100'){
  	echo "��¼��ʱ";
  	exit();
  	session_destroy();
   }else{
  	$_SESSION[times]=mktime();
   }
  }
 ?>