<?php
session_start();
if($_GET[out]){
unset($_SESSION[id]);
setcookie($_SESSION[pass]);

}


if($_POST[name]&& $_POST[password]){
$_SESSION[id]=$_POST[name];
$_SESSION[pass]=$_POST[password];

}


if($_SESSION[id]&&$_SESSION[pass]){
echo "��½�ɹ���<br>".$_SESSION[id]."<br>���룺".$_SESSION[pass];
}

echo "<br><a href='32.php?out=out'>�˳�</a>";

?>
<form action="" method="post">
  <table width="282" border="0" align="center" cellpadding="1" cellspacing="1">
    <tr>
      <td width="93" bordercolor="#6699cc" bgcolor="#6699cc">�û�����</td>
      <td width="172" bordercolor="#6699cc" bgcolor="#6699cc"><label>
        <input type="name" name="name" />
      </label></td>
    </tr>
    <tr>
      <td bordercolor="#6699cc" bgcolor="#6699cc">���룺</td>
      <td bordercolor="#6699cc" bgcolor="#6699cc"><label>
        <input type="password" name="password" />
      </label></td>
    </tr>
    <tr>
      <td colspan="2" bordercolor="#6699cc" bgcolor="#6699cc"><label>
        <input type="submit" name="Submit" value="�ύ" />
      </label></td>
    </tr>
  </table>
</form>
