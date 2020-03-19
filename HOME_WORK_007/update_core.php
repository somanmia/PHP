<?php
require_once('connect.php');
if(isset($_REQUEST['submit'])){
    $name=$_REQUEST['namefld'];
    $email=$_REQUEST['emailfld'];
    $phone=$_REQUEST['phonefld'];
    $message=$_REQUEST['msqfld'];
    $updateid=$_REQUEST['idfld'];

    $updatequery="UPDATE users SET Name='$name', Email='$email', Phone='$phone', Address='$message' where id=$updateid";
    $runquery=mysqli_query($connect,$updatequery);
    if($runquery==true){
         header('location:index.php?updatemsq=Update is Sucessfully');
    }
}



?>