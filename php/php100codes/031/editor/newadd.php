<?php
include('fckeditor.php');

  $sBasePath = $_SERVER['PHP_SELF'] ; 
  $sBasePath = dirname($sBasePath).'/'; 
  
  $ed=new FCKeditor('con');
  $ed->BasePath=$sBasePath;
  $ed->ToolbarSet='Basic';
  
  if($_POST[sub]){
  echo "����:".$_POST[title];
  echo  "FCK����:".$_POST[con];
  }
  
  //$ed->Create();


?>
<form action="" method="post">
<input type="text" name="title" value="">

<?php 
$ed->Value='��ʼֵ<br>����PHP100��Ƶ����ʾ';
$ed->Create(); 
?>

<input type="submit" name="sub" value="�������"/>
</form>