<?php
   if(isset($_COOKIE["CurrentUsser"])){
   
       header("location:index.php");
   }
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" href="css/login.css" />
	<link rel="stylesheet" href="css/font-awesome.min.css" />
	         <link rel="shortcut icon" type="image/x-icon" href="images/icon.png" />
</head>
<body>
<section id="main_section">

	  <div class="login_section">
	       <div class="sine_in">  
			 <div class="showcase">
			     <img src="images/logo/logos.png" alt="This is Google Logo">
			       <p>Log In with your Gmail && Userpassword</p>
			 </div>
		
               <form action="login_core.php" method="POST">
			     <label for="ss">Enter Your Gmail:</label>
				 <input required type="email"  id="ss" placeholder="Enter Your Valid Gmail Account" name="gmailfld">
			      <label for="ee">Password:</label>
				
                  <input required type="password" id="ee" placeholder="Enter Your userpassword" name="passwordfld">
                      <input type="submit" value="Log In">				  
			   </form>
			
			<div class="or">
			   <hr class="bar">
			     <span> OR</span>
			   <hr class="bar">
			</div>
			<div class="primary_btn">
			    <a href="create_account.php">Create An Account</a>
			</div>
			<footer class="footer_section">
			  <p>Company &copy 2018 All right Servered</p>
			</footer>
			
		</div>	
	  </div>
	  
	  <div class="trail_section">
	     <div id="showcase">
	        <h3>Enjoy our website & School</h3>
		</div>
		<div class="content_trail">
		   <p>Lorem ipsum dolor sitdo amet,
		   consectetur dont adipis elit. Vivamus 
		   interdum ultrices augue. Aenean dos cursus lania
		   Lorem ipsum dolor sitdo amet,
		   consectetur dont adipis elit. Vivamus 
		   interdum ultrices augue. Aenean dos cursus lania.
		   </P>
		   
		</div>
		     <a href="create_account.php">Read More</a>
	  </div>

</section>	  
</body>
</html>
