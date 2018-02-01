<?php

if(!$_POST) exit;

$email = $_POST['email'];
$errors=0;

//$error[] = preg_match('/\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b/i', $_POST['email']) ? '' : 'INVALID EMAIL ADDRESS';
if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
	$error="Invalid email address entered";
	$errors=1;
}

if($errors==1) echo $error;
else{	
	
	//enter the company mail to wich client has to contact.
	//--sreekanthkasani 
	
	$to = "yourcompany@mail.com";
	
    //enter the subject,message,format and headers if any are present
	$subject = $_POST['subject'];
	$content = $_POST['message'];
	$company = $_POST['company_name'];
	$from = $_POST['email'];

	//defining message in html format

	// To send HTML mail, the Content-type header must be set
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

	$message = '<html><body>';
	$message .= '<h1 style="color:#f40;">'.$company.'</h1>';
	$message .= '<p style="color:#080;font-size:18px;">'.$content.'</p>';
	$message .= 'contact : <h3 style="color:#f40;">'.$from.'</h3>';
	$message .= '</body></html>';

	// Create email headers
     $headers .= 'From: '.$from."\r\n".
     'Reply-To: '.$from."\r\n" .
     'X-Mailer: PHP/' . phpversion();
	
	//initialize the maili servers and the port
	//please make sure for this to work you have to configure the php.ini file 
	//if you face any problem raise a issue in my GIT --sreekanthkasani

    ini_set('SMTP','smtp.gmail.com');
    ini_set('smtp_port',587);
	 
	if(mail($to,$subject,$message,$headers)) {
		header("Location: contacts.php?status=success");
	} else {
		header("Location: contacts.php?status=failure");
		echo 'ERROR!';
	}
}

?>