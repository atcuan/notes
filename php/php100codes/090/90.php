<?php

$doc = new DOMDocument('1.0', 'utf-8');
$doc -> formatOutput = true;

$root	= $doc -> createElement('root');	//����һ����ǩ
$index	= $doc -> createElement('index');	//����һ����ǩ

$id		= $doc -> createAttribute('id');	//��������
$newsid = $doc -> createTextNode("1");		//������������
$newsco = $doc -> createTextNode("content");//���ñ�ǩ����

$id		-> appendChild($newsid);	//�̳�����
$index	-> appendChild($id);	    //�̳���������
$index	-> appendChild($newsco);	//�̳б�ǩ����
$root	-> appendChild($index);		//�̳�����
$doc	-> appendChild($root);

$doc	-> save("php100.xml");

?>