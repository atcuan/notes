<?php
$path = 'D:\PHP2012\Apache2.2\htdocs\PHPLee\dir.php';
echo basename($path) . '<hr />';// ������һ��
echo dirname($path). '<hr />'; // Ŀ¼

$array_path = pathinfo($path); // 
print_r($array_path);

echo '<br />';

$path_ = './demo.php';
echo realpath($path_) . '<hr />';

$path__ = 'dir.php';
$flie = realpath($path__);
echo '��ǰ�ļ���С��' . round(filesize($flie)/1024,2) . 'KB' . '<hr />';

$disk_d = 'd:';
echo 'D�̿��пռ䣺' . round(disk_free_space($disk_d)/1024/1024/1024,2) . 'GB' . '<hr />';
echo 'D���ܹ��ռ䣺' . round(disk_total_space($disk_d)/1024/1024/1024,2) . 'GB' . '<hr />';

date_default_timezone_set('Asia/Shanghai'); // ����ʱ��
echo '���ļ�������ʱ�䣺' . date('Y-m-d,h:i:s',fileatime($flie)) . '<hr />';

//��ȡ��ǰʱ��
$now = strtotime(now);
echo '��ǰʱ���ǣ�' . date('Y-m-d,h:i:s',$now) . '<hr />';

$time = mktime(1,2,3,4,23,2012);
echo date('Y-m-d,h:i:s',$time);









?>