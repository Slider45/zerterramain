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
    <<div class="sidebar">
    <header><span>Name</header>
      <a href="index.php">
        <i class="fas fa-qrcode"></i>
        <span>Dashboard</span>
      </a>
      <a href="profile.php">
        <i class="fas fa-user"></i>
        <span>Profile</span>
      </a>
      <a href="acc_setting.php"  class="active">
        <i class="fas fa-pen-nib"></i>
        <span>Edit Profile</span>
      </a>
      <a href="login-setting.php">
        <i class="fas fa-cog"></i>
        <span>Login Setting</span>
      </a>
      <a href="request-repair.php">
        <i class="fas fa-inbox"></i>
        <span>Request Repair</span>
      </a>
      <a href="contact-us.php">
        <i class="fas fa-envelope-open-text"></i>
        <span>Contact Us</span>
      </a>
      <!-- <a href="#">
        <i class="far fa-envelope"></i>
        <span>Contact</span>
      </a> -->
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
              <div class="column is-3" id="label">Contact number</div>
              <div class="column" id="txtbox"><input class="input" name="contact"  value="<?php echo $contact; ?>"></div>
         </div>
      </div>
      <div class="control">
        <div class="columns">
              <div class="column is-3" id="label">Address </div>
              <div class="column" id="txtbox"><input class="input" name="address" value="<?php echo $address; ?>"></div>
         </div>
      </div>
      
      <div class="control" style="margin-top: 10px;">
        
                       <!-- <div class="select">
                         <select style="width: 1000px; padding-top:5px; border:solid 1px;" name="role"required="">
                          <option >Super Admin</option>
                          <option>Admin</option>
                         </select>
                       </div> -->
                     </div>
                   </div>
                   
                  <!--  <button type="submit" name="updated_user" class="button is-success">Save</button> -->
                  <div class="row">
                <button type="submit" name="updated_user" class="button is-rounded" id="save">Save Changes</button>
            </div>

                 </form>
             </div>

             <?php
}
?>


       

    </div>
    </section>

    <div>
        <p id="alrights">@2019 ZerterraPh</p>
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
  $email = $_POST['email'];
  
  
  $sql = "UPDATE tblusers SET Firstname='$fname',Lastname='$lname',Email='$email', Contact='$contact', Address='$address' WHERE id='$id' AND is_active='1'";
  if($con->query($sql) === TRUE){
    echo "<script>window.alert('RECORD IS UPDATED!');</script>";
    echo '<script>window.location.href="acc_setting.php"</script>';
  }else{
    echo "<script>window.alert('SOMETHING WENT WRONG, PLEASE TRY AGAIN!');</script>";
  }
  
}



?>
