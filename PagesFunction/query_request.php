<?php
if (isset($_POST['saveRequest'])) { 

	$sql = "SELECT id FROM request_repair_list";
	$result=mysqli_query($con,$sql);
	$requestCount=mysqli_num_rows($result);
	$requestCount++;


	$requestnum=date("ymd-Hi-") . 0 .$requestCount;



	$serialNum = $_POST['serialNum'];
	$fname = $_POST['Fname'];
	$lname = $_POST['Lname'];
	$email = $_POST['email'];
	$contact = $_POST['contactNum'];
	$address = $_POST['address'];
	


	


	
	$cmdsql= "INSERT INTO request_repair_list(RequestNumber, SerialNumber, Firstname, Lastname, Email, Contact, Address, is_approved) VALUES ('$requestnum','$serialNum','$fname','$lname','$email','$contact','$address','0')";

	if($con->query($cmdsql) === TRUE)
	{

		$to = "support@zerterra.com";
		function clean_string($string)
		{
			$bad = array("content-type", "bcc:", "to:", "cc:", "href");
			return str_replace($bad, "", $string);
		}

		$body .= "Email: <" . clean_string($email) . ">\n";
		$body .= "Name: " . clean_string($fname . " " .$lname) . "\n";
		$body .= "Serial Number: " . clean_string($serialNum) . "\n";
		$body .= "Request Number: " . clean_string($requestnum) . "\n";
		$body .= "Address: " . clean_string($address) . "\n";

		$header = array(
			'From' => $email,
			'Reply-To' => 'support@zerterra.com',
			'X-Mailer' => 'PHP/' . phpversion()
		);

		$header = 'REQUEST REPAIR FROM USER';

		if(!empty($fname) && !empty($lname) && !empty($email) && !empty($serialNum)){



			$subject = "REQUEST REPAIR!";

			$mail = mail ($to,$subject,$body,$header);
			if( $mail === true ) {

				echo "<script>alert('REQUEST SENT!');</script>";
				include 'PagesFunction/returnMailtoUser.php';							



			}else{

				$resultmsg =  " Sorry there was an error sending your message. \n Please try again later " ;
				echo "<script>window.alert(".$resultmsg;");</script>";
			}


		}else{



			$resultmsg="INVALID DATA \n PLEASE CHECK YOU INFOMATION!";
			echo "<script>window.alert(".$resultmsg;");</script>";




		}



	}else{
		echo "<script>alert('Request Not Saved!');</script>";
	}



}








?>