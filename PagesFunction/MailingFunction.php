                          




<style>
	@keyframes scaleup {
		0% {
			transform: scale(1)
		}
		100% {
			transform: scale(3);
			opacity: 0
		}
	}

	@keyframes scaledown {
		0% {
			transform: scale(1)
		}
		100% {
			transform: scale(0);
			opacity: 0
		}
	}
</style>

<?php
$email_to = "support@zerterra.com";

$fname = $_POST['fname'] ;
$lname = $_POST['lname'] ;
$email = $_POST['email'] ;
$email_subject = $_POST['subject'] ;
$message = $_POST['msg_body'] ;

$to = "support@zerterra.com";
$subject = $subject ;

function clean_string($string)
{
	$bad = array("content-type", "bcc:", "to:", "cc:", "href");
	return str_replace($bad, "", $string);
}

$email_message = "Pre-Order details below.\n\n";
$email_message .= "Email: " . clean_string($email_from) . "\n";
$email_message .= "First Name: " . clean_string($first_name) . "\n";
$email_message .= "Last Name: " . clean_string($last_name) . "\n";
$email_message .= "Contact number: " . clean_string($contactnumber) . "\n";
$email_message .= "Address: " . clean_string($address) . "\n";
$email_message .= "Message: " . clean_string($message) . "\n";

    // create email headers
$headers = 'From: ' . $email_to . "\r\n" .
'Reply-To: ' . $email_from . "\r\n" .
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=iso-8859-1';

if(!empty($fname) && !empty($lname) && !empty($email) && !empty($message)){

	$_SESSION["fname"] = $fname;
	$_SESSION['lname'] = $lname;
	$_SESSION['email'] = $email;
	$_SESSION['subject'] = $subject;
	$_SESSION['msg_body'] = $message;


	
	if($subject=== ""){
		$email_subject = "No subject";

		$mail = mail($email_to, $email_subject, $email_message, $headers);
		if( $mail === true ) {


			if(($Content = file_get_contents("content/replyToContactUsMsg.php.php")) === false) {
				$Content = "";
			}
			$headers[] = 'MIME-Version: 1.0';
			$headers[] = 'Content-type: text/html; charset=iso-8859-1';


			$subject = "Re:  [ " . $email_subject . " ]";






			include 'content/replyToContactUsMsg.php.php';

			include_once "PHPMailer/PHPMailer.php";

			$mail = new PHPMailer();
			$mail->setFrom('no-reply@zerterra.com');
			$mail->addAddress($email_from, $first_name);
			$mail->Subject = $subject ;
			$mail->isHTML(true);

			$mail->Body=$Content;
			$mail->Header = implode("\r\n", $headers);




			$result =  " Thank You! Your request has been submitted successfully. " ;


			?>


			<br>
			<p data-close="self" class="notification is-success" role="alert">Thank You! Your request has been submitted successfully</p>
			<?php

		}else{

			$result=  " Sorry there was an error sending your message. \n Please try again later " ;
			echo "<script>window.alert(".$result;");</script>";
		}

	}else{

		$email_subject = $email_subject ;
		$mail = mail($email_to, $email_subject, $email_message, $headers);



		if( $mail === true ) {


			if(($Content = file_get_contents("content/replyToContactUsMsg.php.php")) === false) {
				$Content = "";
			}
			$headers[] = 'MIME-Version: 1.0';
			$headers[] = 'Content-type: text/html; charset=iso-8859-1';

			$subject = "Re:  [ " . $email_subject . " ]";

			include 'content/replyToContactUsMsg.php.php';

			include_once "PHPMailer/PHPMailer.php";

			$mail = new PHPMailer();
			$mail->setFrom('no-reply@zerterra.com');
			$mail->addAddress($email_from, $first_name);
			$mail->Subject = $subject ;
			$mail->isHTML(true);

			$mail->Body=$Content;
			$mail->Header = implode("\r\n", $headers);




			$result =  " Thank You! Your request has been submitted successfully. " ;
                                     // echo "<script>window.alert(".$result;");</script>";
			?>
			<p class="notification is-success has-icon" role="alert"style="margin-right:100px; margin-left:100px;">Thank You! Your request has been submitted successfully<button class="delete" type="button" >Close</button></p>

			<?php
		}else{

			$result=  " Sorry there was an error sending your message. \n Please try again later " ;
                                     // echo "<script>window.alert(".$result;");</script>";
		}


	}
}else{



	$result="INVALID DATA \n PLEASE CHECK YOU INFOMATION!";





}












?>
<style type="text/css" media="screen">
	
</style>




