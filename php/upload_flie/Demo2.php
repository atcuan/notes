<?php
	header('Content-Type: text/html; charset=GBK');
	//�����ϴ��ļ�
	//$_FILES
	//���ڣ����ǿ�ֵ
	
	
	//[userfile][name]��ʾ�ϴ����ļ���
	//[userfile][type]��ʾ�ļ����ͣ����磬jpg���ļ�����Ϊ��image/jpeg
	//[userfile][tmp_name]��ʾ�ϴ����ļ���ʱ��ŵ�λ��C:\WINDOWS\Temp\php5E1.tmp
	//[userfile][error]��ʾ�������ͣ�0��ʾû���κδ���
	//[userfile][size]��ʾ�ϴ��ļ��Ĵ�С


	
	//is_uploaded_file()
	//�ж��ļ��Ƿ���ͨ�� HTTP POST �ϴ���
	//ͨ��HTTP POST�ϴ����ļ���������ʱ�ļ�����
	
	//move_uploaded_file()
	//���ϴ����ļ��ƶ�����λ��
	
	//������������Ҫ��֤
	
		
	//�ڶ������⣬ֻ������jpg�ļ� 
//	if ($_FILES['userfile']['type'] != 'image/jpeg' && $_FILES['userfile']['type'] != 'image/pjpeg') {
//		echo "<script>alert('��վֻ����jpgͼƬ��');history.back();</script>";
//		exit;
//	}
	
	//�����еĲ������
	//print_r($_FILES);
	
	//����һ������
	define('MAX_SIZE',2000000);
	define('URL',dirname(__FILE__).'\uploads');
	$fileMimes = array('image/jpeg','image/pjpeg','image/png','image/x-png','image/gif');
	
	//�ж������Ƿ����������һ��
	if (is_array($fileMimes)) {
		if (!in_array($_FILES['userfile']['type'],$fileMimes)) {
			 echo "<script>alert('��վֻ����jpg��gif��pngͼƬ��');history.back();</script>";
			 exit;
		}
	}

//	switch ($_FILES['userfile']['type']) {
//		case 'image/jpeg' :  //���
//			break;
//		case 'image/pjpeg' : //IE
//			break;
//		case 'image/gif' :
//			break;
//		case 'image/png' : //���
//			break;
//		case 'image/x-png' : //IE
//			break;
//		default: echo "<script>alert('��վֻ����jpg��gif��pngͼƬ��');history.back();</script>";
//		    exit;	
//	}
	

	//��һ���⣬����ϴ�������ô��
	if ($_FILES['userfile']['error'] > 0) {
		switch ($_FILES['userfile']['error']) {
			case 1: echo "<script>alert('�ϴ��ļ�����Լ��ֵ1');history.back();</script>";
				break;
			case 2: echo "<script>alert('�ϴ��ļ�����Լ��ֵ2');history.back();</script>";
				break;
			case 3: echo "<script>alert('���ֱ��ϴ�');history.back();</script>";
				break;	
			case 4: echo "<script>alert('û���κ��ļ����ϴ�');history.back();</script>";
				break;	
		}
		exit;
	}
	
	//�ж����ô�С
	if ($_FILES['userfile']['size'] > MAX_SIZE) {
		echo "<script>alert('�ϴ��ļ����ó���2M');history.back();</script>";
		exit;
	}
		
	
	//�ж�Ŀ¼�Ƿ����
	if (!is_dir(URL)) {
		mkdir(URL,0777);  //���Ȩ��0777,��˼�ǣ����û�����Ŀ¼����ô�ʹ���
	} 

	if (is_uploaded_file($_FILES['userfile']['tmp_name'])) {
		//���������ƶ��ˡ�		
		//��һ��������д����ʱ�ļ��ĵ�ַ��
		//�ڶ����������ڶ�������д����Ҫ��ŵĵ�ַ
		
		//��ȥ�ж����Ŀ¼�Ƿ���ڡ�
		
		//��������ε����棬ֱ�Ӽ���@
		
		if (!@move_uploaded_file($_FILES['userfile']['tmp_name'],URL.'/'.$_FILES['userfile']['name'])) {
			//����ƶ�ʧ�ܣ���ʧ��
			echo "<script>alert('�ƶ�ʧ��');history.back();</script>";
			exit;
		}
		
	} else {
		echo "<script>alert('��ʱ�ļ����Ҳ����ϴ����ļ�');history.back();</script>";
		exit;
	}
	
	//ȫ��ͨ�����ϴ��ɹ��ˡ�
	//���봫һ��ֵ��Demo3.php
	//�ļ��ϴ��ĵ�ַ
	echo "<script>alert('�ļ��ϴ��ɹ�');location.href='Demo3.php?url=".$_FILES['userfile']['name']."';</script>"
	

?>







