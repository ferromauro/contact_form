<?php

// Regular expression to name and mail validation	
$regexName = '/^[a-zA-Zòàèù\.\-_[:space:]]{3,30}$/i';	
$regexEmail = '/^[_a-zA-Z0-9-]+(\.[_a-zA-Z0-9-]+)*@[a-zA-Z0-9-]+(\.[a-zA-Z0-9-]+)+$/';

// Security functions for input form

function html($text){
return htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
}

function htmlout($text){
echo html($text);
}


// FORM data processing

	if (isset($_POST['action']) and $_POST['action'] == 'contact'){
		
		if(!isset($_POST['name']) or $_POST['name'] == '')
			{
				$GLOBALS['submitError'] = 'Please compile Name field.';
				return FALSE;
			}
		else if (!isset($_POST['email']) or $_POST['email'] == '')
			{
				$GLOBALS['submitError'] = 'Please compile E-mail field.';
			return FALSE;
			}
			else if (!isset($_POST['phone']) or $_POST['phone'] == ''){
				$GLOBALS['submitError'] = 'Please compile "Phone Number" field.';
				return FALSE;
			}
			else if (!isset($_POST['message']) or $_POST['message'] == ''){
				$GLOBALS['submitError'] = 'Please compile Message field.';
				return FALSE;
			}
			else if(preg_match($regexName, $_POST['name'])== FALSE) {
				$GLOBALS['submitError'] = 'Please insert a valid Name (min 3 characters).';
				return FALSE;
			}
			else if(preg_match($regexEmail, $_POST['email']) == FALSE) {
				$GLOBALS['submitError'] = 'Please insert a valid E-mail.';
				return FALSE;
			}
			else if($_POST['email'] != $_POST['confirm_email']){
				$GLOBALS['submitError'] = 'Email fields not match';
				return FALSE;
			}
			if(!isset($_POST['privacy'])) {
				$GLOBALS['submitError'] = 'Please accept terms and conditions';  
				return FALSE;
			}

	// Send the email
	$header = "MIME-Version: 1.0\r\n"; 
	$header .= "Content-type: text/html; charset=utf-8 \r\n"; 
	$header .= "From: ". $_POST['name'] . " <" . $_POST['email'] ."> \r\n";   
	
	//******
	$recipient ="ferromauro@yahoo.it";  // PUT HERE YOUR ADMINISTRATOR MAIL 
	//******
	
	$subject = "Mail from conctact form"; 
	$message = " 
	<html> 
	<head> 
		<style type='text/css'> 
			#message {padding:20px; color:black; background-color:white;  width: 70%; margin:auto; text-align:justify; font-family:Verdana, Arial, Helvetica, sans-serif; 
			font-size:15px; font-weight:normal; border: 1px solid black}
		</style> 
	</head> 
	<body> ‎
		<h3> Contact form message <br>
		<div id='message'> NAME:" . $_POST['name'] . " </div>
		<div id='message'> PHONE NUMBER:" . $_POST['phone'] . " </div>
		<div id='message'> EMAIL:" . $_POST['email'] . " </div>
		<br>
		<div id='message'> MESSAGE: ". $_POST['message'] . " </div>
	</body> 
	</html> 
	"; 

	if(mail($recipient, $subject, $message, $header)){
		$GLOBALS['submitError'] = 'Mail sent successfully';  
	}	
	else {
		$GLOBALS['submitError'] = 'Error. Please try again.';  
	}		
}	
