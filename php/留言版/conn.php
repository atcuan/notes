<?php



$conn = @ mysql_connect("localhost", "root", "") or die("���������Ӵ���");//���ӷ�����
mysql_select_db("newdb", $conn); //�����ݿ�
mysql_query("set names 'GBK'"); //ʹ��GBK���ı���;

function htmtocode($content) { //�Զ�����滻������Ҳ����������ĳЩ����
	$content = str_replace("\n", "<br>", str_replace(" ", "&nbsp;", $content));
	return $content;
}

//$content=str_replace("'","��",$content);
// htmlspecialchars();


?>
