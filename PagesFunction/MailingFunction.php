                          




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

$fname = $_POST['fname'] ;
$lname = $_POST['lname'] ;
$email = $_POST['email'] ;
$subject = $_POST['subject'] ;
$message = $_POST['msg_body'] ;

$to = "support@zerterra.com";
$subject = $subject ;

function clean_string($string)
{
	$bad = array("content-type", "bcc:", "to:", "cc:", "href");
	return str_replace($bad, "", $string);
}

$body .= "Email: <" . clean_string($email) . ">\n";
$body .= "Name: " . clean_string($fname . " " .$lname) . "\n";
$body .= "Message: " . clean_string($message) . "\n";
$header = array(
	'From' => $email,
	'Reply-To' => 'support@zerterra.com',
	'X-Mailer' => 'PHP/' . phpversion()
);
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=iso-8859-1';

if(!empty($fname) && !empty($lname) && !empty($email) && !empty($message)){


	if($subject=== ""){
		$subject = "No subject";

		$mail = mail ($to,$subject,$body,$header);
		if( $mail === true ) {
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
		$subject = $subject ;
		$mail = mail ($to,$subject,$body,$header);
		if( $mail === true ) {
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




