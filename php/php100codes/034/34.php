<?php

//���������-������ͼƬ-�������д��ͼƬ-��������SESSION��
session_start();
for($i=0;$i<4;$i++){
$rand.=dechex(rand(1,15));
}

$_SESSION[check_pic]=$str;
$im=imagecreatetruecolor(100,30);// �½�һ�����ɫͼ��  x���ǿ� ��y���Ǹ�
 
//������ɫ
//Ϊһ��ͼ�������ɫ(��ɫ��)
//imagecolorallocate ( resource image, int red, int green, int blue )��ԭɫ
$bg=imagecolorallocate($im,0,0,0);//��һ�ε�ʽ���ʱ�򣬱�����ɫ
$te=imagecolorallocate($im,225,225,225);

//������
for($i=0;$i<3;$i++){
$te2=imagecolorallocate($im,rand(0,225),rand(0,225),rand(0,225));
//imageline ( resource image, int x1, int y1, int x2, int y2, int color )
imageline($im,rand(0,100),0,rand(0,100),rand(0,30),$te2);
}
//����
for($i=0;$i<100;$i++){
imagesetpixel($im,rand()%100,rand()%30,$te2);

}
//д������
$str=iconv("gbk","UTF-8","�Ǻù�");//��gbk����ת����UTF-8
imagettftext($im,12,rand(0,10),20,20,$te,'simkai.ttf',$str);//rand(3,10����б��


//���ַ���д��ͼ�����Ͻ�
//��ͼ����  imagestring ( resource image, font, int x, int y, ���� , ��ɫ )
//imagestring($im,rand(1,6),rand(3,70),rand(0,16),$rand,$te);

//����ͼ��
header("Content_type:image/jpeg");
imagejpeg($im);




?>