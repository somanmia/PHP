<?php
  require_once("connect.php");
  if(isset($_REQUEST["username_sub"])){
  
   $username_sub=$_REQUEST["username_sub"];
   $sub_query="INSERT INTO sub_users(subscriber) VALUES ('$username_sub')";
   $runquery=mysqli_query($connect,$sub_query);
   
   if($runquery==true){
       header("location: index.php");
   
   }
  
  }
  

  
?>