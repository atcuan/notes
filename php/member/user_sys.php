<?
include("config_class.php");

//echo $_SESSION[uid]."<br />";
echo $_SESSION[m_id]."<br />";
//echo $_SESSION[user_shell];
//$arr=user_shell($_SESSION[uid],$_SESSION[user_shell],1);

//echo $arr[username]."<br />";
//echo $arr[uid]."<br />";
//echo $arr[m_id]."<br />";


//echo$_SESSION[times]."<br />";
//echo mktime();


//user_mktime($_SESSION[times]);

$p=new member_config($_SESSION[uid],$_SESSION[user_shell],$_SESSION[m_id]/*Ȩ�޿���*/,$_SESSION[times]);
?>

<br />
Ȩ������0000000000000