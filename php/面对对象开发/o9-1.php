<?php
/*
 * Created on 2011-7-17
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
?>
<?
class my{
	public $name="�ҵ���";
	function __tostring(){		// __tostring������ֱ�Ӵ�ӡ���
		return  $this->name."����һ������";
	}

	function __call($n,$v){		//__call($funname,$arr_value)������һЩ�����ڵĶ��󷽷����쳣����
		echo "����ķ���Ϊ:".$n;
		echo "�����ֵ".print_r($v);
	}

	function __destruct(){
		echo"<br>����һ������";		//���������Ϣ
	}

	function __clone(){			// ͨ����¡�ķ�ʽ���ǿ������ڴ�����������һ���Ķ��������ԭ����
		$this->name="�����";
	}
}

$p=new my();
$b=clone $p;

echo $p->name."<br>";
echo $b->name;










?>