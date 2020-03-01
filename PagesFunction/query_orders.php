<?php
use PHPMailer\PHPMailer\PHPMailer;

if (isset($_POST['sendOrder'])) {







  $headers[] = 'MIME-Version: 1.0';
  $headers[] = 'Content-type: text/html; charset=iso-8859-1';





  include_once "PHPMailer/PHPMailer.php";

  $email_to = "admin@zerterra.com";
  $email_subject = "Email subject";


    $fname = $_POST['fname']; // required
    $lname = $_POST['lname']; 
    $email_from = $_POST['email']; // required
    $contact = $_POST['contact']; // not required
    $address = $_POST['address']; // required
    $message = $_POST['message']; // required


    $mail = new PHPMailer();
    $mail->setFrom($email);
    $mail->addAddress($email_to_support);
    $mail->Subject = $email_subject;
    $mail->isHTML(true);
    $mail->Body ="PRE-ORDER EMAIL FROM \r\n EMAIL:
    $email.\r\n FIRSTNAME:  $first_name .\r\n LASTNAME:  $last_name.\r\nCONTACT:  $contact .\r\nADDRESS:  $address.\r\n MESSAGE: $message";
    $mail->Header = implode("\r\n". $headers);

    if ($mail->send()){

      $subject_from_support = "Pre-Order\t[" . $orderNum . "]";
      $mailfromsupport = new PHPMailer();
      $mailfromsupport->setFrom("no-reply@zerterra.com");
      $mailfromsupport->addAddress($email);
      $mailfromsupport->Subject = $subject_from_support;
      $mailfromsupport->isHTML(true);
      $mailfromsupport->Body = "
      Please CLICK the link below for PRE-ORDER DETAILS:<br><br>

      <a href='http://zerterra.com/content/Pre-Order_Details.php?SerialNumber=$SNumber&Fname=$fname&Lname=$lname&email=$email_from&contactNum=contact&address=$address&message=$message&OrderNumber=$orderNum'>Click Here</a>
      ";

      $mailfromadmin->Header = implode("\r\n", $headers);

      if ($mailfromadmin->send()){


        $cmdsql= "INSERT INTO pending_order_list(OrderNumber,Firstname,Lastname,Email,Contact,Address,Message,is_approved) VALUES ('$orderNum','$fname','$lname','$email_from','$contact','$address','$message')";        
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


    }echo '<script>window.location.href="../index.php"</script>';
  }

  ?>