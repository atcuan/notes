<?
session_start();
//���ݿ�����
$conn=mysql_connect('localhost','root','');
mysql_select_db('member',$conn);

//���峣��
define(ALL_PS,"php100");

class member_config {
	private $uid;
	private $shell;
	private $m_id;
	private $onlinetime;

	function __construct($uid, $shell, $m_id, $onlinetime) {
		$this->uid = $uid;
		$this->shell = $shell;
		$this->m_id = $m_id;
		$this->onlinetime = $onlinetime;
		$this->user_shell();
		$this->user_mktime();

	}

	//����Ȩ�޲鿴���ݵĿ���
	function user_shell() {
		$sql = "select * from user_list where `uid`='$this->uid'";
		$query = mysql_query($sql);
		$us = is_array($row = mysql_fetch_array($query));
		$this->shell = $us ? $shell = md5($row[username] . $row[password] . ALL_PS) : FALSE;
		if ($this->shell) {
			if ($row[m_id] <= $this->m_id) {
				return $row;
			} else {
				echo "��Ȩ�޲���";
				exit ();
			}
		} else {
			echo "���޷��ʸ�ҳȨ��";
			exit ();
		}
	}

	//��¼��ʱ������
	function user_mktime() {
		$new_time = mktime();
		echo $new_time - $this->onlinetime;
		if ($new_time - $this->onlinetime > '1800') {
			echo "��¼��ʱ";
			session_destroy();
		} else {
			$_SESSION[times] = mktime();
		}
	}

}






?>