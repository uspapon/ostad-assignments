<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // check for any empty field 
    if(empty($_POST["inputName"]) 
    || empty($_POST["inputEmail"])
    || empty($_POST["inputPassword"])
    || empty($_FILES["inputProfilePic"]) ){
        die('All fields are required.');
    }

    // scan user input
    $name = $_POST["inputName"];
    $email = $_POST["inputEmail"];
    $password = $_POST["inputPassword"];
    $profilePic = $_FILES["inputProfilePic"];

    //print_r($profilePic);


    // validate email field
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        die('Invalid email format.');
    }

    // setting up upload directory
    $upload_dir = "uploads/";
    $fileName = uniqid().'_'.Date("Y-m-d_H-i-s").'_'.$profilePic['name'];
    $target_file = $upload_dir.$fileName;

    // uploading profile picture 
    if(!move_uploaded_file($_FILES["inputProfilePic"]["tmp_name"], $target_file)){
        die( 'Error uploading file.' );
    }  


    // save user information into a csv file
    $data = array($name, $email, $fileName);
    $fp = fopen("users.csv", 'a');

    if(fputcsv($fp, $data) === false){
        die('Error: Can not write into the file.');
    }

    fclose($fp);

    // start session and set cookie
    session_start();
    setcookie( 'username', $name );

    // redirect to success page
    header( 'Location: success.php' );
    echo "here i am";
    exit();




} // END OF $_SERVER["REQUEST_METHOD"]