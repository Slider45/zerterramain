


<?php


if(!empty($_POST["email"]) && !empty($_POST["password"]))
 {
  $name = $_POST["email"];
  $password = $_POST["password"];
  $sql = "SELECT * FROM tblusers_list where email = '" . $name . "' AND password = '" . $password . "' AND is_active = '1' ";  
  $result = mysqli_query($con,$sql);  
  $user = mysqli_fetch_array($result);  
  if($user)   
  {  
   if(!empty($_POST["remember"]))   
   {  
    setcookie ("member_email",$name,time()+ (10 * 365 * 24 * 60 * 60));  
    setcookie ("member_password",$password,time()+ (10 * 365 * 24 * 60 * 60));
    $_SESSION["userEmail"] = $name;
   }  
   else  
   {  
    if(isset($_COOKIE["member_email"]))   
    {  
     setcookie ("member_email","");  
    }  
    if(isset($_COOKIE["member_password"]))   
    {  
     setcookie ("member_password","");  
    }  
    $_SESSION["userEmail"] = $name;
   }  
   header("location:zerterraph_user/"); 
  }  
  else  
  {  
   $message = "Invalid Login";  

?>
<script>
   document.querySelectorAll('.modal-button').forEach(function(el) {
      el.addEventListener('click', function() {
        var target = document.querySelector(el.getAttribute('data-target'));

        target.classList.add('is-active');


        target.querySelector('.modal-close').addEventListener('click', function(){
          target.classList.remove('is-active');
        });
      });
    });


  </script>

<div class="modal" id="modalnotif">
  <div class="modal-background"></div>
  <div class="modal-content">
    <?php if(isset($message)) { echo $message; } ?>->
    
  </div>
  <button class="modal-close is-large" aria-label="close"></button>
</div>

<?php


  } 
 }
 else
 {
  $message = "Both are Required Fields";


?>
<script>
   document.querySelectorAll('.modal-button').forEach(function(el) {
      el.addEventListener('click', function() {
        var target = document.querySelector(el.getAttribute('data-target'));

        target.classList.add('is-active');


        target.querySelector('.modal-close').addEventListener('click', function(){
          target.classList.remove('is-active');
        });
      });
    });


  </script>

<div class="modal" id="modalnotif">
  <div class="modal-background"></div>
  <div class="modal-content">
    <?php if(isset($message)) { echo $message; } ?>->
    
  </div>
  <button class="modal-close is-large" aria-label="close"></button>
</div>

<?php


 }

?>