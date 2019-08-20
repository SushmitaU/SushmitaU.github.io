<?php 
session_start();
?>
<!DOCTYPE html >
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MobiStore</title>

<link href="mobistore_style.css" rel="stylesheet" type="text/css" />
</head>

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
        
	       <center> <div class="title">MobiStore </div>
     
<br /><br />


    <div id="mobistore_content">

<?php
$con=mysqli_connect("localhost","root","","sna");

// Check connection
if (mysqli_connect_errno()) 
{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// escape variables for security
$fname = mysqli_real_escape_string($con, $_POST['fname']);
$lname = mysqli_real_escape_string($con, $_POST['lname']);
$address = mysqli_real_escape_string($con, $_POST['address']);
$pin = mysqli_real_escape_string($con, $_POST['pin']);
$phone = mysqli_real_escape_string($con, $_POST['phone']);
$email= mysqli_real_escape_string($con, $_POST['email']);
$model = $_SESSION["model"];  	


$sqlQuery1 = "INSERT INTO customer (fname, lname, address, pin, phone, email) VALUES ('$fname', '$lname','$address', '$pin', '$phone', '$email' )";
$res1 = mysqli_query($con, "SELECT * FROM products WHERE model=\"$model\" ");
if (!$res1) 
	{
		die('Error: ' . mysqli_error($con));
	}
else
{
	while($row1=mysqli_fetch_assoc($res1))
	{
		$stock=$row1['stock'];
		$sqlQuery2 = mysqli_query($con, "UPDATE products SET stock = stock-1 WHERE model=\"$model\" ");

		if($stock<=0)
		{
			echo "<p class=\"big\">Sorry, the item you have chosen is out of stock.</p>";
		}
		else
		{
			if (!mysqli_query($con,$sqlQuery1)) 
			{
				die('Error: ' . mysqli_error($con));
			}
	
			else  
			{
				echo "<p class=\"big\">Dear {$fname} {$lname},</p>";				
				echo "<p class=\"big\">Your order for " . $_SESSION["handset"] . " has been placed.";
				echo "<p class=\"big\">The amount you have to pay on delivery is Rs. " . $_SESSION["price"] . ".";
				
    			 }
	 	}
       	}
}
?>
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

