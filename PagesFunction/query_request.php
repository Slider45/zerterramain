<?php
use PHPMailer\PHPMailer\PHPMailer;


if (isset($_POST['saveRequest'])) { 

	$sql = "SELECT id FROM request_repair_list ";
	$result=mysqli_query($con,$sql);
	$requestCount=mysqli_num_rows($result);
	$requestCount++;


	$requestnum=date("ymd-Hi-") . 0 .$requestCount;
	

	$_SESSION['SN'] = $SNumber;
	$_SESSION['FN'] = $fname;
	$_SESSION['LN'] = $lname;
	$_SESSION['EM'] = $email;
	$_SESSION['CN'] = $contact;
	$_SESSION['AD'] = $address;
	$_SESSION['RN'] = $requestnum;
include '../content/requestMailtoUserContent.php';

	if(($Content = file_get_contents("../content/requestMailtoUserContent.php")) === false) {
		$Content = "";
	}

	$headers[] = 'MIME-Version: 1.0';
	$headers[] = 'Content-type: text/html; charset=iso-8859-1';





	

	$SNumber = $_POST['SNumber'];
	$fname = $_POST['Fname'];
	$lname = $_POST['Lname'];
	$email = $_POST['email'];
	$contact = $_POST['contact'];
	$address = $_POST['address'];
	
	$email_to_support = "support@zerterra.com";
	$email_subject = "Request Repair";

	include_once "PHPMailer/PHPMailer.php";
	
	$mail = new PHPMailer();
	$mail->setFrom($email);
	$mail->addAddress($email_to_support);
	$mail->Subject = $email_subject;
	$mail->isHTML(true);
	$mail->Body = "\n REQUESTING FOR REPAIR! FROM \n <?php echo $SNumber; ?> \n
	<?php echo $email; ?> \n <?php echo $fname\t$lname; ?> \n <?php echo $contact; ?> \n <?php echo $address; ?> \n";
	$mail->Header = implode("\r\n", $headers);

	if ($mail->send()){

		$subject_from_support = "Request Repair\t" . $requestnum;
		$mailfromsupport = new PHPMailer();
		$mailfromsupport->setFrom("no-reply@zerterra.com");
		$mailfromsupport->addAddress($email);
		$mailfromsupport->Subject = $subject_from_support;
		$mailfromsupport->isHTML(true);
		$mailfromsupport->Body = $Content;
		$mailfromsupport->Header = implode("\r\n", $headers);



		if ($mailfromsupport->send()){


			$cmdsql= "INSERT INTO request_repair_list(RequestNumber, SerialNumber, Firstname, Lastname, Email, Contact, Address, is_approved) VALUES ('$requestnum','$SNumber','$fname','$lname','$email','$contact','$address','0')";
			if($con->query($cmdsql) === TRUE)
			{
				echo "<script>alert('Return Mail Sent!'); </script>";
				

			}else{
				echo "<script>alert('QUERY FAILED!'); </script>";
			}
		}else{

			echo "<script>alert('Return Mail Not Sent!'); </script>";
		}
	}else{

		echo "<script>alert('Sending Request Failed!'); </script>";


	}echo '<script>window.location.href="../"</script>';
}




	// $cmdsql= "INSERT INTO request_repair_list(RequestNumber, SerialNumber, Firstname, Lastname, Email, Contact, Address, is_approved) VALUES ('$requestnum','$serialNum','$fname','$lname','$email','$contact','$address','0')";

	// if($con->query($cmdsql) === TRUE)
	// {






	// 	function clean_string($string)
	// 	{
	// 		$bad = array("content-type", "bcc:", "to:", "cc:", "href");
	// 		return str_replace($bad, "", $string);
	// 	}

	// 	$email_message = "Request Repair details below.\n\n";
	// 	$email_message .= "Email: " . clean_string($email) . "\n";
	// 	$email_message .= "First Name: " . clean_string($fname) . "\n";
	// 	$email_message .= "Last Name: " . clean_string($lname) . "\n";
	// 	$email_message .= "Contact number: " . clean_string($contact) . "\n";
	// 	$email_message .= "Address: " . clean_string($address) . "\n";
 //     // $email_message .= "Message: " . clean_string($message) . "\n";

 //    // create email headers
	// 	$headers = 'From: ' . $email_to . "\r\n" .
	// 	'Reply-To: ' . $email . "\r\n" .
 //    	// 'X-Mailer: PHP/' . phpversion();
	// 	$mail = mail($email_to, $email_subject, $email_message, $headers);
	// 	if( $mail === true ) {

	// 		if(($Content = file_get_contents("content/requestMailtoUserContent.php")) === false) {
	// 			$Content = "";
	// 		}
	// 		$headers[] = 'MIME-Version: 1.0';
	// 		$headers[] = 'Content-type: text/html; charset=iso-8859-1';

	// 		$subject = "REQUEST REPAIR ( Request #: [ " . $requestnum . " ])";


	// 		$_SESSION["reqNumber"] = $requestnum; 

	// 		include 'content/requestMailtoUserContent.php';

	// 		use PHPMailer\PHPMailer\PHPMailer;

	// 		include_once "PHPMailer/PHPMailer.php";

	// 		$mail = new PHPMailer();
	// 		$mail->setFrom('no-reply@zerterra.com');
	// 		$mail->addAddress($email, $fname . " " . $lname);
	// 		$mail->Subject = $subject ;
	// 		$mail->isHTML(true);

	// 		$mail->Body=$Content;
	// 		$mail->Header = implode("\r\n", $headers);









	// 	}else{


	// 		echo "<script>alert('Message not sent! Please try again!'); </script>";


	// 	}

	// }}



// 		$to = "support@zerterra.com";
// 		function clean_string($string)
// 		{
// 			$bad = array("content-type", "bcc:", "to:", "cc:", "href");
// 			return str_replace($bad, "", $string);
// 		}

// 		$body .= "Email: <" . clean_string($email) . ">\n";
// 		$body .= "Name: " . clean_string($fname . " " .$lname) . "\n";
// 		$body .= "Serial Number: " . clean_string($serialNum) . "\n";
// 		$body .= "Request Number: " . clean_string($requestnum) . "\n";
// 		$body .= "Address: " . clean_string($address) . "\n";

// 		$header = array(
// 			'From' => $email,
// 			'Reply-To' => 'support@zerterra.com',
// 			'X-Mailer' => 'PHP/' . phpversion()
// 		);

// 		$header = 'REQUEST REPAIR FROM USER';

// 		if(!empty($fname) && !empty($lname) && !empty($email) && !empty($serialNum)){



// 			$subject = "REQUEST REPAIR!";

// 			$mail = mail ($to,$subject,$body,$header);
// 			if( $mail === true ) {

// 				echo "<script>alert('REQUEST SENT!');</script>";
// 				include 'PagesFunction/returnMailtoUser.php';							



// 			}else{

// 				$resultmsg =  " Sorry there was an error sending your message. \n Please try again later " ;
// 				echo "<script>window.alert(".$resultmsg;");</script>";
// 			}


// 		}else{



// 			$resultmsg="INVALID DATA \n PLEASE CHECK YOU INFOMATION!";
// 			echo "<script>window.alert(".$resultmsg;");</script>";




// 		}



// 	}else{
// 		echo "<script>alert('Request Not Saved!');</script>";
// 	}



// }








?>