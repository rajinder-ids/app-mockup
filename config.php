<?php

 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db     = "app-form";
 
 define('CONTACT','contact');
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db);
 if($conn){
 	//echo "msqli connect";
 }else{
 	echo $conn->error;
 }
 // or die("Connect failed: %s\n". $conn -> error);

function CloseCon($conn)
 {
 $conn -> close();
 }
   

// insert query


$message = "";
if(isset($_POST['action'])){
  $name        = $_POST['username'];
  $email       = $_POST['email'];
  $phoneNumber = $_POST['phoneNumber'];
  $feedback    = $_POST['feedback'];

  $validationMesssage = false;

  if(empty($name)){
  	$namevalidate = "This field is required";
  	$validationMesssage = true;
  }

  if(empty($email)){
  	$emailvalidate = "This field is required";
  	$validationMesssage = true;
  }

  if(empty($phoneNumber)){
  	$phoneNumbervalidate = "This field is required";
  	$validationMesssage = true;
  }

  if(empty($feedback)){
  	$feedbackvalidate = "This field is required";
  	$validationMesssage = true;
  }


  if($validationMesssage == false){
	  $sql    = "INSERT INTO `CONTACT`(`username`, `email`, `phoneNumber`,`feedback`)VALUES('{$name}', '{$email}', '{$phoneNumber}', '{$feedback}')";
	  $insert = $conn->query($sql);
		if ($insert === true) {
		    $message = statusMessage('card-alert green' ,"Your form was submitted successfully.");

		} else {
			$message = statusMessage('validation-error' ,"There was a problem with your submission. Errors have been highlighted below.");
		    // $message = "Error: " . $sql . "<br>" . $conn->error;
		    // $message = statusMessage('card-error' ,$conn->error);
		}  	
  }

}


function statusMessage($class ,$text){
	return "<p class='{$class}'>{$text}</p>";
}