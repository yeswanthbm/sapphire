<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>::SAPPHIRE SOFTWARE SOLUTIONS::</title>

<link  href="css/flexdropdown.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery.min_flexi.js"></script>
<script type="text/javascript" src="js/flexdropdown.js"></script>
<SCRIPT LANGUAGE="JavaScript" TYPE="text/javascript">
function CheckRegister() 
{

  if(document.RegForm.name.value=="")
   {
      alert('Enter  Name, please!');
	 // document.getElementById("err_div").innerHTML = "Please Enter your name";
      document.RegForm.name.focus();
	  
      return false;
   }
 
   if(document.RegForm.lstname.value=="")
   {
      alert('Enter  Last Name, please!');
	 // document.getElementById("err_div").innerHTML = "Please Enter your name";
      document.RegForm.lstname.focus();
	  
      return false;
   }
 
 
   if(document.RegForm.phone.value=="")
   {
      alert('Enter  Mobile Number, please!');
	 // document.getElementById("err_div").innerHTML = "Please Enter your name";
      document.RegForm.phone.focus();
	  
      return false;
   }
 
 
 
   if(document.RegForm.name.value=="")
   {
      alert('Enter  Name, please!');
	 // document.getElementById("err_div").innerHTML = "Please Enter your name";
      document.RegForm.name.focus();
	  
      return false;
   }
 if(document.RegForm. zipcode.value=="")
   {
      alert('Enter   zip code, please!');
	 // document.getElementById("err_div").innerHTML = "Please Enter your name";
      document.RegForm.zipcode.focus();
	  
      return false;
   }
 
  
   if(document.RegForm.email.value=="")
   {
      alert('Enter Email Address, please!');
	 // document.getElementById("err_div").innerHTML = "Please Enter your name";
      document.RegForm.email.focus();
	  
      return false;
   }
   
   if(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(document.RegForm.email.value))
   {
     
   }
   else
   {
   //document.getElementById("err_div").innerHTML = "Invalid E-mail Address! Please re-enter.";
   alert("Invalid E-mail Address! Please re-enter.");
   document.RegForm.email.focus();
   
   return false;
   }
   
   if(document.RegForm.message.value=="")
   {
      alert('Enter message, please!');
	 // document.getElementById("err_div").innerHTML = "Please Enter your name";
      document.RegForm.message.focus();
	  
      return false;
   }
   
	 return true;
	}
</script>

<link href="css/style.css" rel="stylesheet" type="text/css" />
<script type="text/JavaScript">
<!--
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>

</head>

<body onload="MM_preloadImages('images/nav/01_hover_03.jpg','images/nav/01_hover_04.jpg','images/nav/01_hover_05.jpg','images/nav/01_hover_06.jpg','images/nav/01_hover_07.jpg')">

 <div id="wrapper">
   <div id="headder">
	<div class="logo"><a href="index.html"><img src="images/logo.jpg" alt="" border="0" /></a></div>
	    <div class="nav">
		  <ul>
				<li>
				  <a href="index.html" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image7','','images/nav/01_hover_03.jpg',1)"><img src="images/nav/01_h_03.jpg" name="Image7" width="113" height="91" border="0" id="Image7" /></a>				</li>
				<li><a href="about_us.html" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image3','','images/nav/01_hover_04.jpg',1)"><img src="images/nav/01_h_04.jpg" name="Image3" width="115" height="91" border="0" id="Image3" data-flexmenu="flexmenu1"  /></a></li>
				
			 <ul id="flexmenu1" class="flexdropdownmenu">
			  
			<li><a href="partners_affiliations.html">Partners & Affiliations</a></li>
        </ul>	 	
				
					<li><a href="service.html" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image4','','images/nav/01_hover_05.jpg',1)"><img src="images/nav/01_h_05.jpg" name="Image4" width="111" height="91" border="0" id="Image4"  data-flexmenu="flexmenu2"  /></a></li>
				 <ul id="flexmenu2" class="flexdropdownmenu">
		<li><a href="professional_staffing.html">Professional Staffing and Temporary Staffing</a></li>	
					<li><a href="rapid_results.html">Rapid Results</a></li>
					<li><a href="flexible_contracts.html">Flexible Contracts</a></li>
					<li><a href="inndustry_specific.html">Industry-Specific Software Solutions</a></li>
        </ul>	
				
				
				
				<li><a href="careers.html" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image5','','images/nav/01_hover_06.jpg',1)"><img src="images/nav/01_h_06.jpg" name="Image5" width="116" height="91" border="0" id="Image5"  /></a></li>
				
					
				
				<li><a href="contact.html" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image6','','images/nav/01_hover_07.jpg',1)"><img src="images/nav/01_h_07.jpg" name="Image6" width="120" height="91" border="0" id="Image6" /></a></li>
		  </ul>	
	 </div>	
  </div>
<div id="banner"><iframe src="banner.html" width="981" height="333" frameborder="0" allowtransparency="" scrolling="no"></iframe></div>
    <div id="maindiv_inner">
       <div class="inner_left">
	     <h1>Quick Links</h1>
	<ul>

  

    
	
		<li  style=" border-top: dashed  1px #6A181C; padding-top:10px;"><a href="service.html">Services</a></li>
					
					<li><a href="careers.html">Careers</a></li>	
					<li><a href="clients.html">Our Clients</a></li>
					<li><a href="partners_affiliations.html">Partners & Affiliations</a></li>					
					<li><a href="why_sapphire.html">Why Sapphire?</a></li>
					<li style="height:40px;"><a href="professional_staffing.html">Professional Staffing and <span style="margin-left:30px;">Temporary Staffing</span></a></li>	
					<li><a href="rapid_results.html">Rapid Results</a></li>
					<li><a href="flexible_contracts.html">Flexible Contracts</a></li>
					<li style="height:40px; border:none;"><a href="inndustry_specific.html">Industry-Specific Software <span style="margin-left:30px;">Solutions</span></a></li>	
					
					
				

   
 
	</ul>
       </div>
      <div class="inner_right">
		    <h1>Contact Us </h1>
	  <table width="680" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="3" align="left" valign="top">  <p><iframe width="675" height="350" style="border: solid 1px #8D949A; " frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=4260+Albany+Dr+%23I-308+San+Jose+CA+95129&amp;sll=12.953997,77.63094&amp;sspn=0.734743,1.352692&amp;ie=UTF8&amp;hq=&amp;hnear=4260+Albany+Dr,+San+Jose,+Santa+Clara,+California+95129,+United+States&amp;t=m&amp;z=14&amp;ll=37.320354,-121.978259&amp;output=embed">
	   
	    </iframe><br /><small><a href="http://maps.google.co.in/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=4260+Albany+Dr+%23I-308+San+Jose+CA+95129&amp;sll=12.953997,77.63094&amp;sspn=0.734743,1.352692&amp;ie=UTF8&amp;hq=&amp;hnear=4260+Albany+Dr,+San+Jose,+Santa+Clara,+California+95129,+United+States&amp;t=m&amp;z=14&amp;ll=37.320354,-121.978259" style="color:#0000FF;text-align:left">View Larger Map</a></small></p></td>
  </tr>
  <tr>
    <td width="276" align="left" valign="top"><h2>Corporate Head Quarters</h2>
      <p><strong>Headquarters</strong></p>
      <p>4260 Albany Dr #I-308<br />
        San Jose CA 95129</p>
      <p><strong>Phone :</strong> 408-641-0980<br />
        <strong>Fax :</strong> 408- 490-2794</p>
      <p><strong>Web: </strong><a href="http://www.sapphiresoftwaresolutions.com"><strong>www.sapphiresoftwaresolutions.com</strong></a></p>          </td>
    <td width="36" align="left" valign="top"><table width="10" height="182" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="10" height="182" class="border_left">&nbsp;</td>
      </tr>
    </table></td>
    <td width="368" align="left" valign="top"><h2>It all starts with a conversation.</h2>
    
      <p>Questions? Concerns? Want to know more? Give us a call or drop us an   email. The only way we&rsquo;ll know if we are a good fit is with an honest   conversation. So let&rsquo;s start there. Get in touch and let&rsquo;s see what we   can do for each other and we&rsquo;ll take it from there. </p>
      <strong>For all inquires related to Jobs, Training mai</strong><strong>l to : </strong><a href="mailto:info@sapphiresoftwaresolutions.com"><strong>info@sapphiresoftwaresolutions.com</strong></a></td>
  </tr>
  <tr>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3" align="left" valign="top"><table width="679" border="0" cellpadding="0" cellspacing="0" bgcolor="#F6F6F6" class="total-border">
                <tr>
                  <td width="52" align="left" valign="top">&nbsp;</td>
                  <td width="625"><form method="post" action="contact.php" name="RegForm" onSubmit="return CheckRegister();">
			<table   width="525" border="0" align="left"  cellpadding="0" cellspacing="0">
  <tr>
    <td height="20" colspan="2" align="left" valign="middle">&nbsp;</td>
    </tr>
	<tr>
    <td height="30" colspan="2" align="left" valign="middle"><?php
			if(isset($_POST['Submit']))
			{
				
					 $strTo="info@sapphiresoftwaresolutions.com";
					 $strSubject=$_POST['message'];
					 $message = "\n";
					 $message = '<table width="650" border="0" cellspacing="0" cellpadding="5">
						<tr>
						  <td align="left" valign="top" width="289">Name: </td>
						  <td colspan="3" width="391">'.$_POST['name'].'</td>
						</tr>
						<tr>
						  <td align="left" valign="top" width="289">Last Name :</td>
						  <td colspan="3" width="391">'.$_POST['lstname'].'</td>
						</tr>
						<tr>
						  <td align="left" valign="top" width="289">Mobile Number:</td>
						  <td width="391">'.$_POST['phone'].'</td>
						</tr>
						<tr>
						  <td align="left" valign="top" width="289">Zip Code :</td>
						  <td colspan="3" width="391">'.$_POST['zipcode'].'</td>
						</tr>
						<tr>
						  <td align="left" valign="top" width="289">Email Address :</td>
						  <td colspan="3" width="391">'.$_POST['email'].'</td>
						</tr>
						<tr>
						  <td align="left" valign="top" width="289">Message :</td>
						  <td colspan="3" width="391">'.$_POST['message'].'</td>
						</tr>
						
</table>';
					 
					
						 $headers .= "From:".$_REQUEST['name'] ."\n";
						 $headers .= "MIME-version: 1.0\n";
						 $headers .= "Content-type: text/html; charset= iso-8859-1\n"; 
					 $result = mail($strTo,$strSubject,$message,$headers);
					 unset($_SESSION['security_code']);
					 if ($result)
					 {
					 echo "<p align='center'  class='contactcmnt'><strong>Thank You for contacting us..We will get in touch with you as soon as possible</strong></p>";
					 }
					 else
					 {
					  echo "<br><br><p align='center' class='violettxt'>sorry .....</p>";
					 
					 }
		
   			
			
		}
	?></td>
    </tr>
  <tr>
    <td width="160" height="30" align="left" valign="middle" >Name:</td>
    <td width="365" height="30" align="left" valign="middle"><input name="name" type="text" class="input" id="name" /></td>
  </tr>
  <tr>
    <td height="30" align="left" valign="middle">Last Name
:</td>
    <td height="30" align="left" valign="middle"><input name="lstname" type="text" class="input" id="lstname" /></td>
  </tr>
  <tr>
    <td height="30" align="left" valign="middle">Mobile Number:</td>
    <td height="30" align="left" valign="middle"><input name="phone" type="text" class="input" id="phone" /></td>
  </tr>
  <tr>
    <td height="30" align="left" valign="middle">Zip Code
:</td>
    <td height="30" align="left" valign="middle"><input name="zipcode" type="text" class="input" id="zipcode" /></td>
  </tr>
  <tr>
    <td height="30" align="left" valign="middle">Email Address
:</td>
    <td height="30" align="left" valign="middle"><input name="email" type="text" class="input" id="email" /></td>
  </tr>
   
    
    <tr>
      <td height="85" align="left" valign="middle">Message</td>
      <td height="85" align="left" valign="top"><textarea name="message" cols="26" rows="5" class="message" id="message"></textarea></td>
    </tr>
	  <tr>
      <td height="20" colspan="2" align="left" valign="top">
        <br /></td>
      </tr>
    <tr>
      <td height="30" align="left" valign="top"> </td>
      <td height="30" align="left" valign="top"><table width="233" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="70" height="25" align="left" valign="top"><input name="reset" type="reset" class="mail" id="reset" value="Reset" /></td>
    <td width="163" align="left" valign="top"><input type="submit" name="Submit" value="Submit" id="Submit" class="mail" /></td>
  </tr>
</table></td>
    </tr>
	<tr>
      <td height="20" align="left" valign="top"> </td>
      <td height="20" align="left" valign="top"></td>
    </tr>
	</table>
			</form></td>
                </tr>
          </table></td>
    </tr>
</table>

		   
		  
      </div>
	   
	   
   </div>
 </div>

 <div id="footer">
   <div id="footer_sub">
     <ul>
	  <li style="margin-right:150px; margin-top:5px;" ><span style="font-size:10px;">COPYRIGHT � 2012.</span> SAPPHIRE. <span style="font-size:10px;">ALL RIGHTS RESERVED</span></li>
	  <li style="padding-top:5px; height:15px; margin-right:10px; color:#FFFFFF;">Follow Us Anywhre :</li>
	  <li style="width:50px;"><img src="images/footer_icon.png"  /></li>
	  <li style="float:right; margin-top:5px; font-size:10px;">DESIGNED BY <a href="http://www.dotlinedesigns.com/" target="_blank">DOTLINE</a></li>
	 
	 </ul>
   </div>  
 </div>  

 
</body>
</html>
