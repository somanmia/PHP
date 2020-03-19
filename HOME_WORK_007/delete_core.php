<?php
 require_once('connect.php');
 if(isset($_REQUEST['id'])){
 $deleteid=$_REQUEST['id'];
$deletequery="DELETE FROM users where id=$deleteid";
 if(mysqli_query($connect,$deletequery)){
     header('location:index.php?dltmsq=Data has been Delete');
 }
}

?>