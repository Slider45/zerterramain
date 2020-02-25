<?php



$sql = "SELECT id FROM pending_order_list";
$result=mysqli_query($con,$sql);
$pendingCount=mysqli_num_rows($result);
$pendingCount++;


$orderNum=date("Ymd-His-") . 0 .$pendingCount;

$email_to = "admin@zerterra.com";
$email_subject = "Email subject";
    $first_name = $_POST['first_name']; // required
    $last_name = $_POST['last_name']; 
    $email_from = $_POST['email']; // required
    $contactnumber = $_POST['contactnumber']; // not required
    $address = $_POST['address']; // required
    $message = $_POST['message']; // required

    $sql = "INSERT INTO pending_order_list(OrderNumber,Firstname,Lastname,Email,Contact,Address,Message) VALUES ('$orderNum','$first_name','$last_name','$email_from','$contactnumber','$address','$message')";

    if($con->query($sql) === TRUE){





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
    	// 'X-Mailer: PHP/' . phpversion();
      $mail = mail($email_to, $email_subject, $email_message, $headers);
      if( $mail === true ) {

        if(($Content = file_get_contents("content/PreOrderReturnMailContent.php")) === false) {
          $Content = "";
        }
        $headers[] = 'MIME-Version: 1.0';
        $headers[] = 'Content-type: text/html; charset=iso-8859-1';
        
        $subject = "PRE-ORDER (ORDER #: [ " . $orderNum . " ])";

        
        $_SESSION["orderNum"] = $orderNum; 

        include 'content/PreOrderReturnMailContent.php';

        include_once "PHPMailer/PHPMailer.php";

        $mail = new PHPMailer();
        $mail->setFrom('no-reply@zerterra.com');
        $mail->addAddress($email_from, $first_name);
        $mail->Subject = $subject ;
        $mail->isHTML(true);

        $mail->Body=$Content;
        $mail->Header = implode("\r\n", $headers);









      }else{


        echo "<script>alert('Message not sent! Please try again!'); </script>";


      }

    }






    ?>
    <script>









    </script>
