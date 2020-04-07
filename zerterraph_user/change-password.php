
<?php

session_start();


include '../PagesFunction/connection.php';
$userID=$_SESSION['userID'];

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
    $pass = $row['Password'];
    $rdays = $row['RemainingDays'];
    $dateReg = $row['DateRegistered'];
    $dateEnd= $row['DateExpired'];
}




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
    <link rel="stylesheet" type="text/css" href="sass/change-password.css">
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
    $(document).ready(function () {
        var burger = document.querySelector('.burger');
        var nav = document.querySelector('#' + burger.dataset.target);
        burger.addEventListener('click', function () {
            burger.classList.toggle('is-active');
            navMenu.classList.toggle('is-active');

        });


    });

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
<a href="profile.php"  class="active">
    <i class="fas fa-user"></i>
    &nbspProfile
</a>
<a href="acc_setting.php">
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
                CHANGE PASSWORD
            </h1>
        </div>

        <div class="container1">
            <form method="POST" action="change-password.php">
                <div class="row">
                    <div class="col-25">
                        <label for="currentpass"></label>
                    </div>
                    <div class="col-75">
                        <input type="hidden" name="id"  value="<?php echo $id ?>" readonly>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="currentpass">Current Password </label>
                    </div>
                    <div class="col-75">
                        <input type="hidden" id="oldpass" name="oldpassfromDB" placeholder="" value="<?php echo $pass;?>">
                        <p class="control has-icons-right">
                         <input type="text" id="currpass" name="oldpass" placeholder="Enter old password" required="">
                         <span class="icon is-medium is-right">
                            <i class="fas fa-check" id="iconcheck" style="display: none;color: #48c774;margin-top: 10px;"></i> 
                            <i class="fas fa-times" id="icontimes" style="display:none;color:#f14668;margin-top: 10px;"></i>
                            <p id="lblwarning" style="text-align: center; font-family: 'Montserrat';" class="is-size-6 "></p>
                        </span>
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label for="newpass">New Password </label>
                </div>
                <div class="col-75">
                    <p class="control has-icons-right">
                    <input type="password" id="newpass" name="newpass" placeholder="" required=""> 
                        <span class="icon is-medium is-right">
                            <i class="fas fa-check" id="iconcheck2" style="display: none;color: #48c774;margin-top: 10px;"></i> 
                            <i class="fas fa-times" id="icontimes2" style="display:none;color:#f14668;margin-top: 10px;"></i>
                            <p id="lblwarning2" style="text-align: center; font-family: 'Montserrat';" class="is-size-6 "></p>
                        </span>
                    </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label for="retypepass">Re-type New Password </label>
                </div>
                <div class="col-75">
                    <p class="control has-icons-right">
                        <input type="password" id="cnewpass" name="cnewpass" placeholder="" required="">
                        <span class="icon is-medium is-right">
                            <i class="fas fa-check" id="iconcheck1" style="display: none;color: #48c774;margin-top: 10px;"></i> 
                            <i class="fas fa-times" id="icontimes1" style="display:none;color:#f14668;margin-top: 10px;"></i>
                            <p id="lblwarning1" style="text-align: center; font-family: 'Montserrat';" class="is-size-6 "></p>
                        </span>
                    </div>
                </div>
                <div class="row">
                    <button type="submit" class="button is-rounded is-success" name="update" id="save" disabled="disabled">Save Changes</button>
                </div>
                <div class="row">
                    <a href="login-setting.php" class="button is-info is-rounded is-hovered" id="back"> Back </a>
                </div>

            </form>
        </div>

    </div>
</section>
<?php


?>
<div>
    <p id="alrights">@2019 ZerterraPh</p>
</div>

<script>

    $(document).ready(function() {
        $("#currpass").keyup(check);
        $("#cnewpass").keyup(newpass);

    });
    function check() {


        var password1 = $("#oldpass").val();
        var password2 = $("#currpass").val();
        var btncheck = $("#save");
        var wrning = $("#lblwarning");
        var icon1 = $("#iconcheck");
        var icon2 = $("#icontimes");


        if(password2 == password1) {
            icon1.show();  
            icon2.hide();
            wrning.text("");  
            
            wrning.hide();
            btncheck.attr("disabled", false);

        }else if(password2==""){
            icon1.hide(); 
            icon2.hide();
            wrning.text(""); 
            wrning.hide();
        }else{

            icon1.hide(); 
            icon2.show();
            
            wrning.show();
            wrning.text("PASSWORD NOT MATCHED!");
            wrning.css("color","#f14668");
            btncheck.attr("disabled", true);


        }

    }

      function newpass() {


        var password1 = $("#newpass").val();
        var password2 = $("#cnewpass").val();
        var password3 = $("#oldpass").val();
        var btncheck = $("#save");
        var wrning = $("#lblwarning1");
        var icon1 = $("#iconcheck1");
        var icon2 = $("#icontimes1");


        if(password1 == password2) {
            icon1.show();  
            icon2.hide();
            wrning.text("PASSWORD MATCHED!");  
            wrning.css("color","#48c774");
            wrning.show();
            btncheck.attr("disabled", false);

        }if(password3 == password2) {
            icon1.hide();  
            icon2.show();
            wrning.text("CANNOT USED OLD PASSWORD!");  
            wrning.css("color","#f14668");
            wrning.show();
            btncheck.attr("disabled", true);

        }else if(password2==""){
            icon1.hide(); 
            icon2.hide();
            wrning.text(""); 
            wrning.hide();

        

        }else {
            icon1.hide(); 
            icon2.show();

            wrning.show();
            wrning.text("PASSWORD NOT MATCHED!");
            wrning.css("color","#f14668");
            btncheck.attr("disabled", true);

        

            }
        
        
      }






</script>

</body>

</html>

<?php

if(isset($_POST['update'])){
    $id = $_POST['id'];
    $oldpass = $_POST['oldpass'];
    $newpass = $_POST['newpass'];
    $cnewpass = $_POST['cnewpass'];
    
    if ($newpass === $cnewpass){

        $sql = "UPDATE tblusers SET Password='$newpass' WHERE id='$id' AND Password='$oldpass'";
        if($con->query($sql) === TRUE){
          $msg='PASSWORD  <p style="color: green;" class="is-size-4"></p> HAS BEEN UPDATED!';
          include 'Modals/change_password_alert.php';
          
      }else{
         $msg='<p style="color: red;" class="is-size-4">SOMETHING WENT WRONG, PLEASE TRY AGAIN!</p>';
         include 'Modals/change_password_alert.php';
     }

 }
}


?>