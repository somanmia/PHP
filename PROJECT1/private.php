<?php
 if(!isset($_COOKIE["CurrentUsser"])){
    header("location:login.php");
 }

?>
<!DOCTYPE HTML>
<html>
    <head>
	   	   <title>Learning Web Development && Design</title>
	     <!----ALL LINKS---->
				  <link rel="stylesheet"type="text/css" href="css/index.css">
				  <link rel="stylesheet" href="css/font-awesome.min.css"/>	  <!---FONT -ASUME CSS----->
				  <script type="text/javascript" src="jq/jquery-3.3.1.min.js"></script> <!----JQUERY LINK----->
				  <script type="text/javascript" src="js/Responsive_menubar.js"></script><!----JAVASCRIPT LINK---->
				  <link rel="shortcut icon" type="image/x-icon" href="images/icon/home.png" />
		<!--END OF LINK --->
	   
	</head>
	<body>
	
	     <!----START HEADER SECTIOPN----->
     <header class="header_section">
			   <div id="container">
					  <section class="left_header_section">
                            <h2><span class="span">Web</span>Development</h2>
					  </section>
					  
					     <div class="middle_section"><!--middle section---->
								   <div class="info_clock">	
									  <div class="clock_section">
									     <i class="fa fa-clock-o"></i>
									   </div>
									  </div> 
								    <div class="time_dec">
									   <p>Working Time:</p>
									   <span class="span_time">Saturday-Thursday :08 AM - 06 PM</span>
								   </div>
					 	</div>	
								  <div class="right_section"><!---START RIGTH SECTION---->
											<div class="info_clock">
												<div class="clock_section">
												  <i class="fa fa-map-marker"></i>
												</div>
											</div>
											<div class="time_dec">
											   <p>Find Us:</p>
											   <span class="span_time">Bhatpara Sherpur Sadar,Sherpur.</span>
										 </div>
						         </div>	<!---end of right section--->
						
						
					 
			   </div>
	</header> <!----END OF HEADER SECTIIION----->
 	
  <section id="menu_bar_section">
    <div id="container">
	   <nav>
	      <div class="m-display"><!--RESPONSIVE SECTION FOR MOBILE VIEW------>
                <div class="res">
				  <div class="r"></div>
				  <div class="r"></div>
				  <div class="r"></div>
				</div>
			
		  </div>
		  <ul class="nav-bar">
		     <li><a class="home_fa" href="index.php"><i class="fa fa-home"></i></a></li>
		     <li><a href="about.php">About Us</a></li>
		     <li class="dd-btn"><a href="##">Service<i class="fa fa-angle-down"></i></a>
			      <ul class="dd-menu">
						 <li><a href="java.php">Java</a></li>
						 <li><a href="python.php">Python</a></li>
						 <li><a href="android.php">Android</a></li>
						 <li><a href="css3.php">CSS3</a></li>
						 <li><a href="html5.php">HTML5</a></li>
				  </ul>
			 
			 </li>
		     <li><a href="contact.php">Contact</a></li>
		     <li><a href="blog.php">Blog</a></li>
		    
		  </ul>
	   </nav>
	</div>
     
 </section>  
		
		
<!....................END OF NAV SECTION............/>		
	<section id="contact_section" style="background: url('images/java_images/5.jpg'); backgrkound-position:center; background-repeat:no-repeat;background-size:cover">
    
		<div id="container">
          <div class="title">
			   <h2>.....USER DOCUMENT....</h2>
			   <a href="index.html">Home</a>
			   <a href="contact.html">Contact</a>
		 </div>	
		  <div class="quick_contact">
		  </div>
		   
       </div>
</section>	
<!.........END OF PAGE TITLE SECTION............../>
   <section id="personal_section">
   
         <div id="container">
		 
		 <div id="private_profile">
		     <h2>Verify Your Profile</h2>
			   <img src="images/profile/private.jpg">
		    <form  method="POST" action="private_verify.php">
			   <input required type="email" name="gmail" placeholder="Enter Your Gmail Account"></br>
			   <input  required type="password" name="password" placeholder="Enter Your Password"></br>
			   <input class="btn" type="submit" value="send">
			</form>
			<h1 style="color:#f6783a">
			<?php
			   if(isset($_REQUEST["msq"])){
			   
			     echo  $_REQUEST["msq"];
			   }
			  
			
			
			?>
			</h1>
		 </div>
		 </div>
   </section>

		  
<!....................Start Fotter Section........................../>
        <footer id="footers" style="margin-top:5px">
		          <div id="container">
				      <div style="margin-left:0px;"class="socail">
					       <h2><span>Ja</span>va</h2>
						   <p>
							   orem ipsum dolor sit amet, 
							   consecter adipiscing elite.
							   Donec minos varius, viverra 
							   justo ut, aliquet nisl.
						   </p>
						
						   <li style="float:left"><a href="index.html"><img src="images/social/1.png" alt="1"></a></li>
						   <li style="float:left;margin-left:20px;"><a href="index.html"><img src="images/social/2.png" alt="2"></a></li>
						   <li style="float:left;margin-left:20px;"><a href="index.html"><img src="images/social/4.png" alt="4"></a></li>
						   <li style="float:left;margin-left:20px;"><a href="index.html"><img src="images/social/3.png" alt="3"></a></li>

						 
					  </div>
					  
					   <div class="socail">
					       <h2>USEFUL LINK</h2>
						    
							   <li ><a href=".php">Home</a></li>
							   <li><a href="about.php">About</a></li>
							   <li><a href="blog.php">Blog</a></li>
							   <li><a href="contact.php">Contact</a></li>
							   <li><a href="java.php">java</a></li>
							   
							
					  </div>
					  
					   <div class="socail">
					       <h2>RECENT POST</h2>
						   <p>
							  Snackable study:How to break
                              up your master's degree
						   </p>
						      
						   <p>
						      Open University plans major
                             cuts to number of staff
						   </p>
					  </div>
					  
					  <div style="float:right;" class="socail">
					       <h2>CONTACT</h2>
						   <p>
							  <li> <i style="padding-right:6px;color:rgb(246, 120, 58)" class="fa fa-map-marker" aria-hidden="true"></i>40 Baria Street 133/2, Sherpur City,BD</li>
						   </p>
						    <p>
							  <li><i  style="padding-right:6px;color:rgb(246, 120, 58)" class="fa fa-phone" aria-hidden="true"></i>(+088) 1812084186</li>
						   </p>
                             
                          <p>
							  <li><i style="padding-right:6px;color:rgb(246, 120, 58)" class="fa fa-envelope-o" aria-hidden="true"></i>somanmia.cse@gmail.com</li>
						   </p>	

                             <p>
							  <li>
							    <i style="padding-right:6px;color:rgb(246, 120, 58)" class="fa fa-calendar-o" aria-hidden="true"></i>  Saturday - Thursday, 08:00AM - 06:00 PM
							  
							  </li>
						   </p>						   
					  </div>
					  
				  </div>
				  
		
   <!.................start footer menu................................./>		
		</footer>
		<footer id="copyright">
		    <div id="container">
			  <p>somanmia.cse@gmail.com &copy 2019</p>
			</div>
		</div>
	</body>
</html>