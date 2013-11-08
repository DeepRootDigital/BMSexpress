<?php
// Clear variables to make sure you don't get any artifact information //
$name = $email = $formcontent = $headers = "";

// Validation to ensure that the following sections were filled out //

if ($_SERVER["REQUEST_METHOD"] == "POST") {

	if (empty($_POST["name"])) {
		header('Location: http://www.businessonmarketst.com/blog/');
		exit;
	}
	else {
		$name = $_REQUEST["name"];
	}

	if (empty($_POST["email"])) {
		header('Location: http://www.businessonmarketst.com/blog/');
		exit;
	}
	else {
		$email = $_REQUEST["email"];
	}

}

// Create the message to be sent based on the information from the form //
$formcontent=$name . " with the email " . $email . " has signed up for a subscription.";

// Set who the e-mail will be sent from and other headers //
$headers = 'From: Webmaster <admin@badrikermani.com>';

// Mail to the email address given in the first slot //
mail('badrikermanistylist@gmail.com','Subscription Notice',$formcontent,$headers) or die("Error!");

// Redirect user to page after the form is complete //
header('Location: http://www.badrikermani.com/');

?>