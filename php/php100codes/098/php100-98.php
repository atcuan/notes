<?php
// www.php100.com
//PHP100��Ƶ�̳� 98�� Ȩ�޽������

 define("ADD",1);
 define("UPD",2);
 define("LIS",4);
 define("DEL",8);

 $sy = ADD | UPD | LIS | DEL;

   $ny = $sy ^ ADD;
   echo  "<BR>�����Ȩ�ޣ�". decbin($ny);


  
  
  
 
?>