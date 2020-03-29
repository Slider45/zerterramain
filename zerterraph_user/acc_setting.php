<?php

session_start();


include '../PagesFunction/connection.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:600&display=swap" rel="stylesheet">
  <link rel="icon" href="images/plainlogo.png" type="image/x-icon" />
  <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
  <script src="js/homeJS.js"></script>
  <link rel="stylesheet" type="text/css" href="sass/acc_setting.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
  <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://unpkg.com/bulma-modal-fx/dist/css/modal-fx.min.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-flat.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <title>zerTERRA</title>
</head>

<body>

  <!--NAVBAR-->


  <?php
  include 'user-header.php';

  ?>

  <!-- script navbar -->


  <script>
    (function () {
      var burger = document.querySelector('.burger');
      var nav = document.querySelector('#' + burger.dataset.target);
      burger.addEventListener('click', function () {
        burger.classList.toggle('is-active');
        navMenu.classList.toggle('is-active');

      });


    })();
  </script>

  <!-- END OF NAVBAR -->

  <!-- SIDE BAR -->
  <div class="sidebar">
    <header><span><figure class="image is-128x128" style="margin-top: 70px;">
      <img class="is-rounded" src="images\avatar.png">
    </figure></header>
    <a href="index.php">
      <i class="fas fa-qrcode"></i>
      &nbspDashboard
    </a>
    <a href="profile.php" >
      <i class="fas fa-user"></i>
      &nbspProfile
    </a>
    <a href="acc_setting.php"  class="active">
      <i class="fas fa-pen-nib"></i>
      &nbspEdit Profile
    </a>
    <a href="login-setting.php">
      <i class="fas fa-cog"></i>
      &nbspLogin Setting
      <a href="request-repair.php">
        <i class="fas fa-inbox"></i>
        &nbspRequest Repair
      </a>
      <a href="contact-us.php">
        <i class="fas fa-envelope-open-text"></i>
        &nbspContact Us
      </a>
    </div>
    <script>
      function myAccFunc() {
        var x = document.getElementById("demoAcc");
        if (x.className.indexOf("w3-show") == -1) {
          x.className += " w3-show";
          x.previousElementSibling.className += " w3-green";
        } else { 
          x.className = x.className.replace(" w3-show", "");
          x.previousElementSibling.className = 
          x.previousElementSibling.className.replace(" w3-green", "");
        }
      }

      function myAccFunc1() {
        var x = document.getElementById("demoAcc1");
        if (x.className.indexOf("w3-show") == -1) {
          x.className += " w3-show";
          x.previousElementSibling.className += " w3-green";
        } else { 
          x.className = x.className.replace(" w3-show", "");
          x.previousElementSibling.className = 
          x.previousElementSibling.className.replace(" w3-green", "");
        }
      }
    </script>

    <!-- END OF SIDE BAR -->
    <section class="section">
      <div class="container" id="form_edit">
        <div class="header">
          <h1 class="title">
           PERSONAL INFORMATION
         </h1>
       </div>

       <?php
       $userID = $_SESSION['userID'];
       $sql = "SELECT * FROM tblusers WHERE id='$userID' AND is_active='1'";
       $res_data = $con->query($sql);
       while($row = mysqli_fetch_array($res_data)){
        $id = $row['id'];
        $serialNum = $row['SerialNumber'];
        $fname = $row['Firstname'];
        $lname = $row['Lastname'];
        $contact = $row['Contact'];
        $address = $row['Address']; 
        $email = $row['Email'];
        $rdays = $row['RemainingDays'];
        $dateReg = $row['DateRegistered'];
        $dateEnd= $row['DateExpired'];

        ?>

        <div id="view<?php echo $id; ?>" role="dialog" class="form-edit">
        
          <form method="POST" style="padding-bottom: 10px;">

            <div class="field">
              <div class="control">
                <div class="field">
                  <input type="hidden" name="id"  value="<?php echo $id; ?>">
                </div>
              </div>
              <div class="control">
               <div class="columns">
                <div class="column is-3" id="label">Serial Number:</div>
                <div class="column" id="txtbox"><input class="input" name="serialNum"   value="<?php echo $serialNum;?>" readonly ></div>
              </div>
            </div>
            <div class="control" >
             <div class="columns">
              <div class="column is-3" id="label">Firstname</div>
              <div class="column" id="txtbox"><input class="input"  name="fname"  value="<?php echo $fname; ?>"></div>
            </div>
          </div>
          <div class="control" >
           <div class="columns">
            <div class="column is-3" id="label">Lastname</div>
            <div class="column" id="txtbox"><input class="input" name="lname"   value="<?php echo $lname; ?>"></div>
          </div>
        </div>


        <div class="control">
          <div class="columns">
            <div class="column is-3" id="label">Contact #</div>
            <p class="control has-icons-right">
              <box id="box">
                <input type="text" placeholder="+63" style="width:38px; border:none;padding-top: 6px;padding-bottom: 11px;margin-left:10px;padding-left:6px;font-weight: bold;font-family: Montserrat; 7px;border-bottom: solid 1px;" disabled="disabled"><input class="input"  minlength="10" maxlength="10"  id="contact_user" name="contact_user" style="width:558px;padding-left:2px;" value="<?php echo $contact; ?>">
                <span class="icon is-medium is-right">
                  <i class="fas fa-check" id="iconcheck" style="display: none;color: #48c774;margin-top: 10px;"></i>
                  <i class="fas fa-times" id="icontimes" style="display:none;color:#f14668;margin-top: 10px;"></i>
                  
                </span>
              </box>
            </p>
            
          </div>
        </div>
        <p id="lblwarning" style="text-align: center" class="is-size-7"></p>
        
      <div class="control">
        <div class="columns">
          <div class="column is-3" id="label">Address </div>
          <div class="column" id="txtbox"><input class="input" name="address" value="<?php echo $address; ?>"></div>
        </div>
      </div>
      
      <div class="control" style="margin-top: 10px;">


      </div>
    </div>


    <div class="row">
      <button type="submit" name="updated_user" class="button is-rounded is-primary" id="save">Save Changes</button>
    </div>

  </form>
</div>

<?php
}
?>




</div>
</section>

<div class="footer">
  <p>@2019 ZerterraPh</p>
</div>

</body>

</html>


<?php



if(isset($_POST['updated_user'])){

  $id = $_POST['id'];
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $contact = $_POST['contact'];
  $address = $_POST['address']; 
//   $email = $_POST['email'];
  
  
  $sql = "UPDATE tblusers SET Firstname='$fname',Lastname='$lname',Email='$email', Contact='$contact', Address='$address' WHERE id='$id' AND is_active='1'";
  if($con->query($sql) === TRUE){

    $msg='RECORD  <p style="color: green;" class="is-size-4">'.  $fname.' '.$lname . '</p> HAS BEEN UPDATED!';
    include 'Modals/acc_settings_alert.php';

  }else{
   $msg='<p style="color: red;" class="is-size-4">SOMETHING WENT WRONG, PLEASE TRY AGAIN!</p>';
   include 'Modals/acc_settings_alert.php';
 }

}

?>


<script>



  $(document).ready(function() {
    $("#contact_user").keyup(check);
   

  });
  function check() {


    var usernum = $("#contact_user").val();

    var btncheck = $("#save");
    var wrning = $("#lblwarning");
    var icon1 = $("#iconcheck");
    var icon2 = $("#icontimes");
    var regx =/^(9)\d{9}/;

    if (regx.test(usernum)){
      icon1.show();  
      icon2.hide();
      wrning.text("");  

      wrning.hide();
      btncheck.attr("disabled", false);

    }else if(usernum==""){
      icon1.hide(); 
      icon2.show();
      wrning.text("Enter your number!"); 
      wrning.show();
      wrning.css("color","#f14668");
    }else{

      icon1.hide(); 
      icon2.show();

      wrning.show();
      wrning.text("INVALID NUMBER!");
      wrning.css("color","#f14668");
      btncheck.attr("disabled", true);




    }

  }


  
</script>