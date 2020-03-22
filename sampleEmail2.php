<?php
include '../PagesFunction/connection.php';




use PHPMailer\PHPMailer\PHPMailer;

if (isset($_POST['sendOrder'])) {


 $template_file = "../content/samplecontent.php";

  $sql = "SELECT id FROM pending_order_list";
  $result=mysqli_query($con,$sql);
  $pendingCount=mysqli_num_rows($result);
  $pendingCount++;


  $orderNum_order=date("Ymd-His-") . 0 .$pendingCount;

    $fname = $_POST['fname_order']; // required
    $lname = $_POST['lname_order']; 
    $email_user = $_POST['email_order']; // required
    $contact = $_POST['contact_order']; // not required
    $address = $_POST['address_order']; // required
    $message_from_user = $_POST['message_order']; // required
    


    $headers[] = 'MIME-Version: 1.0';
    $headers[] = 'Content-type: text/html; charset=iso-8859-1';





    include_once 'PHPMailer/PHPMailer.php';

    $email_to_admin = "admin@zerterra.com";
    $email_subject = "PRE-ORDER";




    $mail = new PHPMailer();
    $mail->setFrom($email_user);
    $mail->addAddress($email_to_admin);
    $mail->Subject = $email_subject;
    $mail->isHTML(true);
    $mail->Body ="<html>
    <body>
    <h1>PRE-ORDER EMAIL FROM : ".$fname." ".$lname." <".$email_user."></h1>
    <h2>DETAILS:</h2>
    <p>Firstname: ".$fname."</p>
    <p>Lastname: ".$lname."</p>
    <p>Contact: ".$contact."</p>
    <p>Address: ".$address."</p>
    <p>Message: ".$message_from_user."</p>
    </body>
    </html>";

    $mail->Header = implode("\r\n". $headers);

    if ($mail->send()){

      $subject_from_support = "Pre-Order\t[" . $orderNum . "]";
      $mailfromadmin = new PHPMailer();
      $mailfromadmin->setFrom("no-reply@zerterra.com");
      $mailfromadmin->addAddress($email_from);
      $mailfromadmin->Subject = $subject_from_support;
      $mailfromadmin->isHTML(true);
      $mailfromadmin->Body = file_get_contents($template_file);
      
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

  ?>