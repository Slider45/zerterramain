<?php
include '../PagesFunction/connection.php';




use PHPMailer\PHPMailer\PHPMailer;

if (isset($_POST['sendOrder'])) {




  $sql = "SELECT id FROM pending_order_list";
  $result=mysqli_query($con,$sql);
  $pendingCount=mysqli_num_rows($result);
  $pendingCount++;


  $orderNum_order=date("Ymd-His-") . 0 .$pendingCount;

    $fname = $_POST['fname_order']; // required
    $lname = $_POST['lname_order']; 
    $email_from = $_POST['email_order']; // required
    $contact = $_POST['contact_order']; // not required
    $address = $_POST['address_order']; // required
    $message = $_POST['message_order']; // required
    


    $headers[] = 'MIME-Version: 1.0';
    $headers[] = 'Content-type: text/html; charset=iso-8859-1';





    include_once 'PHPMailer/PHPMailer.php';

    $email_to_admin = "admin@zerterra.com";
    $email_subject = "PRE-ORDER";




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


        $cmdsql= "INSERT INTO pending_order_list(OrderNumber,Firstname,Lastname,Email,Contact,Address,Message,is_approved) VALUES ('$orderNum','$fname','$lname','$email_from','$contact','$addres','$message')";        
        if($con->query($cmdsql) === TRUE)
        {
          $msg='PRE-ORDER SENT!';
          include 'Modals/order_alert.php';

        }else{
          $msg='<p style="color: red;" class="is-size-4">FAILED SENDING PRE-ORDER!</p>';
          include 'Modals/order_alert.php';
        }
      }else{
        
        $msg='<p style="color: red;" class="is-size-4">Return Mail Not Sent!</p>';
        include 'Modals/order_alert.php';
      }
    }else{

      
      $msg='<p style="color: red;" class="is-size-4">Sending Request Failed!</p>';
      include 'Modals/order_alert.php';


    }
    echo '<script>window.location.href="../"</script>';
  }

  ?>