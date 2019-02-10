<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
	
	<title>Odette's Hair Salon :: Contact Me</title> 
	<link href="odette.css" rel="stylesheet" type="text/css" />
	<meta charset="UTF-8" />
	
	<link href="https://fonts.googleapis.com/css?family=Monsieur+La+Doulaise" rel="stylesheet" />
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Odette's Hair Salon is the premier salon in Naperville. We do cuts, styling, color, and perms for both women and men. We work with you to bring out your natural beauty for yourself with consideration to your work and lifestyle." />
	<style type="text/css"></style>
	<link rel="icon" href="xfavicon.ico" type="image/x-icon" />
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js">
	</script>
	<![endif]-->

</head>

<body>
	<div id="wrapper">
	<?php
            if($_SERVER["REQUEST_METHOD"] == "POST")
            {
				require_once "Mail.php"; 
			
				$from = "Nancy Mikyska <nmikyskaphpclass@gmail.com>"; 
				$email = filter_input(INPUT_POST, "email"); 
				$subject = "Contact me, please"; 
				$name = filter_input(INPUT_POST, "name"); 
				$phone = filter_input(INPUT_POST, "phone"); 
				$email = filter_input(INPUT_POST, "email"); 
				$comments = filter_input(INPUT_POST, "comments"); 
				$cut = filter_input(INPUT_POST, "cut"); 
				$color = filter_input(INPUT_POST, "color"); 
				$perm = filter_input(INPUT_POST, "perm"); 
				$style = filter_input(INPUT_POST, "style"); 
				$wax = filter_input(INPUT_POST, "wax"); 
				$keritan = filter_input(INPUT_POST, "keritan"); 
				$myAd = filter_input(INPUT_POST, "myAd"); 
				
				$body = "\nYour name is: " . $name  . "\n"; 
				$body .= "\nYour phone # is: " .$phone . "\n"; 
				$body .= "\nYour email is: " .$email . "\n\n"; 
            
				if(filter_input(INPUT_POST, "cut") === "y") 
						$body .= "You want more information about cuts.\n";
					else
						$body .= "You don't want information about cuts.\n";
					
					if(filter_input(INPUT_POST, "color") === "y")
						$body .= "You want more information about color.\n";
					else
						$body .= "You don't want information about color.\n";
					
					if(filter_input(INPUT_POST, "perm") === "y")
						$body .= "You want more information about perms.\n";
					else
						$body .= "You don't want information about perms.\n";
					
					if(filter_input(INPUT_POST, "style") === "y")
						$body .= "You want more information about styling.\n";
					else
						$body .= "You don't want information about styling.\n";
						
					if(filter_input(INPUT_POST, "wax") === "y")
						$body .= "You want more information about waxing.\n";
					else
						$body .= "You don't want information about waxing.\n";
						
					if(filter_input(INPUT_POST, "keritan") === "y")
						$body .= "You want more information about Keritan treatments.\n";
					else
						$body .= "You don't want information about Keritan treatments.\n";
				
				$body .= "\nYou found me via: " . $myAd . "\n"; 
				
				$body .= "\nYour comments are: \n" .$comments . "\n"; 
            
            
            
				$host = "smtp.gmail.com"; 
				$port = "587"; 
				$username = "nmikyskaphpclass@gmail.com"; 
				$password = "Palehorse1140#"; 

            
				$headers = array ('From' => $from,
				  'To' => $email,
				  'Subject' => $subject);
				  
				
				$smtp = Mail::factory('smtp',
				  array ('host' => $host,
					'port' => $port,
					'auth' => true,
					'username' => $username,
					'password' => $password
					));


				$mail = $smtp->send($email, $headers, $body); 

            
				if (PEAR::isError($mail))
				  echo("<p>" . $mail->getMessage() . "</p>"); 
				else
				  echo("<p>We just sent you an email with your information!</p>"); 
				}
				else 
				{
				?>
	
	
		<div id="header">
			<a href="index.html"><img id="logo" src="images/logo.png" width="188" height="191" alt="Odette's Hair Salon Home" /></a>
			<div id="title">
			<h1>Odette's Hair Salon</h1>
			
			<div id="address">2035 S. Washington St.<br />
			Suite 171-8A<br />
			Naperville, IL. 60565<br />
			<span id="desktop">Phone (555) 555-5555</span><a id="mobile" href="tel:(555) 555-5555">Phone (555) 555-5555</a><br />
			<a id="email" href="mailto:sales@odetteshairsalon.com">sales@odetteshairsalon.com</a><br /><br />
			
			</div><!--closes address-->
		</div><!--closes the title div-->
		</div><!--closes header-->
		
		
		<div id="nav">
		<ul>
			<li><a href="women.html">Women's&#xa0;Hair</a></li>
			<li><a href="men.html">Men's&#xa0;Hair</a></li>
			<li class="subMenu"><a>Special&#xa0;Occasions</a>
				<ul class="nestMenu">
				<li><a href="bridal.html">Bridal</a></li>
				<li><a href="fantasy.html">Themed&#xa0;Events</a></li>
				</ul>
			</li><!--closes the bridal parent-->
			<li><a>Contact&#xa0;Me</a></li>
			<li><a href="shop.html">Shop</a></li>
		</ul>
		</div><!--closes nav-->
		
		<div id="tinyNav">
			<ul>
				<li><a href="women.html">Women's&#xa0;Hair</a></li>
				<li><a href="men.html">Men's&#xa0;Hair</a></li>
				<li><a href="bridal.html">Bridal</a></li>
				<li><a href="fantasy.html">Themed&#xa0;Events</a></li>
				<li><a>Contact&#xa0;Me</a></li>
				<li><a href="shop.html">Shop</a></li>
			</ul>
		</div><!--closes tinyNav-->
		
		<div id="main">
		
		<h2>Contact Me</h2>
		<form action="contact.html" method="post">
		<fieldset>
		
		<legend>Your Information</legend>
		&#10070;&#xa0;<span class="italic">Required information</span><br /><br />
		
		
		<label for="name">&#10070;&#xa0;Name:<br /></label>
		<input type="text" name="name" id="name" size="40" required="required" placeholder="First&#xa0;&#x26;&#xa0;Last name" /><br /><br />
		
		<label for="phone">&#10070;&#xa0;Phone #:<br /></label>
		<input type="text" name="phone" id="phone" size="40" required="required" placeholder="555-555-5555" /><br /><br />
		
		<label for="email">&#10070;&#xa0;E-mail:<br /></label>
		<input type="text" name="email" id="clientEmail" size="40" required="required" placeholder="you@yourdomain.com" /><br /><br />
		
		<label for="comments">Comments or Questions:<br /></label>
		<textarea name="comments" id="comments" rows="4" cols="50" placeholder="Your comments or questions"></textarea><br /><br />
		
		</fieldset><br /><br />
		
		<fieldset>
		<legend>Your Review</legend>
		<!--<form method="post" action="http://webdevbasics.net/scripts/demo.php">-->
		
		What services are you interested in?<br />
		<span class="italic">Check all that apply:</span><br /><br />
		
		<input type="checkbox" name="consultation" id="consultation" value="yes" />Consultation<br />
		<input type="checkbox" name="cut" id="cut" value="yes" />Cut<br />
		<input type="checkbox" name="color" id="color" value="yes" />Color<br />
		<input type="checkbox" name="perm" id="perm" value="yes" />Perm<br />
		<input type="checkbox" name="style" id="style" value="yes" />Style<br />
		<input type="checkbox" name="wax" id="wax" value="yes" />Facial Wax<br />
		<input type="checkbox" name="keritan" id="keritan" value="yes" />Keratin Treatment<br /><br />
		
		
		
		How did you hear about Odette's Hair Salon?<br />
		<span class="italic">Select one of the following:</span><br /><br />
		<input type="radio" name="myAd" id="adExist" value="existing" />Existing Client<br />
		<input type="radio" name="myAd" id="adFrFam" value="friendFamily" />Friend or Family<br />
		<input type="radio" name="myAd" id="adWebsite" value="website" />Website<br />
		<input type="radio" name="myAd" id="adNewspaper" value="newspaper" />Newspaper<br /><br />
		
		
		
		</fieldset><br /><br />
		
		<span id="send">
		<input id="submit" type="submit" value="Submit" />
		<input id="reset" type="reset" value="Reset" />
		</span>
		</form>
		
		<h2>My Location</h2>
		<iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2977.5271211846857!2d-88.13267208532567!3d41.730721882604534!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880e583360f9a59f%3A0x95b6e8630521a08b!2s2035+S+Washington+St%2C+Naperville%2C+IL+60565!5e0!3m2!1sen!2sus!4v1494633751883" width="600" height="400" allowfullscreen=""></iframe>
		
		
		
		</div><!--closes main-->
		<?php
            }
        ?>
		<div id="bottomNav">
		
		<a href="index.html">Home</a> ~ <a href="women.html">Women's&#xa0;Hair</a> ~ <a href="men.html">Men's&#xa0;Hair</a> ~ <a href="bridal.html">Bridal</a> ~ <a href="fantasy.html">Themed&#xa0;Events</a> ~ <a>Contact&#xa0;Me</a> ~ <a href="shop.html">Shop</a>
		
		
		</div><!--closes bottomNav-->
		<div id="copyright">
					<p>Copyright &#xA9; 2018 Odette's Hair Salon</p>
					<p>created by N. Mikyska</p>
		</div><!--closes the copyright div-->
		
		
	</div><!--closes wrapper-->
		
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>	
	<script src="ohs.js"></script>		
		
</body>
</html>
		
		
		