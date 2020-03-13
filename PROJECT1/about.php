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
	<section id="contact_section" style="background: url('images/showcase/animate/5.jpg'); backgrkound-position:center; background-repeat:no-repeat;background-size:cover">
    
		<div id="container">
          <div class="title">
			   <h2>About Me</h2>
			   <a href="index.html">Home</a>
			   <a href="contact.html">Contact</a>
		 </div>	
		  <div class="quick_contact">
		  </div>
		   
       </div>
</section>	
<!.........END OF PAGE TITLE SECTION............../>

<!........START  ABOUT SECTION............./>
 <section id="aritcle_about">
   <div id="container">
       <div class="title_about">
	      <h2>WELCOME TO EZUCA</h2>
		       <p>

              Let children creative and make a different
			  </p>
              
	   </div>
	   <div class="left_about">
	    <div class="about_us">
	        <h4>About Us</h4>
			   <p>
						  Lorem ipsum dolor sitdoni amet, consectetur dont adipis elite.
						  Vivamus interdum ultrices augue.
						  Aenean dos cursus lania. Duis et fringilla leonardo. 
						  Mauris mattis phare sem, debut curus risus viverra sed.
			   
			   </p>
		</div>	
      <section class="our_history">
	      <h3>Our History</h3>
		  <p>
		     Led at felis arcu. Integer lorem lorem, tincidunt eu congue et, mattis ut ante.
			 Nami suscipit, lectus id efficitur ornare, leo libero convalis nulla, vitae dignissim 
		  </p>
		  <ul>
		    <li style="list-style-image: url('images/social/location.png')">Every Developer Should be an Honest.</li>
		    <li style="list-style-image: url('images/social/phone.png')">Phone:01812084186</li>
		    <li style="list-style-image: url('images/social/location.png')">Email:somanmia.cse@gmail.com</li>
		    
		  </ul>
	  </section>
		
	   </div>
	   <div class="right_about">
	     <section class="image">
	      <img src="images/about/about.jpg"alt="this is About image">
		  </section>
		  
	   </div>
	   
   </div>

 </section>
 
 
<!.......END OF ABOUT SECTION.........../>
<section class="temmber_title">
  <div id="container">
     <h2>Team Members</h2>
	 <p>
		 The professional standards and expectations
	</p>
  </div>
</section>
<!.......about section all member.............../>
   <section class="members">
     <div id="container">
	 <div class="main_section_team">
	     <div class=" main_team">
	        <div class="team_members">
			     <div class="member_pic">
				       <img src="images/about/member/1.jpg"></img>
					   
				 </div>
				 <ul class="socails_icon">
				     <li><a href="###"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
				     <li><a href="###"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				     <li><a href="###"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
				 
				 
				 </ul>
				
			</div>
			<span class="sp-name">Md: Soman Mia</span>
			<span class="sp-occuption">Java Developer</span>
         </div> 
		 
		 <div class=" main_team">
	        <div class="team_members">
			     <div class="member_pic">
				       <img src="images/about/member/1.jpg"></img>
					   
				 </div>
				 <ul class="socails_icon">
				     <li><a href="###"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
				     <li><a href="###"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				     <li><a href="###"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
				 
				 
				 </ul>
				
			</div>
			<span class="sp-name">Md: Soman Mia</span>
			<span class="sp-occuption">Java Developer</span>
         </div> 
		 
		 <div class=" main_team">
	        <div class="team_members">
			     <div class="member_pic">
				       <img src="images/about/member/1.jpg"></img>
					   
				 </div>
				 <ul class="socails_icon">
				     <li><a href="###"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
				     <li><a href="###"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				     <li><a href="###"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
				 
				 
				 </ul>
				
			</div>
			<span class="sp-name">Md: Soman Mia</span>
			<span class="sp-occuption">Java Developer</span>
         </div> 
	</div>
	 </div>
   </section>
 
<!..........about section all member end........../>	
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