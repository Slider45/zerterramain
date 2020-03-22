$to = 'user@example.com'; 
$from = 'sender@example.com'; 
$fromName = 'SenderName'; 
 
$subject = "Send HTML Email in PHP by CodexWorld"; 
 
$htmlContent = ' 
    <html> 
    <head> 
        <title>Welcome to CodexWorld</title> 
    </head> 
    <body> 
        <h1>Thanks you for joining with us!</h1> 
        <table cellspacing="0" style="border: 2px dashed #FB4314; width: 100%;"> 
            <tr> 
                <th>Name:</th><td>CodexWorld</td> 
            </tr> 
            <tr style="background-color: #e0e0e0;"> 
                <th>Email:</th><td>contact@codexworld.com</td> 
            </tr> 
            <tr> 
                <th>Website:</th><td><a href="http://www.codexworld.com">www.codexworld.com</a></td> 
            </tr> 
        </table> 
    </body> 
    </html>'; 
 
// Set content-type header for sending HTML email 
$headers = "MIME-Version: 1.0" . "\r\n"; 
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
 
// Additional headers 
$headers .= 'From: '.$fromName.'<'.$from.'>' . "\r\n"; 
$headers .= 'Cc: welcome@example.com' . "\r\n"; 
$headers .= 'Bcc: welcome2@example.com' . "\r\n"; 
 
// Send email 
if(mail($to, $subject, $htmlContent, $headers)){ 
    echo 'Email has sent successfully.'; 
}else{ 
   echo 'Email sending failed.'; 
}


**************************************************



    $mail = new PHPMailer();
    $mail->setFrom($email_from);
    $mail->addAddress($email_to_admin);
    $mail->Subject = $email_subject;
    $mail->isHTML(true);
    $mail->Body ="PRE-ORDER EMAIL FROM <br>
    ORDER NUMBER: $orderNum <br> 
    EMAIL: $email_from <br> 
    FIRSTNAME:  $fname <br> 
    LASTNAME:  $lname <br> 
    CONTACT:  $contact <br> 
    ADDRESS:  $address <br> 
    MESSAGE: $message";
    $mail->Header = implode("\r\n". $headers);

    if ($mail->send()){

      $subject_from_support = "Pre-Order\t[" . $orderNum . "]";
      $mailfromadmin = new PHPMailer();
      $mailfromadmin->setFrom("no-reply@zerterra.com");
      $mailfromadmin->addAddress($email_from);
      $mailfromadmin->Subject = $subject_from_support;
      $mailfromadmin->isHTML(true);
      $mailfromadmin->Body = "
      Please CLICK the link below for PRE-ORDER DETAILS:<br><br>

      <a href='http://zerterra.com/content/Pre-Order_Details.php?fname=$fname&lname=$lname&email=$email_from&contact=$contact&address=$address&message=$message&OrderNumber=$orderNum'>Click Here</a>
      ";
      
      $mailfromadmin->Header = implode("\r\n", $headers);

      if ($mailfromadmin->send()){


       $cmdsql= "INSERT INTO pending_order_list(OrderNumber,Firstname,Lastname,Email,Contact,Address,Message,is_approved) VALUES ('$orderNum','$fname','$lname','$email_from','$contact','$address','$message','0')";        
        if($con->query($cmdsql) === TRUE){
            
           echo "<script>alert('Return Email Sent!'); </script>";

        }else{
          echo "<script>alert('QUERY FAILED!'); </script>";
        }
      }else{
        
         echo "<script>alert('Return Mail Not Sent!'); </script>";
      }
    }else{

      
    echo "<script>alert('Sending Request Failed!'); </script>";


    }
     echo '<script>window.location.href="../"</script>';
}