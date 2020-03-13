<?php

 require_once("connect.php");
 if(isset($_REQUEST["gmail"]) && isset($_REQUEST["password"])){
    $gm=$_REQUEST["gmail"];
	$pass=$_REQUEST["password"];
    if(($gm=="somanmia.cse@gmail.com") && ($pass==12345678))
	{
	   $Encreptgmail=md5(sha1($gm));
	   setcookie("UserGmail:",$Encreptgmail,time()+(36000*3));
	  header("location:Table_data_show.php");
	
	}else{
	  header("location:private.php?msq=ACCESS IS DENIDE");
	}
 
 }







?>