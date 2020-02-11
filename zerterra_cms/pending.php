<?php
session_start();
include 'connection.php';
include 'Buttons/pendingButtonFunction.php'
?>
<!DOCTYPE html>
<html>
<title>Pending</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
<script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">

<link rel="stylesheet" href="sass/approved.css">

<body>
    <nav class="navbar" role="navigation" aria-label="main navigation">
        <div class="navbar-brand navbar-start">
            <a class="navbar-item" href="dashboard.php">
                <img src="images/logowhite.png" width="112" height="28" class="img-logo">
            </a>
        </div>
        <!-- search button -->
        <!-- <div>
                  <form action="/action_page.php">
                         <input type="text" placeholder="Search.." name="search" id="input">
                        <span> <button type="submit" id="search"><i class="fa fa-search"></i></button></span>
                 </form>
              </div> -->

        <div class="navbar-end">
            <div class="navbar-item">
                <div class="buttons">
                    <a class="button btn-user">
                        <i class="far fa-user"></i> &nbspUser
                    </a>
                    <a class="button btn-logout">
                        <i class="fas fa-sign-out-alt"></i> &nbspLogout
                    </a>
                </div>
            </div>
        </div>
        </div>
    </nav>


    <div class="w3-sidebar w3-bar-block w3-collapse w3-card w3-animate-left" style="width:200px;" id="mySidebar">
        <button class="w3-bar-item w3-button w3-large w3-hide-large" onclick="w3_close()" id="close">&times;</button>
        <a href="index.php" class="w3-bar-item w3-button" id="item-hover"><i class="fas fa-th-large"></i> &nbsp Dashboard</a>
        <a href="admin.php" class="w3-bar-item w3-button" id="item-hover"> <i class="fas fa-user-shield"></i> &nbsp
            Admin</a>
        <a href="users.php" class="w3-bar-item w3-button" id="item-hover"><i class="fas fa-user"></i> &nbsp Users</a>
        <a class="w3-bar-item w3-button w3-dropdown-hover" id="sendmodal"><i class="fas fa-cubes"></i> &nbsp Orders</a>
        <a href="request.php" class="w3-bar-item w3-button" id="item-hover"><i class="fas fa-envelope-open-text"></i>
            &nbsp Request</a>
        <a href="" class="w3-bar-item w3-button" id="item-hover"><i class="fas fa-hand-holding-usd"></i> &nbsp
            sales</a>
        <a href="#" class="w3-bar-item w3-button" id="item-hover"><i class="fas fa-print"></i> &nbsp Consolidate</a>
    </div>

    <div class="w3-main" style="margin-left:200px">
        <div class="w3-teal">
            <button class="w3-button w3-teal w3-xlarge w3-hide-large" onclick="w3_open()">&#9776;</button>
        </div>

        <div class="w3-container">
            <div class="columns">
                <div class="column">
                    <h1 class="button-category">PENDING</h1>
                </div>
                <!-- <div class="column">
                 
                   <h1 class="button" id="add-admin"><i class="fas fa-user-plus"></i> &nbspADD</h1>  
                </div> -->
            </div>

            <section class="section">
                <div class="container">
                    <table class="table">
                        <thead>
                            <tr>
                            <th>ID</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Contact</th>
                            <th>Option</th>
                            </tr>
                        </thead>

                        <tbody>
                        <?php

                         $sql = "SELECT * FROM pending_list WHERE is_pending='0'" ;
                          $result = $con->query($sql);
                            if ($result->num_rows > 0) {
                       while($row = $result->fetch_assoc()) 
                        {
                          $id = $row['id'];
                          $fname = $row['FirstName'];
                          $lname = $row['LastName'];
                          $email = $row['Email'];
                          $Contact = $row['ContactNumber'];
                          $Address = $row['Address'];
                          $Message = $row['Message'];
                          
                       
                        ?>
                        
                          <tr>
                   

                    <td>
                        <?php echo $id; ?>
                    </td>

                     <td>
                        <?php echo $fname; ?>
                    </td>

                     <td>
                        <?php echo $lname; ?>
                    </td>

                     <td>
                        <?php echo $email; ?>
                    </td>
                    <td>
                        <?php echo $Contact; ?>
                    </td>
                    <td>
                    <button data-target="#edit<?php echo $id;?>" class="button is-primary is-small modal-button" id="btn_update" name="btn-update"><i class="far fa-edit"></i>
                           </button>

                             <div id="edit<?php echo $id; ?>" class="modal" role="dialog">
                               <div class="modal-background"></div>
                      <div class="modal-card">
                        <header class="modal-card-head">
                          <p class="modal-card-title">EDIT ACCOUNT</p>
                          <button class="modal-close" aria-label="close"></button>
                        </header>
                         <form method="POST" class="modal-card-body" style="padding-bottom: 10px;">
              
                         <div class="field">
                        <div class="control">
                        <div class="field">
                      <input type="hidden" name="id" value="<?php echo $id; ?>">
                      </div>
                      </div>
                      <div class="control" >
                        <input class="input2" type="text"  name="fname"  value="<?php echo $fname; ?>" required="">
                      </div>
                      <div class="control">
                        <input class="input2" type="text" name="lname" value="<?php echo $lname; ?>" required="">
                      </div>
                      <div class="control">
                        <input class="input2" type="email" name="email" value="<?php echo $email; ?>"   required="">
                      </div>
                      <div class="control">
                        <input class="input2" type="text" name="address" value="<?php echo $Address; ?>"  required="">
                      </div>
                      <div class="control">
                        <input class="input2" type="number" name="contact" value="<?php echo $Contact; ?>"  required="">
                      </div>
                      <div class="control">
                        <input class="input2" type="text" name="message" value="<?php echo $Message; ?>"  required="">
                      </div>
                        <div class="control" style="margin-top: 10px;">
                        
                      </div>
                      </div>
                      
                      <button type="submit" name="updated_id" class="button is-success">Save</button>
                      <button class="button is-danger">Cancel</button>

                    </form>

                    </div>
                             </div>
                    <button data-target="#delete<?php echo $id;?>" class="button is-danger is-small modal-button"  id="btn_delete" name="btn-delete"><i class="fas fa-eye"></i>
                          </button></a>


                    <div id="delete<?php echo $id; ?>" class="modal" role="dialog">

                    <div class="modal-background"></div>
                    <div class="modal-card">
                      <header class="modal-card-head">
                        <p class="modal-card-title">CUSTOMER INFORMATION</p>
                        <button class="modal-close" aria-label="close"></button>
                      </header>
                       <form method="POST" action="pending.php" class="modal-card-body">
              
                       <div class="field">
                        <div class="control">
                        <div class="field">
                      <input type="hidden" name="edit_id" value="<?php echo $id; ?>">
                    </div>
                      </div>
                      <div class="control" >
                        <input class="input1" type="text"  name="edit_fname"  value="<?php echo $fname; ?>" required="" readonly >
                      </div>
                      <div class="control">
                        <input class="input1" type="text" name="edit_lname" readonly value="<?php echo $lname; ?>" required="">
                      </div>
                      <div class="control">
                        <input class="input1" type="email" name="edit_email"  readonly value="<?php echo $email; ?>"   required="">
                      </div>
                      <div class="control">
                        <input class="input1" type="text" name="edit_address" readonly value="<?php echo $Address; ?>"  required="">
                      </div>
                      <div class="control">
                        <input class="input1" type="number" name="edit_contact" readonly value="<?php echo $Contact; ?>"  required="">
                      </div>
                      <div class="control">
                        <input class="input1" type="text" name="edit_message" readonly value="<?php echo $Message; ?>"  required="">
                      </div>
                        <div class="control" style="margin-top: 10px;">                  
                      </div>
                      </div>
                      <div style = " margin-left: 500px; margin-right: auto;">
                         <button  class="button is-success" name="btnapproved">APPROVE</button>
                      </div>
                    </form>

                    </div>
                  </div>
                    </div>
                      </td>
                      

  

</tr>

        <?php 
      
  }
}    
   
    if(isset($_POST['btnapproved'])){
      $edit_id = $_POST['edit_id'];
      $fname = $_POST['edit_fname'];
      $lname = $_POST['edit_lname'];
      $email= $_POST['edit_email'];
      $Address = $_POST['edit_address'];
      $Contact= $_POST['edit_contact'];
      $Message= $_POST['edit_message'];
      // echo "<script>window.alert('$email');</script>";
  
  
  
      $sql = "UPDATE pending_list SET FirstName='$fname',LastName='$lname',Message='$Message', Address='$Address' ,ContactNumber='$Contact',Email='$email', is_pending='1' WHERE id='$edit_id'";
      if($con->query($sql) === TRUE){
  
  
     $sql ="INSERT INTO approve_list(pendingID,FirstName,LastName,Email,ContactNumber,Address,Message) VALUES ('$id','$fname','$lname','$email','$Address','$Contact','$Message')";
            if($con->query($sql) === TRUE){
              
            }else{
              
              echo "<script>window.alert('Saving new record failed!');</script>";
            }
  
        echo "<script>window.alert('RECORD IS UPDATED!');</script>";
        echo '<script>window.location.href="pending.php"</script>';
            } else{
              echo "<script>window.alert('SOMETHING WENT WRONG, PLEASE TRY AGAIN!');</script>";
            }
         
        }         
                  ?>

                        </tbody>
              
                    </table>
                </div>
            </section>

        
        </div>
        
        <!-- modal transaction -->

        <div class="container" id="modal-container">

            <div id="serv-modal1" class="modal  modal-fx-slideTop">
                <div class="modal-background"></div>
                <div class="modal-content1">
                    <div class="modal-card1">

                        <section class="modal-card-body1" id="modal-card-body">
                            <!-- Content ... -->
                            <div class="field">
                                <div class="control">
                                    <div class="card" id="modal-card">
                                        <div class="card-content" id="trans-content">
                                            <button class="delete" aria-label="close" id="close9"></button>
                                            <div class="columns is-mobile">
                                                <div class="column is-6">
                                                    <a href="pending.php">
                                                        <div class="card" id="card-pending"
                                                            style="background:url(images/pendingicon.png);  background-size: 100% 100%; background-repeat: no-repeat; background-size: cover;">
                                                            <div class="card-content">
                                                                <a href="pending.php" id="pending">
                                                                    PENDING
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="column is-6">
                                                    <a href="approved.php">
                                                        <div class="card" id="card-approve"
                                                            style="background:url(images/approvedicon.png);  background-size: 100% 100%; background-repeat: no-repeat; background-size: cover;">
                                                            <div class="card-content">
                                                            <a href="approved.php" id="pending">
                                                                    APPROVED
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <button class="button is-success is-medium"  aria-label="close" id="close9">Close</button> -->
                                </div>
                        </section>

                    </div>
                </div>
            </div>




<script>
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
}
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}
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

        

</body>
</html>