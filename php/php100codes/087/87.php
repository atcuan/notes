<?php

//��ʼ��һ�� cURL ����
$curl = curl_init();

//��������Ҫץȡ��URL
curl_setopt($curl, CURLOPT_URL, "http://www.baidu.com");

//����cURL ������Ҫ�������浽�ַ����л����������Ļ�ϡ�
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

//����cURL��������ҳ
$data = curl_exec($curl);

//�ر�URL����
curl_close($curl);

/*
$user = "admin";
$pass = "admin100";
$curlPost = "user=$user&pass=$pass";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://localhost/edu/login.php");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 0);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $curlPost);
$data = curl_exec($ch);
curl_close($ch);
*/
?>