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
			   <h2>Android Apps Development</h2>
			   <a href="index.php">Home</a>
			   <a href="contact.php">Contact</a>
		 </div>	
		  <div class="quick_contact">
		  </div>
		   
       </div>
</section>	
<!.........END OF PAGE TITLE SECTION............../>

<!..........START JAVA ARITCLE SECTION....................../>
             <section id="java_article">
			      <div id="container">
				     <div class="java_title">
					    <h2>Learning Apps Development</h2>
						<p>Android Apps</p>
					 </div>
		<!.........Start java core........./>
		
		<section id="main_java_left">
					 <div class="left_java">
					    <h2>Android Learning ..... </h2>
						<p>  Lorem ipsum dolor sitdoni amet, consectetur dont adipis elite.
							  Vivamus interdum ultrices augue.
							  Aenean dos cursus lania. Duis et fringilla leonardo. 
							  Mauris mattis phare sem, debut curus risus viverra sed.
							  Lorem ipsum dolor sitdoni amet, consectetur dont adipis elite.
							  Vivamus interdum ultrices augue.
							  Aenean dos cursus lania. Duis et fringilla leonardo. 
							  Mauris mattis phare sem, debut curus risus viverra sed. &nbsp;&nbsp;<a href="##">Read more </a>
					    </p>
						<div class="video">
						
						
						       <iframe width="200px" height="200px" src="https://www.youtube.com/embed/hf4k4OWlBfI" frameborder="0" allow="accelerometer; autoplay; encrypted-media;
							     gyroscope; picture-in-picture" allowfullscreen>
							   </iframe>
							   
							   
						</div>
          					   
					 </div>
			<!.......End core java......./>
             <!.....start java swing.............../>
			     <div class="left_java">
					    <h2>Android Basic.. </h2>
						<p>  Lorem ipsum dolor sitdoni amet, consectetur dont adipis elite.
							  Vivamus interdum ultrices augue.
							  Aenean dos cursus lania. Duis et fringilla leonardo. 
							  Mauris mattis phare sem, debut curus risus viverra sed.
					    </p>
						<div class="video">
						          <iframe width="560" height="315" src="https://www.youtube.com/embed/28P_QSR-ouQ" frameborder="0" allow="accelerometer;
								       autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
								  </iframe>
							   
						</div>
				<ul>
				  <li style="margin-left:0px;background:#F6783A;"><a href="index.html">1</a></li>
				  <li><a href="index.html">1</a></li>
				  <li><a href="index.html">2</a></li>
				  <li><a href="index.html">></a></li>
                 </ul>				
          					   
				 </div>
		</section>		 
           <!......end of java swing............./>		
       <!..........START RIGHT SECTION.................../>
	       <div id="java_right_section">
		        <div class="profil_java">
				     <img src="images/profile/profile.jpg">
					 <h4>Website Designer</h4>
					 <p>I am a Student of Sherpur Polytechnic ,Computer Technology,I like Java Programming Language,I have already 
					  finished Core java,Java Swing,Html5,Css3,MySql,Jquery Running etc.</p>
				</div>
				<div class="java_develop">
				    <h3>Java Project</h3>
					<a href="https://www.youtube.com/watch?v=c3vDHqBLk3A&list=PLFDH5bKmoNqzp6t0DWdgKzSgLjnLnBKU4">PROJECT_1</a>
					<a href="https://www.youtube.com/watch?v=gp-rmc78YCo&list=PLB04B4E5D9B58C13D">PROJECT_2</a>
					<a href="https://www.youtube.com/watch?v=4SzG7wOkP98&list=PLErD1cRL87W-NzXGuV1tAGO8kf2zrqU0k">PROJECT_3</a>
					<a href="https://www.youtube.com/watch?v=28P_QSR-ouQ&list=PLgH5QX0i9K3rAHKr6IteF5kdgN6BorH9l">ADVANCED PROJECT</a>
				</div>
			 <div class="top_website">
			    <h3>Top 4 Website for <span style="color:#f37537">Apps </span></h3>
				<ol>
				 <li> <a href="https://www.javatpoint.com/java-tutorial">JAVA TPOINT</a></li>
			 	<li><a href="https://www.tutorialspoint.com/computer_programming_tutorials.htm">TUTRIALSPOINT</a></li>
				<li><a href="http://www.java2s.com/Tutorial/Java/CatalogJava.htm">JAVA2'S</a></li>
				<li><a href="https://www.w3schools.com/java/default.asp">W3SCHOOLS</a></li>
				</ol>
             </div>	
         <div class="coding_pratcise">
		  <h3>Top 5 <span style="color:red">Coding</span> Pratcise</h3>
		     <ol>
				 <li> <a href="https://www.hackerrank.com/domains/java?filters%5Bstatus%5D%5B%5D=unsolved">Heakerrank</a></li>
			 	<li><a href="https://onlinejudge.org/">UVa</a></li>
				<li><a href="https://www.urionlinejudge.com.br/judge/en/login">URI</a></li>
				
				</ol>
        </div>		 
		   </div>
    <!...............END OF RIGHT SECTION................../>	   
					 
	 </div>  <!........End of container........../>
	</section>

<!..............END OF JAVA ARTICLE SECTION..................../>

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
							   <li><a href="java.php">Java</a></li>
							   <li><a href="python.php">Python</a></li>
							
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