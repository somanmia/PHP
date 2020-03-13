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
          <link rel="stylesheet" href="css/flexboxgrid.min.css">
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


		<section id="showcase"> <!----START SHOWCASE AND SLIDER SECTION----->

		 </section>   <!-----END OF SHOWCASE AND SLIDER SECTION---->


<!---START SUBSCRIBE SECTION------>
		 <section id="news_letter">
				   <div id="container">

										 <div id="left_section">  <!---LOGO SECTION---->
												   <div class="logo">
													   <img style="width:120px; height:100px "src="images/profile/private.jpg">
												   </div>
												   <div id="seminer">
													<h2>Next Course : Hacking </h2>

													<li>07:00 PM - 09:00 PM</li>

												  </div>
										 </div>	<!---END LOGO SECTION---->
									<div class="right_subscrib">
									   <form style="padding-top:51px;" method="POST" action="subscribe.php">
										 <input required type="email" placeholder="Enter Your Gmail" name="username_sub">
										 <input type="submit"value="Subscribe">
									   </form>
									</div>

					</div>
		 </section>
<!---Fetures---->
<section id="fetures">
   <div id="container">
       <div class="row center-xs center-sm center-md center-lg">
          <div class="col-xs-12 col-sm-12 col-md-12 col-12">
              <h1>Core Feutres </h1>
              <p>What's Incloude</p>

          </div>
      </div>
      <!---fetures items--->
      <div class="row center-xs center-sm center-md center-lg">
         <div class="col-xs-12 col-sm-4 col-md-4  col-lg-4">
       <i class="fa fa-dashboard"></i>
          <h4>Fully Optimize</h4>
        <p>Lerem ispam idorlar is land of Bangldesh.We cannot study beacuse of
         our country</p>

      </div>
           <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
          <i class="fa fa-question-circle-o"></i>
          <h4>Free Support</h4>
        <p>Lerem ispam idorlar is land of Bangldesh.We cannot study beacuse of
         of our country</p>

      </div>
           <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
          <i class="fa fa-rocket"></i>
          <h4>Free Upgrade</h4>
        <p>Lerem ispam idorlar is land of Bangldesh.We cannot study beacuse of
         of our country</p>

      </div>

      <!---Row -2--->
       <div class="row center-xs center-sm center-md center-lg">
         <div class="col-xs-12 col-sm-4 col-md-4  col-lg-4">
        <i class="fa fa-line-chart"></i>
          <h4>Fully Optimize</h4>
        <p>Lerem ispam idorlar is land of Bangldesh.We cannot study beacuse of
         our country</p>

      </div>
           <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
          <i class="fa fa-users"></i>
          <h4>Free Support</h4>
        <p>Lerem ispam idorlar is land of Bangldesh.We cannot study beacuse of
         of our country</p>

      </div>
           <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
          <i class="fa fa-plug"></i>
          <h4>Free Upgrade</h4>
        <p>Lerem ispam idorlar is land of Bangldesh.We cannot study beacuse of
         of our country</p>

      </div>

</div>
 </div>
</section>


	<!---Member List--->
             <section id="description">
			   <div id="container">
			        <div class="des_box" style="padding-left:0px">
					<img src="images/dec-images/java.png">
				       <div class="box-dec">
					        <h2>10</h2>
					       <p>Java Developer</p>
					   </div>
				   </div>

				    <div class="des_box">
					<img src="images/dec-images/html.png">
				       <div class="box-dec">
					        <h2>14</h2>
					       <p>Html&& Css</p>
					   </div>
				   </div>

				    <div class="des_box">
					<img src="images/dec-images/member.png">
				       <div class="box-dec">
					        <h2>4</h2>
					       <p>Web Designer</p>
					   </div>
				   </div>


			   </div>

             </section>
	<!........................ End.......buniness all member list............................./>
	<!.......................Last news............................../>
     <section id="last_news">
	    <div id="container">
		    <div class="news_letter">
			    <h2>LATEST NEWS</h2>
				<p>Get latest breaking news & top stories today</p>
				<hr></hr>
			</div>
			<div style="margin-left:0px"class="boxs">
			    <img src="images/recent_post/1.jpg" alt="Link is wrong!">
				 <div class="box">
				    <h4>Enjoy your Life and Strong your Future</h4>


					         <li  style="margin-left:0px;"><i style="color:#f6783a;padding-right:4px;font-size:18px" class="fa fa-calendar-o" aria-hidden="true"></i> 5 January 2018</li>
							  <li><i style="color:#f6783a;padding-right:4px;font-size:18px" class="fa fa-map-marker" aria-hidden="true"></i>Owen Spring</li><br>


					<p>
                         Integer luctus diam ac scerisque
						 consectetur. Vimus dot euismod neganeco
						 lacus sit amet.
						 Aenean interdus mid vitae sed accumsan...
						 <a href="index.html">Read More</a>
				</p>

                    </div>
			</div>

			<div class="boxs" style="float:right">
			    <img src="images/recent_post/2.jpg">
				 <div class="box">
				    <h4>Why?At this Moment, Python is very Popular Language??</h4>


					         <li  style="margin-left:0px;"><i style="color:#f6783a;padding-right:4px;font-size:18px" class="fa fa-calendar-o" aria-hidden="true"></i> 5 January 2018</li>
							  <li><i style="color:#f6783a;padding-right:4px;font-size:18px" class="fa fa-map-marker" aria-hidden="true"></i>Owen Spring</li><br>



					<p>
                         Integer luctus diam ac scerisque
						 consectetur. Vimus dot euismod neganeco
						 lacus sit amet.
						 Aenean interdus mid vitae sed accumsan...
						 <a href="index.html">Read More</a>
				</p>

                    </div>
			</div>

			<div style="margin-left:0px;"class="boxs">
			    <img src="images/recent_post/3.jpg">
				 <div class="box">
				    <h4>Jdk 12 is Updating..........</h4>


					         <li  style="margin-left:0px;"><i style="color:#f6783a;padding-right:4px;font-size:18px" class="fa fa-calendar-o" aria-hidden="true"></i> 5 January 2018</li>
							  <li><i style="color:#f6783a;padding-right:4px;font-size:18px" class="fa fa-map-marker" aria-hidden="true"></i>Owen Spring</li><br>


					<p>
                         Integer luctus diam ac scerisque
						 consectetur. Vimus dot euismod neganeco
						 lacus sit amet.
						 Aenean interdus mid vitae sed accumsan...
						 <a href="index.html">Read More</a>
				</p>

                    </div>
			</div>

			<div class="boxs"style="float:right">
			    <img src="images/recent_post/4.jpg">
				 <div class="box">
				    <h4>Why?The say Spring is Mother of Framework?????</h4>

					         <li  style="margin-left:0px;"><i style="color:#f6783a;padding-right:4px;font-size:18px" class="fa fa-calendar-o" aria-hidden="true"></i> 5 January 2018</li>
							  <li><i style="color:#f6783a;padding-right:4px;font-size:18px" class="fa fa-map-marker" aria-hidden="true"></i>Owen Spring</li><br>



				<p>
                         Integer luctus diam ac scerisque
						 consectetur. Vimus dot euismod neganeco
						 lacus sit amet.
						 Aenean interdus mid vitae sed accumsan...
						 <a href="index.html">Read More</a>
				</p>

                    </div>
			</div>


		</div>
	 </section>

<!....................Start Fotter Section........................../>
        <footer id="footers">
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
                               <li><a href="log_out_core.php">Log out</a></li>
							   <li><a href="private.php">Private</a></li>
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
							  <li> <i style="padding-right:4px;color:rgb(246, 120, 58)" class="fa fa-map-marker" aria-hidden="true"></i>40 Baria Street 133/2, Sherpur City,BD</li>
						   </p>
						    <p>
							  <li><i  style="padding-right:4px;color:rgb(246, 120, 58)" class="fa fa-phone" aria-hidden="true"></i>(+088) 1812084186</li>
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
