<?php
   $localserver="localhost";
   $username="root";
   $password="";
   $dbname="domain";
   
   $connect=mysqli_connect("$localserver","$username","$password","$dbname");
   if($connect==false){
    echo "Not Connected";
   }
   
   
   

?>