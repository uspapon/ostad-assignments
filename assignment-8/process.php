<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // check for any empty field 
    if(empty($_POST["inputEmail"])
    || empty($_POST["inputPassword"]) ){
        die('All fields are required.');
    }

    // scan user input
    $email = $_POST["inputEmail"];
    $password = $_POST["inputPassword"];


    // validate email field
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        die('Invalid email format.');
    }

    if($_COOKIE["email"] == $email && $_COOKIE["password"] == $password){

        // redirect to success page
        header( 'Location: success.php' );
        exit();

    }else {
  
        header( 'Location: login.php?loginErr=1' );
    }







} // END OF $_SERVER["REQUEST_METHOD"]