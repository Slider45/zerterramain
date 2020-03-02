                          




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
$subjectpost = $_POST['subject'] ;
$message = $_POST['msg_body'] ;

$to = "support@zerterra.com";


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
		$subject = ("Contact Us Page [No subject]");

		$mail = mail ($to,$subject,$body,$header);
		if( $mail === true ) {

			$body1 = " Thank you for reaching out. \n We already received your message. \nwe will contact you as soon as our support team is available\n thank you";
			// $body .= "Name: " . clean_string($fname . " " .$lname) . "";
			// $body .= "Message: " . clean_string($message) . "\n";

			$header = array(
				'From' => $to,
				'Reply-To' => 'support@zerterra.com',
				'X-Mailer' => 'PHP/' . phpversion()
			);
			$headers[] = 'MIME-Version: 1.0';
			$headers[] = 'Content-type: text/html; charset=iso-8859-1';


			$subjectfromz = "Re: [ ". $subjectpost . " ]";
			$mailtosender = mail ($email,$subjectfromz,$body1,$header);
			if( $mailtosender === true ) {


				//$result =  " Thank You! Your request has been submitted successfully. " ;
				?>


			
				<center>
					<p data-close="self" class="notification is-success" role="alert" style="margin: auto;width: 75%;">Thank You! Your request has been submitted successfully</p></center>
					<?php

				}else{

					$result=  " Sorry there was an error sending your message. \n Please try again later " ;
					echo "<script>window.alert(".$result;");</script>";
				}



			}else{

				$result=  " Sorry there was an error sending your message. \n Please try again later " ;
				echo "<script>window.alert(".$result;");</script>";
			}

		}else{

			$subject = "Contact Us Page [ ".$subjectpost." ]" ;
			$mail = mail ($to,$subject,$body,$header);
			if( $mail === true ) {
				$body1 = " Thank you for reaching out. \n We already received your message. \nwe will contact you as soon as our support team is available\n thank you";

		


			// $body .= "Name: " . clean_string($fname . " " .$lname) . "\n";
			// $body .= "Message: " . clean_string($message) . "\n";

				$header = array(
					'From' => $to,
					'Reply-To' => 'support@zerterra.com',
					'X-Mailer' => 'PHP/' . phpversion()
				);
				$headers[] = 'MIME-Version: 1.0';
				$headers[] = 'Content-type: text/html; charset=iso-8859-1';


				$subjectfromz = "Re: [ ". $subjectpost . " ]";
				$mailtosender = mail ($email,$subjectfromz,$body1,$header);
				if( $mailtosender === true ) {


				//$result =  " Thank You! Your request has been submitted successfully. " ;
					?>


					
					<center>
						<p data-close="self" class="notification is-success" role="alert" style="margin: auto;width: 75%;">Thank You! Your request has been submitted successfully</p></center>
						<?php

					}else{

						$result=  " Sorry there was an error sending your message. \n Please try again later " ;
						echo "<script>window.alert(".$result;");</script>";
					}

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




