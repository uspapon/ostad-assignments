<?php


// define variables and set to empty values
$name = $email = $subject = $messege = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$name = $_POST["name"];
	$email = $_POST["email"];
	$subject = $_POST["sunject"];
	$message = $_POST["message"];

	// start session and set cookie
	session_start();
	$_SESSION['actionResult'] = '<div class="p-3 w-75 text-white my-5 mx-auto bg-success text-center border border-primary-subtle rounded-3">
 											<h3>Congratulations! Email has been sent Successfully</h3> Thank You...</div>';

	  header("Location: http://localhost:909/assignment-9/?page=contact");

}

