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
	function __tostring(){
		return  $this->name."����һ������";
	}

	function __call($n,$v){
		echo "����ķ���Ϊ:".$n;
		echo "�����ֵ".print_r($v);
	}
}

$p=new my();
$p->demo("��һ",6);













?>