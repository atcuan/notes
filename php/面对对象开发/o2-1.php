
<?php

/*
 * Created on 2011-7-17
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
?>
<?

class MyPc {
	public $name;
	public $type;

	function __construct($name = '', $type = '') {
		$this->name = $name;
		$this->type = $type;
	}

	function vod() {
		return $this->name . $this->type . ",���ŵ�Ӱ";
	}

	function game() {
		return $this->name . ",����Ϸ";
	}

	function intelnet() {
		return "����";
	}

	function __destruct() {
		echo "<br>==========" . $this->name;
	}
}

$pc1 = new MyPc('���õ���', '��̨ʽ��');

$pc2 = new MyPc('��˾����');

echo $pc1->vod() . "<br>";
echo $pc2->game() . "<br>";
?>