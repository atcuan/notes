<?php
// ��������͸ĳ�ͼ����
header('Content-Type:image/png');

// ��ȡͼƬ·��
$dir = dirname(__FILE__) . '\\';
$img = imagecreatefrompng($dir . '222.png');

// ����ˮӡλ��
$str = 'cuzval.com';
$len = strlen($str) * 9; 
$sx = imagesx($img) * 0.9 - $len;
$sy = imagesy($img) * 0.9;


// �����ַ���ˮӡ
$jam_color = imagecolorallocate($img, 240, 240 ,240);
imagestring($img, 6, $sx, $sy, $str, $jam_color);

// ����ˮӡ
$text = iconv('GBK', 'UTF-8', '�쳯����Ա');
$font = 'C:\Windows\Fonts\SIMLI.TTF'; // ������֧������
imagettftext($img, 20, 17, 35, 70, $jam_color, $font, $text);


// ��png��ʽ��ͼ������������
imagepng($img);
imagedestroy($img);

?>   