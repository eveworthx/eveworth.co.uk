<?php

// Load Google reCAPTCHA dependancy
require '../vendor/autoload.php';


// Google reCAPTCHA secret
$secret = "secret";


// Create reCAPTCHA object
$recaptcha = new \ReCaptcha\ReCaptcha($secret);


// All the contents from the form
$name =				$_POST["name"];
$email =			$_POST["email"];
$message =			$_POST["message"];
$googleRecaptcha =		$_POST["g-recaptcha-response"];
// The user's IP address
$remoteIp =			$_SERVER["REMOTE_ADDR"];

// Is the reCAPTCHA successfully?
$resp = $recaptcha->verify($googleRecaptcha, $remoteIp);
if (!$resp->isSuccess()) {
	// If not, redirect user to the error page
	header('Location: /contact/?error');
	exit;
}


// Create our email body
$email_message = "Name: $name \nEmail: $email \n$message";

// Send the email
mail('eveworthx@gmail.com', "Eveworth.co.uk Contact Form - New Message from $name", $email_message);

// Redirect user to success page
header('Location: /contact/?success');

