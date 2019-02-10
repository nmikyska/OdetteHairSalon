<!DOCTYPE HTML>
<html>
<style>
label {
    display:block;
    margin-top:20px;
    letter-spacing:2px;
}
/* Centre the page */
.body {
    display:block;
    margin:0 auto;
    width:576px;
}

/* Centre the form within the page */
form {
    margin:0 auto;
    width:459px;
}

/* Style the text boxes */
input, textarea {
	width:439px;
	height:27px;
	background:#efefef;
	border:1px solid #dedede;
	padding:10px;
	margin-top:3px;
	font-size:0.9em;
	color:#3a3a3a;
}

textarea {
	height:213px;
	background:url(images/textarea-bg.jpg) right no-repeat #efefef;
}

input, textarea {
    width:439px;
    height:27px;
    background:#efefef;
    border:1px solid #dedede;
    padding:10px;
    margin-top:3px;
    font-size:0.9em;
    color:#3a3a3a;
    -moz-border-radius:5px;
    -webkit-border-radius:5px;
    border-radius:5px;
}
input:focus, textarea:focus {
    border:1px solid #97d6eb;
}

</style>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Contact Form</title>
</head>

<body>
<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
	$from = 'From: Test'; 
    $to = 'nmikyska@gmail.com'; 
    $subject = 'Hello';
	
	$body = "From: $name\n E-Mail: $email\n Message:\n $message";
	if ($_POST['submit']) {
    if (mail ($to, $subject, $body, $from)) { 
        echo '<p>Your message has been sent!</p>';
    } else { 
        echo '<p>Something went wrong, go back and try again!</p>'; 
    }
}
?>


<form method="post" action="test.php">
        
    <label>Name</label>
    <input name="name" placeholder="Type Here">
            
    <label>Email</label>
    <input name="email" type="email" placeholder="Type Here">
            
    <label>Message</label>
    <textarea name="message" placeholder="Type Here"></textarea>
            
    <input id="submit" name="submit" type="submit" value="Submit">
        
</form>
</body>

</html>