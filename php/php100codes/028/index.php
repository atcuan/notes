<?php
/*
capitalize [����ĸ��д] 
count_characters [�����ַ���] 
cat [�����ַ���] 
count_paragraphs [���������]
count_sentences [�������]
count_words [�������]
date_format [ʱ���ʽ]
default [Ĭ��]
escape [ת��]
indent[����]
lower[Сд ]
nl2br[���з��滻��<br />]
regex_replace[�����滻]
replace[�滻]
spacify[���]
string_format[�ַ�����ʽ��]
strip[ȥ��(����ո�)]
strip_tags[ȥ��html��ǩ]
truncate[��ȡ]
upper[��д]
wordwrap[�п�Լ��]

*/
include("smarty_inc.php");
$value="it is Work and,  it is php100 video.<a href=ssss>aaaaa</a>";
$smarty->assign('name',$value);
//$smarty->assign('name',2323232.23232);
//$smarty->assign('name',strtotime('-0'));
$smarty->display("index.html");
?>