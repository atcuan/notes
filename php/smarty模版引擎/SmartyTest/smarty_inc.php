<?php

include_once("Smarty/Smarty.class.php"); //����smarty���ļ�

	$smarty = new Smarty(); //����smartyʵ������$smarty

	$smarty->config_dir="Smarty/Config_File.class.php";  // Ŀ¼����
	
	$smarty->template_dir = "./templates"; //����ģ��Ŀ¼

	$smarty->compile_dir = "./templates_c"; //���ñ���Ŀ¼
	
	
	//----------------------------------------------------

	//���û�������

	//----------------------------------------------------
	$smarty->cache_dir = "/caches";  // ���û���Ŀ¼
	
	$smarty->caching = true;  // ��������,Ϊflase��ʱ�����Ч
	
	$smarty->cache_lifetime = 60;  // ����ʱ��
	

	//----------------------------------------------------

	//���ұ߽����Ĭ��Ϊ{}����ʵ��Ӧ�õ���������JavaScript���ͻ

	//----------------------------------------------------

	$smarty->left_delimiter = "{";

	$smarty->right_delimiter = "}";




?>