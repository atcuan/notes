<?
/********************************************
'�ļ�����SendOrder.php
'��Ҫ���ܣ���ʾ��������Ҫ��ɽ��̻�������Ϣ�ύ������֧�����صĹ���
'�汾��v1.1��Build2006-4-19��
'�����������̻��Ķ���ϵͳ������ɣ���ҳ����Ҫ�ǰ����̻���������֧������Ҫ��ĸ�ʽ��������Ϣ�ύ������֧��@����֧���ӿڣ�����֧������
'��Ȩ���У����������������缼�����޹�˾
'����֧����ϵ��ʽ��86-010-82888778-8054 ת������
'*******************************************/

//--������Ϣ---

	$c_mid		= "000103";						//�̻���ţ��������̻��ɹ��󼴿ɻ�ã������������̻��ɹ����ʼ��л�ȡ�ñ��
	$c_order	= "123456";					    //�̻���վ���ն����Ź������ɵĶ����ţ������ظ�
	$c_name		= "����";						//�̻������е��ջ�������
	$c_address	= "�����г�����XX";				//�̻������е��ջ��˵�ַ
	$c_tel		= "010-12345678";				//�̻������е��ջ��˵绰
	$c_post		= "100001";						//�̻������е��ջ����ʱ�
	$c_email	= "YourEmail@HostName.com";		//�̻������е��ջ���Email
	$c_orderamount = "0.01";					//�̻������ܽ��
	$c_ymd		= "20050101";					//�̻������Ĳ������ڣ���ʽΪ"yyyymmdd"����20050102
	$c_moneytype= "0";							//֧�����֣�0Ϊ�����
	$c_retflag	= "1";							//�̻�����֧���ɹ����Ƿ���Ҫ�����̻�ָ�����ļ���0�����÷��� 1����Ҫ����
	$c_paygate	= "";							//������̻���վѡ�����������ø�ֵ������ֵ�ɲμ�������֧��@�������ӿ��ֲᡷ��¼һ�����������֧��@��ѡ�����д���Ϊ��ֵ��
	$c_returl	= "http://www.YourSiteName.com/filePath/GetPayNotify.php";	//���c_retflagΪ1ʱ���õ�ַ�����̻���������֧�����֪ͨ��ҳ�棬���ύ�����ļ���(��Ӧ�����ļ���GetPayNotify.php)
	$c_memo1	= "ABCDE";						//�̻���Ҫ��֧�����֪ͨ��ת�����̻�����һ
	$c_memo2	= "12345";						//�̻���Ҫ��֧�����֪ͨ��ת�����̻�������
	$c_pass		= "123456";						//֧����Կ�����¼�̻������̨�����ʻ���Ϣ-������Ϣ-��ȫ��Ϣ�е�֧����Կ��
	$notifytype	= "1";							//0��֪ͨͨ��ʽ/1������֪ͨ��ʽ����ֵΪ��֪ͨͨ��ʽ
	$c_language	= "0";							//�������˹��ʿ�֧��ʱ����ʹ�ø�ֵ����������������֧��ʱ��ҳ�����֣�ֵΪ��0����ҳ����ʾΪ����/1����ҳ����ʾΪӢ��

	$srcStr = $c_mid . $c_order . $c_orderamount . $c_ymd . $c_moneytype . $c_retflag . $c_returl . $c_paygate . $c_memo1 . $c_memo2 . $notifytype . $c_language . $c_pass;
	//˵�����������ָ��֧����ʽ(c_paygate)��ֵʱ����Ҫ�����û�ѡ��֧����ʽ��Ȼ���ٸ����û�ѡ��Ľ�����������MD5���ܣ�Ҳ����˵����ʱ����ҳ��Ӧ�ò��Ϊ����ҳ�棬��Ϊ����������ɡ�
	
//--�Զ�����Ϣ����MD5����
	//�̻��Զ�����Ϣ����MD5ǩ������ַ���
	$c_signstr	= md5($srcStr);

?>

<html>
<body>

<p><strong>��ʽһ��δ����֧�����е����</strong></p>
<table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center"> 
      <form name="payForm1" action="https://www.cncard.net/purchase/getorder.asp" method="POST">
			<input type="hidden" name="c_mid" value="<?=$c_mid?>">
			<input type="hidden" name="c_order" value="<?=$c_order?>">
			<input type="hidden" name="c_name" value="<?=$c_name?>">
			<input type="hidden" name="c_address" value="<?=$c_address?>">
			<input type="hidden" name="c_tel" value="<?=$c_tel?>">
			<input type="hidden" name="c_post" value="<?=$c_post?>">
			<input type="hidden" name="c_email" value="<?=$c_email?>">
			<input type="hidden" name="c_orderamount" value="<?=$c_orderamount?>">
			<input type="hidden" name="c_ymd" value="<?=$c_ymd?>">
			<input type="hidden" name="c_moneytype" value="<?=$c_moneytype?>">
			<input type="hidden" name="c_retflag" value="<?=$c_retflag?>">
			<input type="hidden" name="c_paygate" value="<?=$c_paygate?>">
			<input type="hidden" name="c_returl" value="<?=$c_returl?>">
			<input type="hidden" name="c_memo1" value="<?=$c_memo1?>">
			<input type="hidden" name="c_memo2" value="<?=$c_memo2?>">
			<input type="hidden" name="c_language" value="<?=$c_language?>">
			<input type="hidden" name="notifytype" value="<?=$notifytype?>">
			<input type="hidden" name="c_signstr" value="<?=$c_signstr?>">
			<input type="submit" name="submit" value="��� -> ����֧��@��">
      </form>
	</td>
  </tr>
</table>

<br>

<p>
  <strong>��ʽ�������嵥��֧�����е����</strong><br>
  ˵��������ֻ���й��������о�����Ҳ��ͬʱ�ṩ����֧����ʽ��������ѡ����������ʽ��������֧��@��֧�������б���μ�������֧��@�������ӿ��ֲᡷ 
</p>
<table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center"> 
    <form name="payForm2" action="https://www.cncard.net/purchase/getorder.asp" method="POST">
		<input type="hidden" name="c_mid" value="<?=$c_mid?>">
		<input type="hidden" name="c_order" value="<?=$c_order?>">
		<input type="hidden" name="c_name" value="<?=$c_name?>">
		<input type="hidden" name="c_address" value="<?=$c_address?>">
		<input type="hidden" name="c_tel" value="<?=$c_tel?>">
		<input type="hidden" name="c_post" value="<?=$c_post?>">
		<input type="hidden" name="c_email" value="<?=$c_email?>">
		<input type="hidden" name="c_orderamount" value="<?=$c_orderamount?>">
		<input type="hidden" name="c_ymd" value="<?=$c_ymd?>">
		<input type="hidden" name="c_moneytype" value="<?=$c_moneytype?>">
		<input type="hidden" name="c_retflag" value="<?=$c_retflag?>">
		<input type="radio" name="c_paygate" value="3" checked>ʹ���й���������֧����֧��
		<input type="hidden" name="c_returl" value="<?=$c_returl?>">
		<input type="hidden" name="c_memo1" value="<?=$c_memo1?>">
		<input type="hidden" name="c_memo2" value="<?=$c_memo2?>">
		<input type="hidden" name="c_language" value="<?=$c_language?>">
		<input type="hidden" name="notifytype" value="<?=$notifytype?>">
		<input type="hidden" name="c_signstr" value="<?=$c_signstr?>">
		<input type="submit" name="submit" value="���֧��">
	</form>
	</td>
  </tr>
</table>

<br>

<p>
  <strong>��ʽ�����������֧�����е����</strong><br>
  ˵��������ֻ���������к��й��������о���������֧��@��֧�������б���μ�������֧��@�������ӿ��ֲᡷ 
</p>
<table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr> 
    <td align="center"> 
	  <form name="payForm3" action="https://www.cncard.net/purchase/getorder.asp" method="POST">
        <input type="hidden" name="c_mid" value="<?=$c_mid?>">
        <input type="hidden" name="c_order" value="<?=$c_order?>">
        <input type="hidden" name="c_name" value="<?=$c_name?>">
        <input type="hidden" name="c_address" value="<?=$c_address?>">
        <input type="hidden" name="c_tel" value="<?=$c_tel?>">
        <input type="hidden" name="c_post" value="<?=$c_post?>">
        <input type="hidden" name="c_email" value="<?=$c_email?>">
        <input type="hidden" name="c_orderamount" value="<?=$c_orderamount?>">
        <input type="hidden" name="c_ymd" value="<?=$c_ymd?>">
        <input type="hidden" name="c_moneytype" value="<?=$c_moneytype?>">
        <input type="hidden" name="c_retflag" value="<?=$c_retflag?>">
        <input type="radio" name="c_paygate" value="1" checked>
        ʹ����������֧����֧��<br> 
        &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="c_paygate" value="3">
        ʹ���й���������֧����֧��<br>
        <br>
        <input type="hidden" name="c_returl" value="<?=$c_returl?>">
        <input type="hidden" name="c_memo1" value="<?=$c_memo1?>">
        <input type="hidden" name="c_memo2" value="<?=$c_memo2?>">
        <input type="hidden" name="c_language" value="<?=$c_language?>">
        <input type="hidden" name="notifytype" value="<?=$notifytype?>">
        <input type="hidden" name="c_signstr" value="<?=$c_signstr?>">
        <input type="submit" name="submit" value="���֧��">
      </form>
	</td>
  </tr>
</table>

</body>
</html>