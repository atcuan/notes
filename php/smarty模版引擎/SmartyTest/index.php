<?php
// uising smarty config file
include_once 'smarty_inc.php';

// setting html page title
$title_content = 'smarty����ҳ��';
$smarty->assign('title',$title_content);

// loop content
$news[] = array('name'=>'Face IPO',date=>'2012-2-12');
$news[] = array('name'=>'QQ�����㶫����Ʒ��',date=>'2012-2-2');
$news[] = array('name'=>'����Զ��ְ',date=>'2012-2-11');
$news[] = array('name'=>'���˹ɼ۴���',date=>'2012-2-2');
$smarty->assign('article',$news);

// display date
$smarty->assign('date',strtotime('-0'));
 
$str = 'Life was like a box of choclates,you never know what you\'re gonna get the next';
$smarty->assign('string',$str);

//using template file
$smarty->display('index.html');




?>