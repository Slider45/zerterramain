<?php
if (isset($_POST['sndRequest'])) { 




	$serialNum = $_POST['SerialNumber'];
	$fname = $_POST['Fname'];
	$lname = $_POST['Lname'];
	$email = $_POST['email'];
	$contact = $_POST['contactNum'];
	$address = $_POST['address'];
	$requestnum = rand();


	


	$sql = "SELECT * FROM tblusers_list WHERE Serial_Number='$serialNum'";
	$result = $con->query($sql);
	if($result->num_rows > 0){


		$sqlnames = "SELECT * FROM request_list WHERE serial_no='$serialNum' AND FirstName='$fname' AND LastName = '$lname' AND is_approved = '0'";
		$result = $con->query($sqlnames);
		if($result->num_rows > 3){

			echo "<script>alert('TOO MANY REQUEST SENT!');</script>";


		}else{
			$cmdsql= "INSERT INTO request_list(serial_no, request_number, FirstName, LastName, email, contact, address, is_approved) VALUES ('$serialNum','$requestnum','$fname','$lname','$email','$contact','$address','0')";

			if($con->query($cmdsql) === TRUE){

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
				$headers[] = 'MIME-Version: 1.0';
				$headers[] = 'Content-type: text/html; charset=iso-8859-1';

				if(!empty($fname) && !empty($lname) && !empty($email) && !empty($serialNum)){



					$subject = "REQUEST REPAIR!";

					$mail = mail ($to,$subject,$body,$header);
					if( $mail === true ) {

						echo "<script>alert('REQUEST SENT!');</script>";
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


		

	}else{
		echo "<script>alert('data NOT found!');</script>";
	}

}


?>