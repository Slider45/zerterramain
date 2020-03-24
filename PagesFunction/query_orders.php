<?php
include '../PagesFunction/connection.php';




use PHPMailer\PHPMailer\PHPMailer;

if (isset($_POST['sendOrder'])) {

//get the template files
 $template_file = file_get_contents('../content/Pre-Order_Details.php');






 $sql = "SELECT id FROM pending_order_list";
 $result=mysqli_query($con,$sql);
 $pendingCount=mysqli_num_rows($result);
 $pendingCount++;


 $orderNum=date("Ymd-His-") . 0 .$pendingCount;

    $fname = $_POST['fname_order']; // required
    $lname = $_POST['lname_order']; 
    $email_user = $_POST['email_order']; // required
    $contact = $_POST['contact_order']; // not required
    $address = $_POST['address_order']; // required
    $message_from_user = $_POST['message_order']; // required
    


//swap variables
    $variables = array(
      "{{ FIRSTNAME }}" => $fname,
      "{{ LASTNAME }}" => $lname,
      "{{ EMAILADD }}" => $email_user,
      "{{ CONTACT }}" => $contact,
      "{{ ADDRESS }}" => $address,
      "{{ ORDERNUMBER }}" => $orderNum

    );

    foreach ($variables as $key => $value)
     $template_file = str_replace($key, $value,  $template_file);

   include_once 'PHPMailer/PHPMailer.php';

   $subject = 'PRE-ORDER ['.$orderNum.']';


   // $headers = "MIME-Version: 1.0\r\n";
   // $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

   $headers_for_support = "";
   $headers_for_support .= "From: ".$email_user."\r\n";
   $headers_for_support .= "Reply-To: ".$email_user." \r\n" ."X-Mailer: PHP/" . phpversion();
   $headers_for_support .= 'MIME-Version: 1.0' . "\r\n";
   $headers_for_support .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";  

   //email for support from user
   $email_message = "<html>
   <body>
   <h1>PRE-ORDER EMAIL FROM : ".$fname." ".$lname." <".$email_user."></h1>
   <h2>DETAILS:</h2>
   <p>Order #: ". $orderNum ."</p>
   <p>Firstname: ".$fname."</p>
   <p>Lastname: ".$lname."</p>
   <p>Contact: ".$contact."</p>
   <p>Address: ".$address."</p>
   <p>Message: ".$message_from_user."</p>
   
   </body>
   </html>";





   if(mail("support@zerterra.com", $subject, $email_message, $headers_for_support)){


    $headers = "";
    $headers .= "From: zerterra <no-reply@zerterra.com> \r\n";
    $headers .= "Reply-To: no-reply@zerterra.com\r\n" ."X-Mailer: PHP/" . phpversion();
    $headers .= 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";  

    if(mail($email_user, $subject, $template_file, $headers)){

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

        //error message if the query failed
      $msg='<div class="notification is-danger alert">
      <center>
      <strong>WHOPS, SOMETHING WENT WRONG<br>SORRY FOR INCONVINIENT!<br>DON\'T WORRY WE ALREADY RECIEVED YOUR PRE-ORDER REQUEST.<br>FOR MORE CONCERN YOU CAN SEND US AN EMAIL AT<br>support@zerterra.com</strong> 
      </center>
      </div>';

      include '../Modals/pre_order_alert.php';

    }



  }else{

  //error message if the email for user if failed to send
   $msg='<div class="notification is-danger alert">
   <center>
   <strong>WHOPS, SOMETHING WENT WRONG<br>SORRY FOR INCONVINIENT!<br>YOU MAY NOT BE ABLE TO RECIEVED OUR CONFIRMATION EMAIL<br>DON\'T WORRY WE RECEIVED YOUR REQUEST. WE WILL CONTACT YOU AS SOON AS OUR TEAM IS AVAILABLE.<br>FOR MORE CONCERN YOU CAN SEND US AN EMAIL AT<br>support@zerterra.com</strong> 
   </center>
   </div>';


   include '../Modals/pre_order_alert.php';


 }



// }else{

//       //error message if the email for support is failed to send
//  $msg='<div class="notification is-danger alert">
//  <center>
//  <strong>WHOPS, SOMETHING WENT WRONG<br>SORRY FOR INCONVINIENT!<br>FOR MORE CONCERN YOU CAN SEND US AN EMAIL AT<br>support@zerterra.com</strong> 
//  </center>
//  </div>';

//  include '../Modals/pre_order_alert.php';

//     // echo "<script>alert('failed mail');</script>";
// }













?>