<?php
/*echo rand(3,9)."<br>";//rand�������
echo dechex(13)."<br>";//dechex ʮ����ת��Ϊʮ������,����������ʮ������ ��dechex����16����
echo dechex(rand(3,9))."<br>";

for($i=0;$i<4;$i++){
$rand.=dechex(rand(1,15));
}
echo $rand;
*/

//���������-������ͼƬ-�������д��ͼƬ-��������SESSION��
session_start();
for($i=0;$i<4;$i++){
$rand.=dechex(rand(1,15));
}

$_SESSION[check_pic]=$rand;
$im=imagecreatetruecolor(100,30);// �½�һ�����ɫͼ��  x���ǿ� ��y���Ǹ�
 
//������ɫ
//Ϊһ��ͼ�������ɫ(��ɫ��)
//imagecolorallocate ( resource image, int red, int green, int blue )��ԭɫ
$bg=imagecolorallocate($im,0,0,0);//��һ�ε�ʽ���ʱ�򣬱�����ɫ
$te=imagecolorallocate($im,225,225,225);


//���ַ���д��ͼ�����Ͻ�
//��ͼ����  imagestring ( resource image, font, int x, int y, ���� , ��ɫ )
imagestring($im,rand(1,6),rand(3,70),rand(0,16),$rand,$te);

//����ͼ��
header("Content_type:image/jpeg");
imagejpeg($im);




?>