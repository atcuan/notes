<?php

// ��������͸ĳ�ͼ����
header('Content-Type:image/png');

// ������ʿհ�ͼ��
$img = imagecreatetruecolor(150, 100);

// ��䱳����ɫ
$bg_color = imagecolorallocate($img, 170, 187 ,185); // ������ɫ
imagefill($img, 0, 0, $bg_color);  // ����ɫ�����ȥ

// �ڱ��������һЩ����
$jam_color = imagecolorallocate($img, 255, 255 ,255);
//imageline($img, 0 , 0, 50, 100, $jam_color); // ��������

imageline($img, 0 , 100, 50, 50, $jam_color); // ��������

imageline($img, 150 , 100, 100, 50, $jam_color); // ��������

// �����ַ���
imagestring($img,2,12,2,'cuzval',$jam_color);


// ��png��ʽ��ͼ������������
imagepng($img);




?>