<?php
/*
 * php100-47��Ƶ�̳�,���csv��excel�ļ�
 */
 header("Content-type:application/vnd.ms-excel");
 header("Content-Disposition:filename=php100.xls");

?>
<table width="200" border="1">
  <tr>
    <td colspan="3"><font color=red>ѧԱͳ��</font></td>
  </tr>
  <tr>
    <td>���</td>
    <td>����</td>
    <td>����</td>
  </tr>
  <tr>
    <td>1</td>
    <td>����</td>
    <td>28</td>
  </tr>
  <tr>
    <td>2</td>
    <td>����</td>
    <td>23</td>
  </tr>
   <tr>
    <td>=A3+A4</td>
    <td></td>
    <td>=SUM(C3:C4)</td>
  </tr>
</table>

