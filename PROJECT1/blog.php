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
		     <li><a href="blog.html">Blog</a></li>
		  </ul>
	   </nav>
	</div>
     
 </section>  
		
<!............Start Blog section...................../>
		<section id="blog_section">
		 <div id="container">
		     <div id="title_page">
			     
			    
			 </div>
			 
		      <aside id="left-sidebar">
			     <aside id="left_sidebar_box" style="margin-top:0px">
			            <img src="images/blog/1.jpg" alt="this is pic">
					  <div class="article">
					    <h2>Parents who try to be their children’s best friends</h2>
						<li style="margin-left:0px;">7 August 2019</li>
						<li>somanmia.cse@gmail.com</li></br>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
							Quisque vel urna eget lectus molestie rhoncus sed in nunc.
							Vestib tincidunt facilisis ligula sed viverra. Duis porttitor 
							sapien maximus, volutpat massa malesuada. Curabitur orci est,
							molestie eget orci, tincidunt dictum felis. Cras ante nunc,
							pharetra eu rutrum aliquet, gestas eget ex. 
							Suspendisse potenti vietlott Quisque asvitae eros efficitur
							lacus viverra molestie at ut mi. Quisque id mollis nibh...<a href="@###">Read More</a>
						</p>	
					  </div>
				   </aside>
				   
				    <aside id="left_sidebar_box">
			           <img src="images/blog/2.jpg" alt="this is pic">
					  <div class="article">
					    <h2>Parents who try to be their children’s best friends</h2>
						<li style="margin-left:0px;">7 August 2019</li>
						<li>somanmia</li><br>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
							Quisque vel urna eget lectus molestie rhoncus sed in nunc.
							Vestib tincidunt facilisis ligula sed viverra. Duis porttitor 
							sapien maximus, volutpat massa malesuada. Curabitur orci est,
							molestie eget orci, tincidunt dictum felis. Cras ante nunc,
							pharetra eu rutrum aliquet, gestas eget ex. 
							Suspendisse potenti vietlott Quisque asvitae eros efficitur
							lacus viverra molestie at ut mi. Quisque id mollis nibh...<a href="@###">Read More</a>
						</p>	
					  </div>
				   </aside>
				   
				    <aside id="left_sidebar_box">
			            <img src="images/blog/3.jpg" alt="this is pic">
					  <div class="article">
					    <h2>Parents who try to be their children’s best friends</h2>
						<li style="margin-left:0px;">7 August 2019</li>
						<li>somanmia</li><br>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
							Quisque vel urna eget lectus molestie rhoncus sed in nunc.
							Vestib tincidunt facilisis ligula sed viverra. Duis porttitor 
							sapien maximus, volutpat massa malesuada. Curabitur orci est,
							molestie eget orci, tincidunt dictum felis. Cras ante nunc,
							pharetra eu rutrum aliquet, gestas eget ex. 
							Suspendisse potenti vietlott Quisque asvitae eros efficitur
							lacus viverra molestie at ut mi. Quisque id mollis nibh...<a href="@###">Read More</a>
						</p>	
					  </div>
				   </aside>
				   
				    <aside id="left_sidebar_box">
			               <img src="images/blog/4.jpg" alt="this is pic">
					  <div class="article"> 
					    <h2>Parents who try to be their children’s best friends</h2>
						<li style="margin-left:0px;">7 August 2019</li>
						<li>somanmia</li><br>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
							Quisque vel urna eget lectus molestie rhoncus sed in nunc.
							Vestib tincidunt facilisis ligula sed viverra. Duis porttitor 
							sapien maximus, volutpat massa malesuada. Curabitur orci est,
							molestie eget orci, tincidunt dictum felis. Cras ante nunc,
							pharetra eu rutrum aliquet, gestas eget ex. 
							Suspendisse potenti vietlott Quisque asvitae eros efficitur
							lacus viverra molestie at ut mi. Quisque id mollis nibh...<a href="@###">Read More</a>
						</p>	
					  </div>
				   </aside>
				   
				   
				   
				   

					<div class="blog_links">
						   <ul>
							 <li style="margin-left:0px;background:#f6783a;"><a  style="color:white" href="index.html">1</a></li>
							 <li><a href="index.html">2</a></li>
							 <li><a href="index.html">3</a></li>
							 <li><a href="index.html">4</a></li>
							 <li><a href="index.html">></a></li>
						   </ul>
					</div>  				
			 </aside>
		<!.............start right blog section........................./>	  
		<aside id="right-sidebar">
         
				<form id="search">
				    <input type="text" placeholder="Searching Post....">
					 <i id="i" class="fa fa-search-minus" aria-hidden="true"></i>
				</form>
				     
				
				
		<!.....My Profile.........start................./>
		   <div id="profile">
		     
		       <img src="images/profile/profile.jpg">
			   <h3>Md: Soman Mia</h3>
			   <p>Java Lover</p>
			 
		   </div>
		   <div class="pro_article">
		     <p>
			     Boot camps have its supporters andit sdetractors.
			     Some people do not understand why you should have
			     to spend money on boot camp when you can get.
			     Boot camps have itssuppor ters andits detractors.
			 </p>
		   </div>
				
				<div id="news_title">
				   <h3>Recent News</h3>
                </div>	
				<!..........first news................../>
				<div id="blog_news" style="margin-top:5px;">
				
				 
							 <img src="images/blog/recent_post/1.jpg">
						<div id="article_blog"> 
							 <p>Snackable study:How to break up your master's degree..<a href="index.html">Read more</a></p>
							 <li>24 March 2019</li>

				        </div>
                </div>	
             <!...............second news............../>
             <div id="blog_news">
				
				 
							 <img src="images/blog/recent_post/2.jpg">
						<div id="article_blog"> 
							 <p>Snackable study:How to break up your master's degree..<a href="index.html">Read more</a></p>
							 <li>24 March 2019</li>

				        </div>
                </div>				
			 <!..............Third news................/>
               <div id="blog_news">
				
				 
							 <img src="images/blog/recent_post/3.jpg">
						<div id="article_blog"> 
							 <p>Snackable study:How to break up your master's degree..<a href="index.html">Read more</a></p>
							 <li>24 March 2019</li>

				        </div>
                </div>				
			  <!...............fourth news...................../>
			  <div id="blog_news">
				
				 
							 <img src="images/blog/recent_post/4.jpg">
						<div id="article_blog"> 
							 <p>Snackable study:How to break up your master's degree..<a href="index.html">Read more</a></p>
							 <li>24 March 2019</li>

				        </div>
                </div>				
			  <!....................five news........................./>
			  <div id="blog_news">
				
				 
							 <img src="images/blog/recent_post/5.jpg">
						<div id="article_blog"> 
							 <p>Snackable study:How to break up your master's degree..<a href="index.html">Read more</a></p>
							 <li>24 March 2019</li>

				        </div>
                </div>	 
			 <!................six news.........................../>
               <div id="blog_news">
				
				 
							 <img src="images/blog/recent_post/6.jpg">
						<div id="article_blog"> 
							 <p>Snackable study:How to break up your master's degree..<a href="index.html">Read more</a></p>
							 <li>24 March 2019</li>

				        </div>
                </div>				
			  <!..............seven news................./>
          <div id="blog_news">
				
				 
							 <img src="images/blog/recent_post/7.jpg">
						<div id="article_blog"> 
							 <p>Snackable study:How to break up your master's degreey..<a href="index.html">Read more</a></p>
							 <li>24 March 2019</li>

				        </div>
                </div>				
			 <!.............End all recent news.................../>
    
			 
			<!................Start Tags Section.........................../>
     <section id="tags_section">
	   <h4>Tags</h4>
	       <div class="tags">
				  <a href="##">development</a>
				  <a href="##">Business</a>
				  
				  <a href="##">projects</a>
				  <a href="##">Google Adwards</a>
				   <a href="##">sql database</a>
				  <a href="##">design</a>
				 
				  
				  
		  
	     </div>
    </section>
<!........End of Tags....................../>
	
	<!.............STARAT CALEGORIES.............................../>
	<section id="Categories">
	      <h4> Post Categories</h4>
		<div class="box_post">
		    
			  <li><a href="##"><span>Business</span><span style="float:right">20</span></a></li>
		
		</div>
		
		<div class="box_post">
		    
			  <li><a href="##"><span>Design</span><span style="float:right"> 15</span></a></li>
		
		</div>
		
		<div class="box_post">
		    
			  <li><a href="##"><span>Management</span><span style="float:right"> 1</span></a></li>
		
		</div>
		
		<div class="box_post">
		    
			  <li><a href="##"><span>Program development</span><span style="float:right">2</span></a></li>
		
		</div>
		
		<div class="box_post">
		    
			  <li><a href="##"><span>My SQL database</span><span style="float:right"> 5</span></a></li>
		
		</div>
		<div class="box_post">
		    
			  <li><a href="##"><span>Google Adwords</span><span style="float:right"> 10</span></a></li>
		
		</div>
		
	               
	</section>
			  
			  
			  
			  
  </aside>
			
		 </div>
		</section>
	<!..............start subscribe section..................../>
	
		 <section id="news_letter" style="margin-top:118px;">
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