<?php
// ��������͸ĳ�ͼ����
header('Content-Type:image/png');

// ��ȡͼƬ·��
$dir = dirname(__FILE__) . '\\';
//$img = imagecreatefrompng($dir . '222.png');

list($width, $height) = getimagesize($dir . '222.png');

// ��ԭͼ��С
$width_ = $width * 0.5;
$height_ = $height * 0.5;

// ����һ����ͼ
$img_ = imagecreatetruecolor($width_, $height_);

// ����ԭͼ
$img = imagecreatefrompng($dir . '222.png');

// ��ԭͼ��������ͼ��ȥ
imagecopyresampled($img_, $img, 0, 0, 0, 0, $width_, $height_, $width, $height);


// ��png��ʽ����ͼ������������
imagepng($img_);
imagedestroy($img_);
imagedestroy($img);





?>