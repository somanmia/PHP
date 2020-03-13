<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" href="css/useraccount.css" />
	<link rel="shortcut icon" href="images/icon/mail.png">
</head>
<body>
	<section class="main_section">
	  
	      <div class="title">
		      <h2>Create Account && Enjoy Your Life</h2>.
		  </div>
	      <nav>
		     <form  method="POST" action="Regestation_data.php">
                 <label for="fn">First Name: </label>
				 <input required type="text" id="fn"  placeholder="Enter Your First Name"  name="fname">
				 
				 <label for="ln">Last Name:</label>
				 <input requierd type="text" id="ln" placeholder="Enter Your Last Name:" name="lname">
				 
				 <label for="gm">Email:</label>
				 <input required type="email" id="gm" placeholder="Enter Your Valid Email " name="email_addr">
				 
				 <label for="Pas">Password:</label>
				 <input required type="password" placeholder="Enter Your Strong Password" name="pass" minlength="12">
				 
				 <label for="Pas">Re-password:</label>
				 <input required type="password" placeholder="Enter Your Re-password" name="re_pass" minlength="12">
				 <input type="submit" value="Sine In">
				<!---FEDBACK MESSAGE SHOW---->
               <h3>
			       <?php
		    if(isset($_REQUEST["yes"])){
			   echo $_REQUEST["yes"];
			
			}else if(isset($_REQUEST["no"])){
			     echo $_REQUEST["no"];
			}else if(isset($_REQUEST["msq"])){
			    echo $_REQUEST["msq"];
			}
		 
		  
		 ?>
               </h3>			   
				 
			 </form>
		  </nav>
	       
	  
	</section>
</body>
</html>