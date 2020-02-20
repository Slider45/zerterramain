<?php

$msg="";
use PHPMailer\PHPMailer\PHPMailer;


    if(($Content = file_get_contents("content/requestMailtoUserContent.php")) === false) {
    $Content = "";

    
    
//   $f_name = $_POST['f_name'] ;
//   $email = $_POST['email'] ;
//   $subject = $_POST['subject'] ;
//   $messageC = $_POST['messageC'] ;

//   $to = "paul.salcedo13@gmail.com";
//   $subject = $subject ;
  
  
  
  
//   $body = content.php;
  

  //$body = "From: $f_name\n > E-Mail: $email\n Message:\n $message";

//   $header = array(
//     'From' => $email,
//     'Reply-To' => 'support@zerterra.com',
//     // 'X-Mailer' => 'PHP/' . phpversion()
// );

$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=iso-8859-1';

               





 include_once "PHPMailer/PHPMailer.php";

                $mail = new PHPMailer();
                $mail->setFrom('support@zerterra.com');
                $mail->addAddress($email, $fname);
                $mail->Subject ='REQUEST REPAIR [Request #: $requestnum]' ;
                $mail->isHTML(true);
                $mail->Body = $Content;
                $mail->Header = implode("\r\n", $headers);


   if ($mail->send())
                    echo "<script>alert ('You have been registered! Please verify your email!');</script>";


                   
                else
                     echo "<script>alert ('Something wrong happened! Please try again!');</script>";
                   
 
}
?>
  


