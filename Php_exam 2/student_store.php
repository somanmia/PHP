<?php
// Student Regestation From--------
$name="";
$roll="";
$email="";
$phone="";
$address="";
$name=$_REQUEST['namefld'];
$email=$_REQUEST['emailfld'];
$phone=$_REQUEST['phonefld'];
$address=$_REQUEST['addrfld'];
$roll=$_REQUEST['rollfld'];
if(strlen($roll)<=6){
    header('location:student_regestation.php?msq=Sucessfully...');
}else{
    header('location:student_regestation.php?msq=Fail...');
}
?>