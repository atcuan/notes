
<?


//���������->����ͼƬ->���д��ͼƬ->������SESSION��


for ($i = 0; $i < 4; $i++) {
	$rand .= dechex(rand(1, 15));
}

$im = imagecreatetruecolor(100, 30);

//������ɫ
$bg = imagecolorallocate($im, 0, 0, 0); //��һ��ʹ�õ��԰��ʱ�򣬱�����ɫ
$te = imagecolorallocate($im, 255, 255, 255);


//������
for ($i = 0; $i < 3; $i++) {
	$te2 = imagecolorallocate($im, rand(0, 255), rand(0, 255), rand(0, 255));
	imageline($im, rand(0, 100), 0, 100, 30, $te2);
}


//����
for ($i = 0; $i < 150; $i++) {
	imagesetpixel($im, rand() % 100, rand() % 30, $te2);
}




//�Ѻ���д��ͼ����
$con="ë���˾ũ";
$str=iconv("gbk","UTF-8","$con");//ת������
imagettftext($im,12,5,20,20,$te,'C:\Windows\Fonts\�������������.ttf',$str);




//���ַ���д��ͼ����
//imagestring($im, rand(3, 6), rand(0, 70), rand(0, 15), $rand, $te);


//���ͼ��
header("Content-type�� image/png");
imagepng($im);

















?>