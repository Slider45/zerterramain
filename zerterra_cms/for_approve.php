<?php
session_start();
if(!isset($_SESSION["admin"]))
{
 header("location:../Log-in.php");
 

}
include '../PagesFunction/connection.php';
// include 'connection.php';
include 'Buttons/approvedQuery.php';


$id = $_SESSION['id'];

// $ran1 = rand(0,9999999);
// $ran2 = rand(1,999);
// $SerialNum = $ran1 . "-" . $ran2;


$sql = "SELECT id FROM approved_order_list";
$result=mysqli_query($con,$sql);
$approvedCount=mysqli_num_rows($result);
$approvedCount++;


$SerialNum=date("Ymd-")  .$approvedCount;



?>


<!DOCTYPE html>
<html>
<title>Approved</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
<script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">

<link rel="stylesheet" href="sass/approved.css">

<body>
  <?php
  include 'Pages/approvedViewPage.php'; 
  ?>
  <nav class="navbar" role="navigation" aria-label="main navigation">
    <div class="navbar-brand navbar-start">
      <a class="navbar-item" href="index.php">
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
                      <i class="far fa-user"></i> &nbsp<?= $_SESSION['admin']?>
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
            <a href="index.php" class="w3-bar-item w3-button" id="item-hover" ><i class="fas fa-th-large"></i> &nbsp Dashboard</a>
            <a href="admin.php" class="w3-bar-item w3-button" id="item-hover"> <i class="fas fa-user-shield"></i> &nbsp Admin</a>
            <a href="users.php" class="w3-bar-item w3-button" id="item-hover"><i class="fas fa-user"></i> &nbsp Users</a>
            <a class="w3-bar-item w3-button w3-dropdown-hover modal-button" id="sendmodal" data-target="#ordersModal" aria-haspopup="true"><i class="fas fa-cubes"></i> &nbsp Orders</a>
            <a href="request.php" class="w3-bar-item w3-button" id="item-hover"><i class="fas fa-envelope-open-text"></i> &nbsp Request</a>
            <a href="sales.php" class="w3-bar-item w3-button" id="item-hover"><i class="fas fa-hand-holding-usd"></i> &nbsp Sales</a>
            <button onclick="document.getElementById('id01').style.display='block'" href="consolidate.php" class="w3-bar-item w3-button" id="item-hover" ><i class="fas fa-print"></i> &nbsp Consolidate</button>
          </div>

          <div class="w3-main" style="margin-left:200px">
            <div class="w3-teal">
              <button class="w3-button w3-teal w3-xlarge w3-hide-large" onclick="w3_open()">&#9776;</button>
            </div>

            <div class="w3-container">
              <div class="columns">
                <div class="column">
                  <h1 class="button-category">FOR APPROVE</h1>
                </div>
                <div class="column">
                 <!-- <div class="columns">
                    <div class="column">
                        <a href="pending.php">
                           <button style="margin-top: 30px ; margin-left: 400px; font-family: unset; font-size:16px;" id="btn-add" class="button is-danger is-small">
                            <i class="fas fa-exclamation-circle"></i> &nbspPENDING</button>
                       </a>
                     </div> -->
                    <!-- <div class="column">
                        <a href="delivered.php">
                             <button style="margin-top: 30px ; font-family: unset; font-size:16px;" id="btn-add" class="button is-primary is-small">
                              <i class="fas fa-truck"></i> &nbspDELIVERED</button>
                        </a>
                      </div> -->
                    </div>





                  </div>
                </div>


                <div class="container" style="margin-left: 100px; margin-top: 50px;">

                  <div class="columns">
                    <div class="column is-5" id="info-col">
                      <div class="content">


                        <?php
                        $sql ="SELECT * FROM pending_order_list WHERE id= '$id'";
                        $res_data = $con->query($sql);
                        while($row = mysqli_fetch_array($res_data)) 
                        {
                            // $id = $row['id'];
                            // $id1 = $row['pendingID'];
                         $orderNum = $row['OrderNumber'];
                         $fname = $row['Firstname'];
                         $lname = $row['Lastname'];
                         $email = $row['Email'];
                         $contact = $row['Contact'];
                         $address = $row['Address'];

                         ?>

                         <!-- form -->
                         <!--  <form method="POST" action="for_approve.php" accept-charset="utf-8"> -->

                          <div class="field">
                            <div class="control">
                              <div class="field">
                                <input type="hidden" name="id" value="<?php echo $id; ?>">
                                <input type="hidden"  name="orderNum" value="<?php echo $orderNum; ?>">
                              </div>
                            </div>
                            <div class="control">
                              <div class="columns">
                                <div class="column is-2" id="label">Serial #:</div>
                                <div class="column"  id="txtbox"><input name="serialNum" class="input"  value="<?php echo $SerialNum; ?>"readonly></div>
                              </div>
                            </div>
                            <div class="control">
                              <div class="columns">
                                <div class="column is-2" id="label">Firstname:</div>
                                <div class="column" id="txtbox"><input class="input"   value="<?php echo $fname; ?>" name="fname" required></div>
                              </div>
                            </div>
                            <div class="control">
                              <div class="columns">
                                <div class="column is-2" id="label">Lastname:</div>
                                <div class="column" id="txtbox"><input class="input" value="<?php echo $lname; ?>" name="lname" readonly></div>
                              </div>
                            </div>
                            <div class="control">
                              <div class="columns">
                                <div class="column is-2" id="label">Email:</div>
                                <div class="column" id="txtbox"><input class="input"  value="<?php echo $email; ?>" name="email" readonly></div>
                              </div>
                            </div>
                            <div class="control">
                              <div class="columns">
                                <div class="column is-2" id="label">Contact:</div>
                                <div class="column" id="txtbox"><input class="input"  value="<?php echo $contact;?>" name="contact"readonly></div>
                              </div>
                            </div>
                            <div class="control">
                              <div class="columns">
                                <div class="column is-2" id="label">Address:</div>
                                <div class="column" id="txtbox"><input class="input"  value="<?php echo $address;?>" name="address"readonly></div>
                              </div>
                            </div>

                          </div>
                          <!--  </form>   -->
                          <?php
                        }
                        ?>

                        <div class="columns is-multiline">
                         <div class="column is-8"  id="print-Qr" > 
                           <button class="button is-success" id="btn_print" name="approveOrder"><i class="fas fa-print"></i>&nbspPrint QR/Save</button></a>
                         </div>



                         <!-- MODAL PRINT -->
                         <div class="modal" id="modal-print">
                          <div class="modal-background"></div>
                          <div class="modal-content">
                            <div class="card">
                              <header class="card-header">
                                <div class="card-header-title">
                                  PRINT RECORD
                                </div>
                                <button class="modal-close" id="modal-close-print" aria-label="close"></button>
                              </header>


                              <form  method="POST"action="for_approve.php" accept-charset="utf-8">
                                <div class="card-content">
                                  <div class="content">
                                    <input class="input" type="hidden" name="serialNum" value="<?php echo $SerialNum; ?>">
                                    <input class="input" type="hidden" name="orderNum" value="<?php echo $orderNum; ?>">
                                    <input class="input" type="hidden" name="id"value="<?php echo $id; ?>"
                                    ><center>
                                      <strong>DO YOU WANT TO PRINT THIS RECORD?</strong>
                                    </center>
                                  </div>
                                </div>

                                <center>



                                  <div class="buttons" style="margin-right: auto;">
                                    <button type="submit" class="button is-success" name="printRecord" id="confirm"><i class="fas fa-check-circle"></i>&nbspPRINT & SAVE</button>

                                    <button class="button is-primary" name="saveApprove" id="modal-close-print"><i class="fas fa-ban"></i>&nbspSAVE ONLY!</button>
                                  </div>
                                </form>
                              </center>

                            </div>
                          </div>

                        </div> 
                        <!-- END MODAL PRINT -->




                        <div class="column is-6">

                          <a href="pending.php"> <button class="button is-danger" name="cancelbtn"><i class="fas fa-ban"></i>&nbspCancel</button></a>
                          <!-- </form> -->
                        </div>
                      </div>
                    </div>
                  </div>

                  <?php

                  include 'Buttons/for_approveButtonFunction.php';

                  ?>

              


                  <!-- form -->

                  <form method="POST" action="for_approve.php">

                    <div class="column" id="for-img">
                      <figure class="image" id="Qr-img">
                        <img src="qrGenerator/generate.php?text=<?php echo $SerialNum?>">
                        <!-- https://bulma.io/images/placeholders/256x256.png -->
                      </figure>

                      <button class="button is-success" name="RFqrcode" type="submit" id="refresh"><i class="fas fa-sync-alt"></i> &nbspRefresh</button>
                    </div>
                  </div>    

                </form>



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



                  var btn1 = document.querySelector('#btn_print');
                  var modalDlg1 = document.querySelector('#modal-print');
                  var imageModalCloseBtn1 = document.querySelector('#modal-close-print');
                  btn1.addEventListener('click', function(){
                    modalDlg1.classList.add('is-active');
                  });

                  imageModalCloseBtn1.addEventListener('click', function(){
                    modalDlg1.classList.remove('is-active');
                  });
                </script>

<?php

include 'consolidate.php';

?>
              </body>
              </html>