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
imageline($img, 0 , 0, 75, 50, $jam_color); // ��������
imageline($img, 150 , 0, 75, 50, $jam_color);
imageline($img, 0 , 100, 50, 35, $jam_color);
imageline($img, 150 , 100, 100, 35, $jam_color);


// �����ַ���
imagestring($img,4,45,10,'Valmail',$jam_color);


// ��png��ʽ��ͼ������������
imagepng($img);
imagedestroy($img)
?>