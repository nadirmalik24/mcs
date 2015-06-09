 <?php
					include "connection.php";
					$message ='';
   if (isset ($_POST['Signup']))
      {
	     $email = $_POST['txtEmail'];
		 $password =  $_POST['txtPassword'];
		 $name = $_POST['txtName'];
		 $cnic = $_POST['txtCNIC'];
		 $gender = $_POST['Gender'];
		 $cell = $_POST['txtCell'];
		 $adress = $_POST['txtAddress'];
		  
		if ( mysql_query("insert into sign_up values ('$email','$password','$name','$cnic','$gender','$cell','$adress')") )
		{
		   $message ='Create Account Success Fully';
		}
		else
		{
		    $message ='Create Account Failed'.mysql_error();
		}
	  }
					
					
					
					
					 ?>

 <!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>The Med-Expert Website Template | Contact :: w3layouts</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Ruluko' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
<div class="wrap">
<div class="header">
		<div class="logo">
		  	 <a href="index.php"><img src="images/logo.png"> </a>
		 </div>
		 <div class="search">
    		<form>
    			<input type="text" value="">
    			<input type="submit" value="">
    		</form>
		</div>
	 <div class="clear"></div>
</div>
<div class="menu">
	 	 <ul class="nav">
        <li><a href="index.php" title="Home">Home</a></li>
  		<li><a href="about.php">About</a></li>
  	    <li><a href="service.php">Services</a></li>
  		<li class="active"><a href="contact.php">Contact</a></li>
        <li><a href="Signup.php">Signup</a></li>
        <li><a href="Login.php">Login</a></li>
  		<div class="clear"></div>
      </ul>
      <div class="social-icons">
		<ul>
		     <li><a class="facebook" href="www.facebook.com/kashif42kkj" target="_blank"> </a></li>
		     <li><a class="twitter" href="#" target="_blank"></a></li>
		     <li><a class="googleplus" href="#" target="_blank"></a></li>
		      
	   </ul>
	 </div>
	  <div class="clear"></div>
	 </div>
<!--main-->
<div class="main">
<div class="content">
<div class="contact">				
								
				<div class="col span_2_of_3">
				  <div class="contact-form">
				  	<h3>SIGN UP</h3>
					      <form method="post" action="Signup.php" name="Signup">
					    	<div>
						    	<span><label>Email</label></span>
						    	<span><input name="txtEmail" type="text" class="textbox"></span>
						    </div>
                            <div>
						    	<span><label>Password</label></span>
						    	<span><input name="txtPassword" type="text" class="textbox"></span>
						    </div>
                            <div>
						    	<span><label>Name</label></span>
						    	<span><input name="txtName" type="text" class="textbox"></span>
						    </div>
                            <div>
						    	<span><label>CNIC</label></span>
						    	<span><input name="txtCNIC" type="text" class="textbox"></span>
						    </div>
						    <div>
						    	<span><label>Gender</label></span>
						    	<span>Male<input class="textbox" type="radio" value="Male"    name="Gender" />
                                Females<input class="textbox" type="radio" value="Female"    name="Gender" />
                                </span>
						    </div>
						    <div>
						     	<span><label>Cell No</label></span>
						    	<span><input name="txtCell" type="text" class="textbox"></span>
						    </div>
						    <div>
						    	<span><label>Address</label></span>
						    	<span><textarea name="txtAddress"> </textarea></span>
						    </div>
						   <div>
						   		<span><input type="submit" value="Sign up" name="Signup"></span>
                                <span><label><?php echo "$message"; ?></label></span>
						  </div>
					    </form>
				    </div>
  				</div>		
  				<div class="clear"></div>			
</div>
</div>	
</div>
<div class="ftr-bg">
		<div class="footer1">
		<div class="copy">
			<p class="w3-link">Design by&nbsp; <a href="http://w3layouts.com/"> W3Layouts</a></p>
		</div>
		<div class="clear"></div>	
	</div>
</div>
</div>
</body>
</html>