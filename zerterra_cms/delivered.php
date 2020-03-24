<?php
session_start();
if(!isset($_SESSION["admin"]))
{
 header("location:../Log-in.php");
}
include '../PagesFunction/connection.php';
//include 'Buttons/approvedQuery.php';


?>

<!DOCTYPE html>
<html>
<title>Delivered</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
<script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">

<link rel="stylesheet" href="sass/approved.css">

<body>
  <?php
  include 'Pages/deliveredViewPage.php';  
  include 'admin-header.php';
  include 'Buttons/deliveredSearch.php';
  ?>
  

  <div class="w3-sidebar w3-bar-block w3-collapse w3-card w3-animate-left" style="width:200px;" id="mySidebar">
    <button class="w3-bar-item w3-button w3-large w3-hide-large" onclick="w3_close()" id="close">&times;</button>
    <a href="index.php" class="w3-bar-item w3-button" id="item-hover"><i class="fas fa-th-large"></i> &nbsp Dashboard</a>
    <a href="admin.php" class="w3-bar-item w3-button" id="item-hover"> <i class="fas fa-user-shield"></i> &nbsp Admin</a>
    <a href="users.php" class="w3-bar-item w3-button" id="item-hover"><i class="fas fa-user"></i> &nbsp Users</a>
    <a class="w3-bar-item w3-button" id="sendmodal" ><i class="fas fa-cubes"></i> &nbsp Orders</a>
    <a href="request.php" class="w3-bar-item w3-button" id="item-hover"><i class="fas fa-envelope-open-text"></i> &nbsp Request</a>
    <a href="sales.php" class="w3-bar-item w3-button" id="item-hover"><i class="fas fa-hand-holding-usd"></i> &nbsp Sales</a>
     <a href="actionLog.php" class="w3-bar-item w3-button" id="item-hover"><i class="fas fa-clipboard-list"></i> &nbsp Action Log</a>
      <button onclick="document.getElementById('id01').style.display='block'" href="consolidate.php" class="w3-bar-item w3-button" id="item-hover" ><i class="fas fa-print"></i> &nbsp Consolidate</button>
        <a href="../zerterraph_user/logout.php" class="w3-bar-item w3-button" id="item-hover"><i class="fas fa-sign-out-alt"></i>&nbsp Logout </a> 
  </div>

  <div class="w3-main" style="margin-left:200px">
    <div class="w3-teal">
      <button class="w3-button w3-teal w3-xlarge w3-hide-large" onclick="w3_open()">&#9776;</button>
    </div>

    <div class="w3-container">
      <div class="columns">
        <div class="column">
          <h1 class="button-category">DELIVERED</h1>
        </div>
        <div class="column">
          <div class="columns">
            <div class="column">
             <a href="pending.php">
               <button style="margin-top: 30px ; margin-left: 300px; font-family: unset; font-size:16px;" id="btn-add" class="button is-danger is-small">
                 <i class="fas fa-exclamation-circle"></i> &nbspPENDING</button>
               </a>
             </div>
             <div class="column">
              <a href="approved.php">
                <button style="margin-top: 30px ; font-family: unset; font-size:16px;" id="btn-add" class="button is-success is-small" name="viewdelivered">
                  <i class="far fa-thumbs-up"></i> &nbspAPPROVED</button>
                </a>
              </div>
            </div>



                <!-- <a href="pending.php">
                  <button style="margin-top: 30px ; margin-left: 400px; font-family: unset;" id="btn-add" class="button is-danger is-small">
                    <i class="fas fa-exclamation-circle"></i> &nbspPENDING</button></a>
                    <a href="approved.php">
                      <button style="margin-top: 10px ; margin-left: 400px; font-family: unset;" id="btn-add" class="button is-success is-small" name="viewdelivered">
                       <i class="far fa-thumbs-up"></i> &nbspApproved</button></a> -->

                     </div>

                   </div>

                   <section class="section">
                    <div class="container">
                      <table class="table">
                        <thead>
                          <tr>
                            
                            <th>Order #</th>
                            <th>Serial #</th>
                            <th>Firstname</th>
                            <th>Lastname</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Contact</th>
                            
                          </tr>
                        </thead>

                        <tbody>
                          <?php

                          if (isset($_POST['search_btn'])){
                            $searchValue = $_POST['searchValue'];

                            if ($searchValue===''){
                              echo '<script>window.location.href="?"</script>';
                            }else{
                              include 'searchFunction/searchDeliveredFunction.php';
                            }
                          }else{     
                            $sql = "SELECT * FROM delivered_order_list WHERE is_activated='1' ORDER BY id DESC LIMIT $offset, $no_of_records_per_page";
                            $res_data = $con->query($sql);
                            while($row = mysqli_fetch_array($res_data)){ 
                              {
                                $id = $row['id'];
                                $orderNum = $row['OrderNumber'];
                                $serialNum = $row['SerialNumber'];
                                $fname = $row['Firstname'];
                                $lname = $row['Lastname'];
                                $email = $row['Email'];
                                $contact = $row['Contact'];
                                $address = $row['Address'];

                                ?>
                                <tr>
                                 <td>
                                  <?php echo $orderNum; ?>
                                </td>

                                <td>
                                  <?php echo $serialNum; ?>
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
                                  <?php echo $contact; ?>
                                </td>

                                <td>
                                  <?php echo $address; ?>
                                </td>

                              </tr>
                              <?php 
                            }  
                          }
                        }
                        ?>
                      </tbody>
                    </table>
                    <nav class="pagination is-small" role="navigation" aria-label="pagination">
                      <a href="<?php if($page <= 1){ echo '#'; } else { echo "?page=".($page - 1); } ?>" class="pagination-previous" >Previous</a>
                      <a href="<?php if($page >= $total_pages){ echo '#'; } else { echo "?page=".($page + 1); } ?>" class="pagination-next">Next page</a>
                      <ul class="pagination-list">
                        <li><a href="?page=1" class="pagination-link" >1</a></li>
                        <li>
                          <span class="pagination-ellipsis">&hellip;</span>
                        </li>
                        <li><a href="?page=<?php echo $total_pages; ?>" class="pagination-link"><?php echo $total_pages; ?></a></li>
                      </ul>
                    </nav>
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







              <!-- modal script -->
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