<?php
 require_once("connect.php");
 if(isset($_REQUEST['gmailfld']) && isset($_REQUEST['passwordfld'])){
    $gamil=$_REQUEST['gmailfld'];
    $pwd=$_REQUEST['passwordfld'];
	
	
    
   $Encreapt_gml=md5(sha1($gamil));
   $EncreaptPwd=md5(sha1($pwd));
   
    $query="SELECT * FROM `useraccount` WHERE Email='$Encreapt_gml' AND Password='$EncreaptPwd'";
	$matchmqery=mysqli_query($connect,$query);
	
	$checkcount=mysqli_num_rows($matchmqery);
	
	if($matchmqery==true){
	if($checkcount==1){
	  setcookie("CurrentUsser",$Encreapt_gml,time()+(8600*7));
	  header("location:index.php");
	}else{
	  header("location:login.php?msq=Email && Password Doesn't Match");
	  header("location:create_account.php");
	}
 }
 }



?>