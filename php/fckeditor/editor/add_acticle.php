<?php
//����
include 'fckeditor.php';

//ȡ��Ŀ¼
$base_path = $_SERVER['PHP_SELF'];
$base_path = dirname($base_path) . '/';

$edit = new FCKeditor('con');
$edit->BasePath = $base_path;
if ($_POST['sub']){
	echo '���⣺' . $_POST['title'] . '<hr />';
	echo '���ݣ�' . $_POST['con']. '<hr />';
}
?>
<form action="" method="post">
���⣺<input type="text" name="title" value="" />
<?php 
$edit->Value =''; //��ʼ�����ݡ�ʧЧ��
$edit-> ToolbarSet = 'Basic'; // ����ģʽ
$edit->Create();
?>
<input type="submit" name="sub" value="�������">
</form>