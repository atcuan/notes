<?
/*******************************************
'�ļ�����GetPayHandle.php
'��Ҫ���ܣ���ʾ��������Ҫ��ɽ�������֧������֧��֪ͨ��Ϣ����֤��Ϣ��Ч�ԣ����û���ʾ֧���������ض�����Ϣ�ȡ�
'�汾��v1.1��Build2006-4-19��
'˵����
'	1.��ҳ���벻Ҫʹ������response.redirect��ҳ��ת������
'	2.�̻��ɸ���֧������Ͷ����Ų�ѯ�����ζ�����Ϣ�򷢻���Ϣ��ʾ���û�
'	3.��ҳ���������ͼƬ����ʽ�����ӣ��뽫·�����ַ��������������<img src="http://www.yoursitename.com/imagers/aaa.gif">
'��Ȩ���У����������������缼�����޹�˾
'����֧����ϵ��ʽ��86-010-82888778-8054 ת������
'*******************************************/

//--��ȡ����֧���������̻����͵�֧��֪ͨ��Ϣ(���¼��Ϊ֪ͨ��Ϣ)
	$c_mid			= $_REQUEST['c_mid'];			//�̻���ţ��������̻��ɹ��󼴿ɻ�ã������������̻��ɹ����ʼ��л�ȡ�ñ��
	$c_order		= $_REQUEST['c_order'];			//�̻��ṩ�Ķ�����
	$c_orderamount	= $_REQUEST['c_orderamount'];	//�̻��ṩ�Ķ����ܽ���ԪΪ��λ��С���������λ���磺13.05
	$c_ymd			= $_REQUEST['c_ymd'];			//�̻���������Ķ����������ڣ���ʽΪ"yyyymmdd"����20050102
	$c_transnum		= $_REQUEST['c_transnum'];		//����֧�������ṩ�ĸñʶ����Ľ�����ˮ�ţ����պ��ѯ���˶�ʹ�ã�
	$c_succmark		= $_REQUEST['c_succmark'];		//���׳ɹ���־��Y-�ɹ� N-ʧ��			
	$c_moneytype	= $_REQUEST['c_moneytype'];		//֧�����֣�0Ϊ�����
	$c_cause		= $_REQUEST['c_cause'];			//�������֧��ʧ�ܣ����ֵ����ʧ��ԭ��		
	$c_memo1		= $_REQUEST['c_memo1'];			//�̻��ṩ����Ҫ��֧�����֪ͨ��ת�����̻�����һ
	$c_memo2		= $_REQUEST['c_memo2'];			//�̻��ṩ����Ҫ��֧�����֪ͨ��ת�����̻�������
	$c_signstr		= $_REQUEST['c_signstr'];		//����֧�����ض�������Ϣ����MD5���ܺ���ַ���

	//--У����Ϣ������---
		if($c_mid=="" || $c_order=="" || $c_orderamount=="" || $c_ymd=="" || $c_moneytype=="" || $c_transnum=="" || $c_succmark=="" || $c_signstr==""){
			echo "֧����Ϣ����!";
			exit;
		}

	//--����õ�֪ͨ��Ϣƴ���ַ�������Ϊ׼������MD5���ܵ�Դ������Ҫע����ǣ���ƴ��ʱ���Ⱥ�˳���ܸı�
		//�̻���֧����Կ����¼�̻������̨(https://www.cncard.net/admin/)���ڹ�����ҳ���ҵ���ֵ
		$c_pass = "123456";
		
		$srcStr = $c_mid . $c_order . $c_orderamount . $c_ymd . $c_transnum . $c_succmark . $c_moneytype . $c_memo1 . $c_memo2 . $c_pass;

	//--��֧��֪ͨ��Ϣ����MD5����
		$r_signstr	= md5($srcStr);

	//--У���̻���վ��֪ͨ��Ϣ��MD5���ܵĽ��������֧�������ṩ��MD5���ܽ���Ƿ�һ��
		if($r_signstr!=$c_signstr){
			echo "ǩ����֤ʧ��";
			exit;
		}

	//--У���̻����
		$MerchantID="000103";	//�̻��Լ��ı��
		if($MerchantID!=$c_mid){
			echo "�ύ���̻��������";
			exit;
		}

	//--�������ݿ�
		$link = mysql_connect("����������", "�û���", "����") or die("Could not connect : " . mysql_error());
			mysql_select_db("���ݿ�����") or die("Could not select database");

	//--У���̻�����ϵͳ���Ƿ���֪ͨ��Ϣ���صĶ�����Ϣ
		$query = "select top 1 �������,������������,ת������һ,ת�������� from �̻��Ķ����� where �̻�������='".$c_order."'";
		$result = mysql_query($query) or die("Query failed : " . mysql_error());
		if(mysql_num_rows($result)!=1){
			echo "δ�ҵ��ö�����Ϣ";
			exit;
		}

	//--У���̻�����ϵͳ�м�¼�Ķ�����������֧������֪ͨ��Ϣ�еĽ���Ƿ�һ��
		$row = mysql_fetch_array($result);	//��ȡ�̻��Լ�ϵͳ��¼�Ķ�����Ϣ

	//--�ͷż�¼��,�ر����ݿ�����
		mysql_free_result($result);
		mysql_close($link);

		$r_orderamount = $row["�������"];	//�̻����Լ�����ϵͳ��ȡ��ֵ
		if($r_orderamount!=$c_orderamount){
			echo "֧���������";
			exit;
		}

	//--У���̻�����ϵͳ�м�¼�Ķ����������ں�����֧������֪ͨ��Ϣ�еĶ������������Ƿ�һ��
		$r_ymd = $row["������������"];		//�̻����Լ�����ϵͳ��ȡ��ֵ
		if($r_ymd!=$c_ymd){
			echo "����ʱ������";
			exit;
		}

	//--У���̻�ϵͳ�м�¼����Ҫ��֧�����֪ͨ��ת���Ĳ���������֧������֪ͨ��Ϣ���ṩ�Ĳ����Ƿ�һ��
		$r_memo1 = $row["ת������һ"];
		$r_memo2 = $row["ת��������"];
		if(($r_memo1<>$c_memo1) || ($r_memo2<>$c_memo2)){
			echo "�����ύ����";
			exit;
		}

	//--У�鷵�ص�֧������ĸ�ʽ�Ƿ���ȷ
		if($c_succmark!="Y" && $c_succmark!="N"){
			echo "�����ύ����";
			exit;
		}

	//--���ݷ��ص�֧��������̻���վ�����и��û���ʾ˵��
		if($c_succmark="Y"){
			������GetPayNotify.php���ѽ�����ʵ�ʷ��������������ڴ˴�ֻҪϵͳ�в�ѯ���������Ľ����Ȼ����û���ʾ����ɹ�����ʾ��Ϣ���ɡ�
		}
		else{
			
		}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>����@��������֧�����</title>
</head>

<body>
֧����ɺ󣬸��û���ʾ�˴�����֧���Ľ���Ͷ�����Ϣ�������Ϣ��
</body>
</html>