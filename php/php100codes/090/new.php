<?php

$doc = new DOMDocument('1.0', 'utf-8');
$doc -> formatOutput = true;


$php100		= $doc -> createElement('php100');	//����һ����ǩ
$php1000	= $doc -> createElement('php1000');	//����һ����ǩ
$php10000	= $doc -> createElement('title');	//����һ����ǩ
$php20000	= $doc -> createElement('content');	//����һ����ǩ

$newsco = $doc -> createTextNode("333333333333333");//���ñ�ǩ����
$newsco2 = $doc -> createTextNode("222222222222222");//���ñ�ǩ����
$newsco3 = $doc -> createTextNode("555");//������������


$xmlnew		= $doc -> createAttribute('xmlnew');	//��������


$php10000	-> appendChild($newsco);

$php20000	-> appendChild($newsco2);
$xmlnew	-> appendChild($newsco3);

$php1000	-> appendChild($xmlnew);
$php1000	-> appendChild($php10000);
$php1000	-> appendChild($php20000);

$php100	-> appendChild($php1000);

$doc	-> appendChild($php100);

$doc	-> save("php.xml");
?>