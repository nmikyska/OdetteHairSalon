

<?php
if(isset($_POST['email'])) {
 
    //EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "nmikyska@yahoo.com";
    $email_subject = "Test odette's contact form";
 
    function died($error) {
        //your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted.";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
 
 
    //validation expected data exists
    if(!isset($_POST['first_name']) ||
        !isset($_POST['last_name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['telephone']) ||
        !isset($_POST['comments'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
 
     
 
    $first_name = $_POST['first_name']; // required
    $last_name = $_POST['last_name']; // required
    $email_from = $_POST['email']; // required
    $telephone = $_POST['telephone']; // not required
    $comments = $_POST['comments']; // required
 
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$first_name)) {
    $error_message .= 'The First Name you entered does not appear to be valid.<br />';
  }
 
  if(!preg_match($string_exp,$last_name)) {
    $error_message .= 'The Last Name you entered does not appear to be valid.<br />';
  }
 
  if(strlen($comments) < 2) {
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
  }
 
  if(strlen($error_message) > 0) {
    died($error_message);
  }
 
    $email_message = "Form details below.\n\n";
 
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
     
 
    $email_message .= "First Name: ".clean_string($first_name)."\n";
    $email_message .= "Last Name: ".clean_string($last_name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Telephone: ".clean_string($telephone)."\n";
    $email_message .= "Comments: ".clean_string($comments)."\n";
 
	//create email headers
	$headers = 'From: '.$email_from."\r\n".
	'Reply-To: '.$email_from."\r\n" .
	'X-Mailer: PHP/' . phpversion();
	@mail($email_to, $email_subject, $email_message, $headers);  

?>



 
<!-- include your own success html here -->
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
	
		<div id="header">
			<a href="odetteHomePage.html"><img id="logo" src="images/logo.png" width="188" height="191" alt="Odette's Hair Salon Home" /></a>
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
			
		</ul>
		</div><!--closes nav-->
		
		<div id="tinyNav">
			<ul>
				<li><a href="women.html">Women's&#xa0;Hair</a></li>
				<li><a href="men.html">Men's&#xa0;Hair</a></li>
				<li><a href="bridal.html">Bridal</a></li>
				<li><a href="fantasy.html">Themed&#xa0;Events</a></li>
				<li><a>Contact&#xa0;Me</a></li>
				
			</ul>
		</div><!--closes tinyNav-->
		
		<div id="main">
		<div id="desc">
		
				<p>Thank you for contacting me. I will be in touch with you very soon.</p> <br />

				<p><a href="odetteHomePage.html" class="link">Go Back</a></p>
			
			
		


<?php
 
}
?>
		</div>
		</div><!--closes main-->
		
		<div id="bottomNav" style="margin-top:400px;">
		
		<a href="odetteHomePage.html">Home</a> ~ <a href="women.html">Women's&#xa0;Hair</a> ~ <a href="men.html">Men's&#xa0;Hair</a> ~ <a href="bridal.html">Bridal</a> ~ <a href="fantasy.html">Themed&#xa0;Events</a> ~ <a>Contact&#xa0;Me</a> 
		
		
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

