<?php
$num1="";
$num2="";
$num3="";
$num1=$_REQUEST['num1'];
$num2=$_REQUEST['num2'];
$num3=$_REQUEST['num3'];
$data=array($num1,$num2,$num3);
rsort($data);
$arrlenth=count($data);
echo "Decending Order Data  ..<br>";
for($i=0;$i<$arrlenth;$i++){
     echo $data[$i]." <br>";
}


?>