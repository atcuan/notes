<?php
/*
 * Created on 2011-7-17
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
?>
<?
class MyPc{
	public $name;
	public $type;

	function vod(){
		return $this->name. ",���ŵ�Ӱ";
		}

	function game(){
		return $this->name. "����Ϸ";
	}

	function intelnet(){
		return "����";
	}
}

$pc1=new MyPc();
$pc1->name="���õ���";
$pc2=new MyPc();
$pc2->name="��˾����";
$pc3=new MyPc();
$pc3->name="˽�˵���";

echo $pc1->vod()."<br>";
echo $pc2->game()."<br>";
echo $pc3->name.$pc3->intelnet();


?>