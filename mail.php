<?php
require 'PHPMailerAutoload.php';

if(isset($_POST['submit'])){
	$mail = new PHPMailer;
	$mail->isSMTP();
	$mail->Host = 'smtp.gmail.com';

	$mail->Port = 587;
	$mail->SMTPSecure = 'tls';
	$mail->SMTPAuth = true;
	$mail->Username = "kohchihao@gmail.com";
	$mail->Password = "xxxxxx";
	$mail->setFrom('kohchihao@gmail', 'AntePrints');
	$mail->addAddress('chihao07@hotmail.com', 'John Doe');
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$tel = $_POST['tel'];
	$subject = $_POST['subject'];
	//design file
	$body = $_POST['body'];
	$mail->Subject = $subject;
	$mail->Body = $body;
	$mail->SMTPOptions = array(
	    'ssl' => array(
	        'verify_peer' => false,
	        'verify_peer_name' => false,
	        'allow_self_signed' => true
	    )
	);
/*	if (!$mail->send()) {
	   // echo "Mailer Error: " . $mail->ErrorInfo;
	} else {
	   // echo "Message sent!";
	}*/
}


?>