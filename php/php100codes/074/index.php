<?php

$memcache = new memcache;
$memcache->connect('127.0.0.1', 11211) or die ("����ʧ��");

$memcache->set('name',array("һ��","����"));

//$memcache->delete('name');

$val=$memcache->get('name');


print_r($val);

$memcache->close();


$memcache->set('key1', 'This is first value', 0, 60);
$val = $memcache->get('key1');
echo "Get key1 value: " . $val ."";
//�滻����
$memcache->replace('key1', 'This is replace value', 0, 60);
$val = $memcache->get('key1');
echo "Get key1 value: " . $val . "";
//��������
$arr = array('aaa', 'bbb', 'ccc', 'ddd');
$memcache->set('key2', $arr, 0, 60);
$val2 = $memcache->get('key2');
echo "Get key2 value: ";
print_r($val2);
echo "";
//ɾ������
$memcache->delete('key1');
$val = $memcache->get('key1');
echo "Get key1 value: " . $val . "";
//�����������
$memcache->flush();
$val2 = $memcache->get('key2');
echo "Get key2 value: ";
print_r($val2);
echo "";
//�ر�����
$memcache->close();


?>

