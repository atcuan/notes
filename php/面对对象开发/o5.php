<?php


/*
 * Created on 2011-7-17
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
?>
<?
abstract class cl1{
	abstract function fun1();
	abstract function fun2();
	abstract function fun3();
	function ok(){

	}
}

class cl2 extends cl1{
	function fun1(){
		echo "��һ��";
	}
	function fun2(){
		echo "�ڶ���";
	}
	function fun3(){
		echo "������";
	}
}

$p=new cl2();
$p->fun2();


?>