<?php
use PHPMailer\PHPMailer\PHPMailer;


if (isset($_POST['saveRequest'])) { 

	$sql = "SELECT id FROM request_repair_list ";
	$result=mysqli_query($con,$sql);
	$requestCount=mysqli_num_rows($result);
	$requestCount++;


	$requestnum=date("ymd-Hi-") . 0 .$requestCount;
	include '../content/requestMailtoUserContent.php';

	$_SESSION['SN'] = $SNumber;
	$_SESSION['FN'] = $fname;
	$_SESSION['LN'] = $lname;
	$_SESSION['EM'] = $email;
	$_SESSION['CN'] = $contact;
	$_SESSION['AD'] = $address;
	$_SESSION['RN'] = $requestnum;


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

		$subject_from_support = "Request Repair" . $requestnum;
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