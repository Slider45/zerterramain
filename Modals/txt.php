
                  <?php

if (isset($_POST["sendmsg"])) {
  $fname = $_POST['fname'] ;
  $lname = $_POST['lname'] ;
  $email = $_POST['email'] ;
  $subject = $_POST['subject'] ;
  $message = $_POST['msg_body'] ;

  $to = "support@zerterra.com";
  $subject = $subject ;


















  $body = "From: $fname $lname \n >> E-Mail: <$email>\n\n Message:\n $message";

  $header = "From: $email \r\n";
     //    $header .= "Cc:afgh@somedomain.com \r\n";

if((!$fname===null) && (!lname===null ) && (!$email===null) &&(!$message===null)){
    if($subject===null){
      $subject = "No subject";
      $mail = mail ($to,$subject,$body,$header);
      if( $mail == true ) {
        $result =  " Thank You! Your request has been submitted successfully. " ;
      }else{
        $result = " Sorry there was an error sending your message. \n Please try again later " ;
      }
    
?>  
 <div class="container">
                         
<div id="serv-modal1" class="modal  modal-fx-slideTop">
  <div class="modal-background"></div>
  <div class="modal-content1">
   <div class="modal-card1">
   
    <section class="modal-card-body1" id="modal-card-body">
      <!-- Content ... -->
      <div class="field">
        <div class="control">
         <h1 id="text-content"><?php echo $result ; ?></h1>

        
       </div>
       <button class="button is-success is-medium"  aria-label="close" id="close9">Close</button>
     </div>
   </section>
   <!-- <footer class="modal-card-foot1" id="modal-card-foot">
    
  </footer> -->
</div>
</div>
</div>
</div>
<?php
    
    }else{
      $mail = mail ($to,$subject,$body,$header);

      if( $mail == true ) {
        $result =  " Thank You! Your request has been submitted successfully. " ;
      }else{
        $result = " Sorry there was an error sending your message. \n Please try again later " ;
      }
    
?>  
 <div class="container">
                         
<div id="serv-modal1" class="modal  modal-fx-slideTop">
  <div class="modal-background"></div>
  <div class="modal-content1">
   <div class="modal-card1">
   
    <section class="modal-card-body1" id="modal-card-body">
      <!-- Content ... -->
      <div class="field">
        <div class="control">
         <h1 id="text-content"><?php echo $result ;    }
}else{
  ?></h1>

        
       </div>
       <button class="button is-success is-medium"  aria-label="close" id="close9">Close</button>
     </div>
   </section>
   <!-- <footer class="modal-card-foot1" id="modal-card-foot">
    
  </footer> -->
</div>
</div>
</div>
<<<<<<< HEAD
</div>

<?php
    }
  }
}
?>
=======
</div>
>>>>>>> ca195995ebe01f822af726c7e7d4750a8b8f3407
