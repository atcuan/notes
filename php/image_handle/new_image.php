<?php
// ��������͸ĳ�ͼ����
header('Content-Type:image/png');

// ������ʿհ�ͼ��
$img = imagecreatetruecolor(60, 20);

// ��䱳����ɫ
$bg_color = imagecolorallocate($img, 81, 179 ,189); // ������ɫ
imagefill($img, 0, 0, $bg_color);  // ����ɫ�����ȥ

// �ڱ��������һЩ���������(����)
$jam_color = imagecolorallocate($img, 255, 255 ,255);
imageline($img, 0 , 0, 50, 17, $jam_color); // ��������
$pixel_color =  imagecolorallocate($img, 30, 30 ,0);
for ($i = 0; $i < 50; $i++){
	imagesetpixel($img,rand(0,60), rand(0,20),$pixel_color);
}

// �����ַ���
imagestring($img,2,12,2,'cuzval',$jam_color);


// ��png��ʽ��ͼ������������
imagepng($img);
imagedestroy($img);
?>