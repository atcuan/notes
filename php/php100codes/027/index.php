<?php
  include("smarty_inc.php");
  //$name="php100����վ";
  
  $name[]=array("name"=>"���ŵ�һ��","date"=>"2009-11-15");
  $name[]=array("name"=>"PHP100����","date"=>"2009-11-15");
  $name[]=array("name"=>"�����Ƶ�̳�","date"=>"2009-11-15");
  $name[]=array("name"=>"ʥ������","date"=>"2009-11-15");
  $name[]=array("name"=>"�й����","date"=>"2009-11-15");
  $row=array("����","����","��ǰҳ��");
  
  $smarty->assign("title",$name);
  $smarty->assign("row",$row);
  $smarty->display("index.html");
?>
