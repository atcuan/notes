<?php

  include("config.php");


  $sql="select * from user_admin as a , user_group as b where a.gro=b.sid and a.uname='admin'";
  $query=mysql_query($sql);
  $rs=mysql_fetch_row($query);

  if($rs[6]&DEL){
  
 echo  "ӵ�и�Ȩ��";
  
  }else{
  
   echo "��Ȩ�޲��������";
  }




?>