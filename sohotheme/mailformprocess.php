<?php
// Clear variables to make sure you don't get any artifact information //
$name = $email = $phone = $message = $formcontent = $headers = "";

// Validation to ensure that the following sections were filled out //

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (empty($_POST["name"])) {
		// This happens if the section is left empty //
		// Currently redirects and stops the code //
		header('Location: http://www.badrikermani.com/contacts');
		exit;
	}
	else {
		// This happens if the section is filled out properly //
		// Saves the info from the form into the given variable //
		$name = $_REQUEST["name"];
	}

	if (empty($_POST["email"])) {
		header('Location: http://www.badrikermani.com/contacts');
		exit;
	}
	else {
		$email = $_REQUEST["email"];
	}

	if (empty($_POST["phone"])) {
		header('Location: http://www.badrikermani.com/contacts');
		exit;
	}
	else {
		$phone = $_REQUEST["phone"];
	}

	if (empty($_POST["message"])) {
		header('Location: http://www.badrikermani.com/contacts');
		exit;
	}
	else {
		$message = $_REQUEST["message"];
	}
}

// Create the message to be sent based on the information from the form //
$formcontent="From: ".$name."\r\nE-mail: ".$email."\r\nPhone Number: ".$phone."\r\nMessage: \r\n".$message;

// Set who the e-mail will be sent from and other headers //
$headers = 'From: Webmaster <webmaster@badrikermani.com>';

// Mail to the email address given in the first slot //
mail('badrikermanistylist@gmail.com','Badri Kermani Website Contact Form',$formcontent,$headers) or die("Error!");

// Redirect user to page after the form is complete //
header('Location: http://www.badrikermani.com/contacts');

?>