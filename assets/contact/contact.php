<?php

/** 1. MAIN SETTINGS
*******************************************************************/


// ENTER YOUR EMAIL
$emailTo = "steve@steve-shead.com";


// ENTER IDENTIFIER
$emailIdentifier =  "Message sent via contact form from Dev Test Web PHP Test Site" . $_SERVER["SERVER_NAME"];


/** 2. MESSAGES
*******************************************************************/


// ERROR OR EMPTY FIELD
$errrorEmptyField = "* Field is required!";


// ERROR FOR INVALID EMAIL
$errrorEmailInvalid = "* Invalid email!";


// SUCCESS MESSAGE
$successMessage = "* Email Sent Successfully!";


/** 3. MAIN SCRIPT
*******************************************************************/


if($_POST) {

    $name = addslashes(trim($_POST["name"]));
    $clientEmail = addslashes(trim($_POST["email"]));
    $message = addslashes(trim($_POST["message"]));
	$honeypotCaptcha = addslashes(trim($_POST["phone"]));

    $array = array("nameMessage" => "", "emailMessage" => "", "messageMessage" => "","succesMessage" => "");

    if($name == "") {
    	$array["nameMessage"] = $errrorEmptyField;
    }

    if(!filter_var($clientEmail, FILTER_VALIDATE_EMAIL)) {
        $array["emailMessage"] = $errrorEmailInvalid;
    }

    if($message == "") {
        $array["messageMessage"] = $errrorEmptyField;
    }

    if($name != "" && filter_var($clientEmail, FILTER_VALIDATE_EMAIL) && $message != "" && $honeypotCaptcha == "") {

		$array["succesMessage"] = $successMessage;

		$headers  = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		$headers .= "From: " . $name . " <" . $clientEmail .">\r\n";
		$headers .= "Reply-To: " . $clientEmail;

		mail($emailTo, $emailIdentifier, $message, $headers);

    }

    echo json_encode($array);

}

?>
