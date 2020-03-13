<?php
   require_once("connect.php");
   if(isset($_REQUEST["first_name"]) && isset($_REQUEST["gmail"]) && isset($_REQUEST["subject"]) && isset($_REQUEST["txt_area"])){
   
        $name=$_REQUEST["first_name"];
        $gmail=$_REQUEST["gmail"];
        $subject=$_REQUEST["subject"];
        $message=$_REQUEST["txt_area"];
		
		$query="INSERT INTO `web_from`(Name, Gmail, Subject, Message) VALUES ('$name','$gmail','$subject','$message')";
        
		$runquery=mysqli_query($connect,$query);
		
		if($runquery==true){
		  header("location:contact.php?yes=Message Send is Sucessfully");
		}else{
		  header("location:contact.php?no=Message Send is Not Sucessfully");
		
		}
   }

?>