<?php
// ��������͸ĳ�ͼ����
header('Content-Type:image/png');

// ������ʿհ�ͼ��
$img = imagecreatetruecolor(60, 20);

// ��䱳����ɫ
$bg_color = imagecolorallocate($img, 170, 187 ,185); // ������ɫ
imagefill($img, 0, 0, $bg_color);  // ����ɫ�����ȥ

// ������λʮ��������
for ($i = 0; $i <= 5; $i++){
	@$code .= dechex(mt_rand(0 ,15));
}

// �����ַ���
$jam_color = imagecolorallocate($img, 0, 0 ,0);
imagestring($img,3,12,2,$code,$jam_color);


// ��png��ʽ��ͼ������������
imagepng($img);

// �ͷ��ڴ�
imagedestroy($img);
?>