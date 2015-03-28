function CheckRegister3() 
{

  if(document.FormReg.fname.value=="")
   {
      alert('Enter First Name, please!');
	 // document.getElementById("err_div").innerHTML = "Please Enter your name";
      document.FormReg.fname.focus();
	  
      return false;
   }
   if(document.FormReg.lname.value=="")
   {
      alert('Enter Last Name, please!');
	 // document.getElementById("err_div").innerHTML = "Please Enter your name";
      document.FormReg.lname.focus();
	  
      return false;
   }
  
   if(document.FormReg.email.value=="")
   {
      //window.alert('Enter your username, please!');
	  alert('Email Id, please!');
      document.FormReg.email.focus();
	  
      return false;
   }

   if(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(document.FormReg.email.value))
   {
     
   }
   else
   {
   //document.getElementById("err_div").innerHTML = "Invalid E-mail Address! Please re-enter.";
   alert("Invalid E-mail Address! Please re-enter.");
   document.FormReg.email.focus();
   
   return false;
   }
   if(document.FormReg.contact.value=="")
   {
      alert('Enter Contact Number  , please!');
	 // document.getElementById("err_div").innerHTML = "Please Enter your name";
      document.FormReg.contact.focus();
	  
      return false;
   }
   if(document.FormReg.company.value=="")
   {
      alert('Enter Company, please!');
	 // document.getElementById("err_div").innerHTML = "Please Enter your name";
      document.FormReg.company.focus();
	  
      return false;
   }
   
  
   
   
   


	 return true;


}