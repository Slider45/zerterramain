<?php
include '../PagesFunction/connection.php';




use PHPMailer\PHPMailer\PHPMailer;

if (isset($_POST['sendOrder'])) {

  $template_file = "../content/Pre-Order_Details.php";
  if(file_exists($template_file)){

    $msg="";

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



    //email header for admin
    $email_to_admin = "admin@zerterra.com";
    $email_subject = "PRE-ORDER";
    $email_header ="PRE-ORDER FROM : ".$fname." <".$email_user.">\r\n";
    $email_header .= "MIME-Version: 1.0\r\n";
    $email_header .= "Content-type: text/html; charset=iso-8859-1\r\n";

    //email body for admin
    $email_message = "<html>
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

    //swap variable array
    $swap_var = array(
      "{TO_FNAME}" => $fname,
      "{TO_LNAME}" => $lname,
      "{USER_EMAIL}" => $email_user,
      "{USER_CONTACT}" => $contact,
      "{USER_ADDRESS}" => $address,
      "{ORDER_NUM}" => $orderNum_order
    );


    //return mail for user
    $email_to = $email_user;
    $email_subject_to_user = "PRE-ORDER [".$orderNum_order."]";
    $email_message_to_user = file_get_contents($template_file);
    $email_header_to_user = "EMAIL FROM : zerterra <no-reply@zerterra.com>\r\n";
    $email_header_to_user .= "MIME-Version: 1.0\r\n";
    $email_header_to_user .= "Content-type: text/html; charset=iso-8859-1\r\n";




    if( mail($email_to_admin, $email_subject, $email_message, $email_header) )
    {


     $cmdsql= "INSERT INTO pending_order_list(OrderNumber,Firstname,Lastname,Email,Contact,Address,Message,is_approved) VALUES ('$orderNum','$fname','$lname','$email_from','$contact','$address','$message','0')";        
     if($con->query($cmdsql) === TRUE){
      //send back message to user <code here>

      //swap variables
      foreach(array_keys($swap_var) as $key){
        if(strlen($key) > 2 && trim($key) != "")
          $email_message_to_user = str_replace($key, $swap_var[$key], $email_message_to_user);

      }



      if( mail($email_to, $email_subject_to_user, $email_message_to_user, $email_header_to_user )){



       // $msg='SENDING PRE-ORDER REQUEST SUCCESS<br>WE WILL CONTACT YOU AS SOON AS OUR TEAM IS AVAILABLE OR <br> YOU CAN SEND AS AN EMAIL AT<br>support@zerterra.com';
        // include '../Modals/pre_order_alert.php';
        echo "<script>alert('success mail');</script>";

      }else{
        //$msg='SENDING PRE-ORDER REQUEST FAILED<br>YOU CAN SEND AS AN EMAIL AT<br>support@zerterra.com';
        // include '../Modals/pre_order_alert.php';
        echo "<script>alert('failed mail');</script>";
      }
    }else{
     // $msg='SENDING PRE-ORDER REQUEST FAILED <br>YOU CAN SEND AS AN EMAIL AT<br>support@zerterra.com';
      // include '../Modals/pre_order_alert.php';
      echo "<script>alert('failed query');</script>";
    }

  }else{
   //$msg='SENDING PRE-ORDER REQUEST FAILED <br>YOU CAN SEND AS AN EMAIL AT<br>support@zerterra.com';
   // include '../Modals/pre_order_alert.php';
    echo "<script>alert('failed sending email to admin');</script>";
  }



//existance of template file
}else{
  //$msg='SENDING PRE-ORDER REQUEST FAILED (templatefile)<br>YOU CAN SEND AS AN EMAIL AT<br>support@zerterra.com';
  // include '../Modals/pre_order_alert.php';
  echo "<script>alert('failed template');</script>";

}





}



































?>




