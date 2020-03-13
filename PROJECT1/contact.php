<?php
 if(!isset($_COOKIE["CurrentUsser"])){
    header("location:login.php");
  
 }
?>

<!DOCTYPE HTML>
<html>
    <head>
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
			
	    		
<!........START OF SHOWCASE SECTION................../>
<section id="contact_section">
    
		<div id="container">
          <div class="title">
			   <h2>Contact Us</h2>
			   <a href="index.html">Home</a>
			   <a href="contact.php">Contact</a>
		 </div>	
		  <div class="quick_contact">
		  </div>
		   
</div>
</section>	

<!..............start subscribe section..................../>
	
		 <section id="news_letter">
		   <div id="container">
		   
		 <section id="left_section">  
		       <div class="logo">
		           <img style="width:120px; height:100px "src="images/profile/private.jpg">
			   </div>
			   <div id="seminer">
			    <h2>Next Course : Hacking </h2>
				
				<li>07:00 PM - 09:00 PM</li>
	
			  </div>	
		 </section>	
	
		 
			
				<div class="right_subscrib">
				   <form style="padding-top:51px;" method="POST" action="subscribe.php">
				     <input required type="email" placeholder="Enter Your Gmail" name="username_sub">
					 <input type="submit"value="Subscribe">
				   </form>
				</div>
			
			</div>	
		 </section>
    <!..............End Subscsribe section......................../>
				
<!......................END OF SHOWCASE SECTION............/>

<!......START CONTACT SECTION........................./>
<section id="main-contact">
   <div id="container">
      <div class="map_section">
	  <p class="map_p">Map:</p>
	    <fieldset>
		 <legend>Location</legend>
	        <a href="images/map/location.png"><img src="images/map/map.jpg"></a>
		</fieldset>	
		<p class="mailing">Mailing Adress</p>
		<p class="article"><span class="company">Company Name</span><br>
		JAVA DEVELOPER.LTD<br>
		Bhat Para Sherpur Sadar, Sherpur.</br>Imam Bari Bazar
		Road 20/12D</p>
		<p>Phone:01812084186<br><span>email:&nbsp;&nbsp;&nbsp;<span class="email">somanmia.cse@gamil.com</span></p>
	  </div>
	  <div class="quick_contact">
	  
	     <form method="POST" action="Message_Send.php">
		    <P  class="p">Quick Contact From</p>
			<P>Name:</p><input  maxlength="20" required type="text" name="first_name" title="Enter our Name Max 20 Digit">
			<p>Gmail:</p><input maxlength="40" required type="email" name="gmail" title="Enter our Email Max 40 Digit">
			<p>Subject:</p><input maxlength="40" required type="text" name="subject" title="Enter our Subject Max 40 Digit">
			<p>Message:</p><textarea maxlength="60" class="txt_area" name="txt_area" title="Enter our Message Max 60 Digit"></textarea>
			
			<input type="submit"value="Send" name="ok">
			

		<!...........Database Connection and Check Msq send sucess and not sucess............................./>	
			 <h3>
		 <?php
		    if(isset($_REQUEST["yes"])){
			   echo $_REQUEST["yes"];
			
			}else if(isset($_REQUEST["no"])){
			     echo $_REQUEST["no"];
			}
		 
		  
		 ?>
		</h3>
	<!................Msq Chkeck End......................./>		
		 </form>
		
	  </div>
   </div>
</section>
    
		  
<!....................Start Fotter Section........................../>
        <footer id="footers" style="margin-top:6px;">
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
						    
							   <li ><a href="index.php">Home</a></li>
							   <li><a href="about.php">About</a></li>
							   <li><a href="blog.php">Blog</a></li>
							   <li><a href="contact.php">Contact</a></li>
							   <li><a href="log_out_core.php">Log out</a></li>
							   <li><a href="java.php">Language</a></li>
							
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
							 Open University plans major
                             cuts to number of staffOpen University plans major
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