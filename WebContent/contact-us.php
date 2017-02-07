<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <title>Sapphire Software Solutions</title>
    <meta charset="iso-8859-1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/logo-s.png" type="images/png" sizes="16x16">
    <link href="styles/main.css" rel="stylesheet" type="text/css" media="all">
    <link href="styles/mediaqueries.css" rel="stylesheet" type="text/css" media="all">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
    <script src="scripts/jquery-1.9.1.min.js"></script>
    <script src="scripts/jssor.slider.mini.js"></script>
    <script src="scripts/common.js"></script>
    <script src="scripts/jssor-slider.js"></script>
    <style>
      #map-canvas {
        height: 400px;
      }
    </style>
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <!--[if lt IE 9]>
    <link href="layout/styles/ie/ie8.css" rel="stylesheet" type="text/css" media="all">
    <script src="layout/scripts/ie/css3-mediaqueries.min.js"></script>
    <script src="layout/scripts/ie/html5shiv.min.js"></script>
    <![endif]-->
</head>
<body class="" onload="activateMenu(); initialize();">
    <!-- Header -->
    <div id="headerSec">
    	<div class="wrapper row0">
			<div id="topbar" class="clear"> 
			    <div class="fl_left">
			        <ul class="nospace">
			            <li><span class="icon-phone"></span> 408-641-0980</li>
			            <li><span class="icon-envelope-alt"></span><a href="mailto:info@sapphiresoftwaresolutions.com" class="color-wt">info@sapphiresoftwaresolutions.com</a></li>
			        </ul>
			    </div>
			    <div class="fl_right mob-left">
			        <ul class="faico clear">
			            <li><a class="faicon-facebook" title="Sapphire's Facebook" href="https://www.facebook.com/groups/438186149597607/?ref=br_tf" target="_blank"><i class="icon-facebook"></i></a></li>
			            <li><a class="faicon-twitter" title="Sapphire's Twitter" href="https://twitter.com/Sapphire_CA_Inc" target="_blank"><i class="icon-twitter"></i></a></li>
			            <li><a class="faicon-linkedin" title="Sapphire's Linkedin" href="https://www.linkedin.com/company/2784752?trk=tyah&trkInfo=tarId%3A1418479225582%2Ctas%3Asapphire%20softwa%2Cidx%3A1-2-2" target="_blank"><i class="icon-linkedin"></i></a></li>
			        </ul>
			    </div>
		    </div>
		</div>
		<div class="wrapper row2">
		    <div class="menuIcon">
		        <div class="menu-img"></div>
		        <ul class="clear menu-tog">
		            <li class="active arrow_box"><a href="home.html" title="Home">Home</a></li>
		            <li><a class="drop" href="services.html" title="Services & Solutions">Services & Solutions</a></li>
		            <li><a class="drop" href="careers.html" title="Careers">Careers</a></li>
		            <li><a class="drop" href="about-us.html" title="About Us">About Us</a></li>
		            <li><a class="drop" href="contact-us.html" title="Contact Us">Contact Us</a></li>
		        </ul>
		    </div>
		    <header id="header" class="clear"> 
		        <div id="logo">
		            <h1><a href="home.html"><img src="images/Sapphire-logo.jpg"></a></h1>
		        </div>
		        <div class="fl_right">
		        <nav id="topnav">
		            <ul class="clear">
		                <li id="homeId" ><a href="home.html" title="Home">Home</a></li>
		                <li id="servicesId">
		                    <a class="drop" href="services.html" title="Services & Solutions">Services & Solutions</a>
		                    <ul> 
		                        <li><a href="tech-consulting.html">Technology Consulting</a></li> 
		                        <li><a href="business-solutions.html">Business Solutions</a></li> 
		                        <li><a href="infra-management.html">Infrastructure Management</a></li> 
		                    
		                    </ul> 
		                </li>
		                <li id="careersId">
		                    <a class="drop" href="careers.html" title="Careers">Careers</a>
		                    <ul> 
		                        <li><a href="technology.html">Technology</a></li> 
		                        <li><a href="clients.html">Our Clients</a></li> 
		                        <li><a href="career.html">Opportunities</a></li> 
		                    </ul> 
		                </li>
		                <li id="aboutusId"><a class="drop" href="about-us.html" title="About Us">About Us</a>
		                    <ul> 
		                        <li><a href="vision.html">Vision & Mission</a></li> 
		                        <li><a href="principles.html">Guiding Principles</a></li> 
		                        <li><a href="quality.html">Quality</a></li> 
		                    </ul> 
		                </li>
		                <li id="contactusId"><a class="drop" href="contact-us.html" title="Contact Us">Contact Us</a></li>
		            </ul>
		        </nav>
		        </div>
		    </header>
		</div>
    </div>
    
    <!-- Slider -->
	<div class="row3">
	    <div id="slider_container" style="display: none; position: relative; margin: 0 auto;
        top: 0px; left: 0px; width: 1300px; height: 500px; overflow: hidden;">
            <!-- Slides Container -->
            <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1300px; height: 500px; overflow: hidden;" class="slider-img">
            	<div><img u="image" src2="images/4-4.jpg" title="Business Solutions" /></div>
	            <div><img u="image" src2="images/1-1.jpg" title="Our Services" /></div>
	            <div><img u="image" src2="images/5-5.jpg" title="IT Talent" /></div>
	            <div><img u="image" src2="images/2-2.jpg" title="Our Team" /></div>
	            <div><img u="image" src2="images/3-3.jpg" title="IT Staffing" /></div>
            </div>
            
            <!-- bullet navigator container -->
            <div u="navigator" class="jssorb21" style="position: absolute; bottom: 26px; left: 6px;">
                <div u="prototype" style="POSITION: absolute; WIDTH: 19px; HEIGHT: 19px; text-align:center; line-height:19px; color:White; font-size:12px;"></div>
            </div>
            <!-- Arrow Left -->
            <span u="arrowleft" class="jssora21l" style="width: 55px; height: 55px; top: 123px; left: 8px;"></span>
            <!-- Arrow Right -->
            <span u="arrowright" class="jssora21r" style="width: 55px; height: 55px; top: 123px; right: 8px"></span>
        </div>
	</div>

    <!-- welcome -->
    <div class="row3">
	    <div id="container">
			<div class="one_half first contact-pg" >
				<div class="wsite-elements wsite-not-footer" id="wsite-content">
					<h2>Contact Us</h2>
					<p>Sapphire Software Solutions Inc., welcomes you. We help your
						organization in being more competitive and agile. You can contact
						us to get more information about our professional services and the
						product offerings</p>
					<h3>USA Locations</h3>
					Sapphire Software Solutions Inc.<br>
					11501 Dublin Blvd, Suite 200<br>
					Dublin, CA 94568<br>
					Phone: 408-641-0980<br>
					Fax: 408-490-2794<br>
					Email: <a href="mailto:info@sapphiresoftwaresolutions.com" class="color-wt">info@sapphiresoftwaresolutions.com</a><br><br>
					<h3>India Office</h3>
					Neethus Overseas<br> 
					331 Second Floor<br> 
					Safa Arcade<br>
					Hyderabad - 500016<br> 
				</div>
			</div>
			<div class="one_half contact-map" style="">
				<div id="map-canvas"></div>
				<a
					href="https://www.google.co.in/maps/place/11501+Dublin+Blvd+%23200,+Dublin,+CA+94568,+USA/@37.6991318,-121.9450889,18z/data=!3m1!4b1!4m5!3m4!1s0x808fec6304e88907:0x44eede7940b96348!8m2!3d37.6991318!4d-121.9439946"
					target="_blank" style="color: #0000FF; text-align: left">View on Google Maps</a>
			</div>
		</div>
	
   <!-- Form -->
    <div class="row3">
        <div id="container" style="padding: 10px 0;">
        	<?php
				if(isset($_POST['submit']))
				{
					 $strTo="info@sapphiresoftwaresolutions.com";
					 $strSubject=$_POST['subject'];
					 $message = "\n";
					 $message = '<table width="650" border="0" cellspacing="0" cellpadding="5">
						<tr>
						  <td align="left" valign="top" width="289">Name : </td>
						  <td colspan="3" width="391">'.$_POST['name'].'</td>
						</tr>
						<tr>
						  <td align="left" valign="top" width="289">Email :</td>
						  <td colspan="3" width="391">'.$_POST['email'].'</td>
						</tr>
						<tr>
						  <td align="left" valign="top" width="289">Phone :</td>
						  <td width="391">'.$_POST['phone'].'</td>
						</tr>
						<tr>
						  <td align="left" valign="top" width="289">Subject :</td>
						  <td colspan="3" width="391">'.$_POST['subject'].'</td>
						</tr>
						<tr>
						  <td align="left" valign="top" width="289">Message :</td>
						  <td colspan="3" width="391">'.$_POST['message'].'</td>
						</tr>
					</table>';
						 $headers = "From:".$_REQUEST['name']."\n";
						 $headers .= "MIME-version: 1.0\n";
						 $headers .= "Content-type: text/html; charset= iso-8859-1\n"; 
					 $result = mail($strTo,$strSubject,$message,$headers);
					 if(isset($_SESSION['security_code'])){
						 unset($_SESSION['security_code']);
					 }
					 if ($result){
					 	echo "<h3 style='color:green;'>Thank You for contacting us. We will get in touch with you as soon as possible.</h3>";
					 } else {
					  	echo "<h3 style='color:red;'>Sorry, we are unable to process you request. Please try again!</h3>";
					 }
				}
			?>
    		<div id="formSec" style="text-align:center;"></div>
    	</div>
    </div>
    
    <!-- Footer -->
    <div id="footerSec"></div>
   
</body>
</html>