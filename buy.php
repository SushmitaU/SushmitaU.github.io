<?php
session_start();
?>
<!DOCTYPE html >
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MobiStore</title>

<link href="mobistore_style.css" rel="stylesheet" type="text/css" />
</head>


<script type="text/JavaScript">
 

function validate()
{  
{
   var fontcaseOnly = /^[A-Za-z]+$/;
   if( document.myForm.fname.value == "") 
   {
     alert( "Please provide your  first name!" );
     document.myForm.fname.focus() ;
     return false;
   }
   if(!((fontcaseOnly.test(document.myForm.fname.value)))){
   alert( "Please provide correct first name!" );
     document.myForm.fname.focus() ;
     return false;
   }
   }
{
 var fontcaseOnly = /^[A-Za-z]+$/;
 if( document.myForm.lname.value == "" )
   {
     alert( "Please provide your  last name!" );
     document.myForm.lname.focus() ;
     return false;
   }
   if(!((fontcaseOnly.test(document.myForm.lname.value)))){
   alert( "Please provide correct last name!" );
     document.myForm.lname.focus() ;
     return false;
   }
}
if( document.myForm.address.value == "" )
   {
     alert( "Please provide your  Address!" );
     document.myForm.address.focus() ;
     return false;
   }
   


{
   var pi = document.forms["myForm"]["pin"].value;
   if( document.myForm.pin.value == "")   {
     alert( "Please Enter a proper Pin Number!" );
     document.myForm.pin.focus() ;
     return false;
   }
   if((!((pi.length) == 6)) || (isNaN(pi)))   {
     alert( "Please Enter a proper Pin Number!" );
     document.myForm.pin.focus() ;
     return false;
   }
}
{
   var y = document.forms["myForm"]["phone"].value;
   if( document.myForm.phone.value == "")   {
     alert( "Please Enter a proper Mobile Number!" );
     document.myForm.phone.focus() ;
     return false;
   }
   if((!((y.length) == 10)) || (isNaN(y)))   {
     alert( "Please Enter a proper Mobile Number!" );
     document.myForm.phone.focus() ;
     return false;
   }
}
 {
    var x = document.forms["myForm"]["email"].value;
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos< 1 || dotpos<atpos+2 || dotpos+2>=x.length) {
        alert("Not a valid e-mail address");
		document.myForm.email.focus();
        return false;
    }
}


}
</script>

<body>
<div id="mobistore_container_wrapper">
<div id="mobistore_container">
	
    <div id="mobistore_header">
		<div id="mobistore_site_title">Mobi<span>Store</span></div>
		<div id="mobistore_site_slogan">Ultimate Destination for mobile shopping!</div>
	</div>

	<div class="mobistore_menu">
        <ul>
			<li><a href="index.html"  >Home</a></li>
			<li><a href="latestmodels.html">Latest Models</a></li>
			<li><a href="exploremore.html">Explore More</a></li>
			<li><a href="aboutus.html">About Us</a></li>
			<li><a href="contactus.html">Contact Us</a></li>
			
			
            
        </ul>    	
    </div>
    

    <div id="mobistore_content">

		<div id="mobistore_top">
        
	       <center> <div class="title">Explore & buy your dream phone!</div>
     <marquee><p class="small" <b>* Massive Selection   *    Best Prices   *   Free Shipping   *   Easy Returns   * <b></marquee> </center>  
 
<br /><br />



<div class="SpecsTable" >
               <form  name="myForm" onsubmit="return (validate());" action="order.php" method="post" >
                <table >
                    <tr>
                       <td colspan="2">
	<center>
	
<?php

// Echo session variables that were set on previous page
echo "The product you have selected is " . $_SESSION["handset"] . ".<br>";
echo "The amount you have to pay on delivery is Rs. " . $_SESSION["price"] . ".";
?>
<br/>Fill up your details</center>
	</td>
                       
                    </tr>
	<tr>
	<td align="right">First Name  </td>
	<td><input type="text" name="fname" id="fname" style="background-color:#1e1f19; color: #999966;" size="65"></td>
	</tr>
                    <tr>
                        <td >
                            Last Name
                        </td>
                        <td>
                            <input type="text" name="lname" id="lname" style="background-color:#1e1f19;color: #999966;" size="65">
                        </td>
                        
                    </tr>
                    
                    <tr>
                        <td >
                           Address
                        </td>
                        <td>
                           <input type="text" name="address" id="address" style="background-color:#1e1f19;color: #999966;" size="65" align="right">
                        </td>
                        
                    </tr>
  	<tr>
                        <td >
                           Pin
                        </td>
                        <td>
                           <input type="text" name="pin" id="pin" style="background-color:#1e1f19;color: #999966;" size="65" >
                        </td>
                        
                    </tr>
                    <tr>
                        <td >
                            Mobile Number
                        </td>
                        <td>
                            <input type="text"  name="phone" id="phone" style="background-color:#1e1f19;color: #999966;" size="65">
                        </td>
                        
                    </tr>
	 <tr>
                        <td >
                            E-Mail
                        </td>
                        <td>
                            <input type="text" name="email" id="email" style="background-color:#1e1f19;color: #999966;font- size: 6" size="65">
	       </td>
                        
                    </tr>
	<tr>
	<td colspan="2"><br><br><center> <button style="background-color:##1a1f19" font: bold 20px Arial;name="buy" type="submit" value="buy">BUY!</button></center></td>
                       
                    </tr>
                </table>
               </form>	
            </div>
            <br><br><br>
         

 <br>
        </div>
        
        <div id="mobistore_bottom">
        
        	<div class="section">
               	<div class="subtitle">Special Thanks</div>    
				<a href="#">SpeedPost</a><br />
                    <a href="#">PhoneCare</a><br />
                    <a href="#">GadgetsGuru</a><br />
                                </div>
            <div class="middle" align="justify">
               	<div class="subtitle">News</div>    
                <div class="publish_date">Date: 21-10-2014</div>
				Moto 360 launched! Read about its specs, features and....<br />  
				<a href="https://moto360.motorola.com">Read More</a></div> 
            <div class="middlerightborder"></div>
            <div class="section" align="justify">
               	<div class="subtitle">Quick Contact</div>    
		    Tel: 022-27461235<br />
Fax: 001-001-0011<br />
Email: mobistore@gmail.com<br />

            </div> 

        </div>
	</div>
    
   	<div id="mobistore_footer">
		<a href="index.html">Home</a> | <a href="aboutus.html">About Us</a> |  <a href="contactus.html">Contact Us</a><br />
        Copyright  2007 <a href="home.html">MobiStore</a></div>
</div>
</div>

<div align=center><font color=#cccc44>Thank you! Visit Again!</div></font>
</body>
</html>   
