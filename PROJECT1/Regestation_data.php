<?php
 require_once("connect.php");
  if(isset($_REQUEST["fname"]) && isset($_REQUEST["lname"])
  && isset($_REQUEST["email_addr"]) 
  && isset($_REQUEST["pass"]) && 
  isset($_REQUEST["re_pass"]));
  
 $first_name=$_REQUEST["fname"];
 $last_name=$_REQUEST["lname"];
 $Email_addr=$_REQUEST["email_addr"];
 $Password=$_REQUEST["pass"];
 $Re_password=$_REQUEST["re_pass"];
 
 $EncreaptPass=md5(sha1($Password));
 $EncreaptRe_Pass=md5(sha1($Re_password));
 $Encreapt_email=md5(sha1($Email_addr));
if($EncreaptPass==$EncreaptRe_Pass){

  $query="INSERT INTO useraccount(First_name,Last_name,Email,Password,Re_password) VALUES
 ('$first_name','$last_name','$Encreapt_email','$EncreaptPass','$EncreaptRe_Pass')";
$runquery=mysqli_query($connect,$query);

  if($runquery==true){
  setcookie("CurrentUsser",$Encreapt_email,time()+(60*2));
  header("location:create_account.php?yes=Account Create is sucessfull");
  header("location:index.php");
}
 else{
 
  header("location:create_account.php?no=Unvalid Email");
 }
 

}else{

 header("location:create_account.php?msq=Password Doesn't Match");
} 

?>