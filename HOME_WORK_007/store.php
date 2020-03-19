<?php
require_once('connect.php');
 if(isset($_REQUEST['submit'])){
     $name=$_REQUEST['namefld'];
     $email=$_REQUEST['emailfld'];
     $phone=$_REQUEST['phonefld'];
     $message=$_REQUEST['msqfld'];
     $sql="INSERT INTO `users`(`Name`, `Email`, `Phone`, `Address`) VALUES ('$name','$email','$phone','$message')";  
    if(mysqli_query($connect,$sql)){
       header('location:index.php?msq=Data Saved!!');   
   }else{
       header('location:index.php?msq=Not Saved!!');
   }
 }


?>