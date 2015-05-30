<?php 
$color=array("White","Red"); 
$dnum=preg_replace("/[^0-9]/","",$_POST['dval']);
$j=0;
$val=array();
$col=array();
while($j<$dnum){
$j++;
$val[$j]=rand(1,6);
$col[$j]="White";
}
$max=max($val);
$i=0;
while($i<$dnum){
if($val[$i]==$max){$col[$i]="Red";}
$i++;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Dice</title>
<link href="dice.css" type="text/css" rel="stylesheet">
</head>
<body><center>
<form action="/" method="post" name="form" target="_self">
Number Of Dice:
<input name="dval" type="text" size="3" maxlength="2" />
<input name="submit" type="submit"/>
</form>
<div>
<p>
<table>
<tr>
<?php
$k=0;
while($k<$dnum){
$k++;
?>
<td>
<i class="dice dice-die<?=$col[$k];?>_border<?=$val[$k];?>"></i>
</td>
<?php if(($k%10)==0){echo "</tr></table><table><tr>";}}?> 
</tr>
</table>
</tr>
</p>
</div>
</body>
</html>