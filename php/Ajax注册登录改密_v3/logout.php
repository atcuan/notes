<a href='?out=login'>�˳�</a>
<?php
  if($_GET[out]){
  	session_destroy();
    echo "<script language=\"javascript\">location.href='logout_done.php';</script>";
  }
