
<?php
session_start();
if(!isset($_SESSION["admin"]))
{
 header("location:../Log-in.php");
}
include '../PagesFunction/connection.php';
include 'Buttons/approvedQuery.php';


?>



<!DOCTYPE html>
<html>
<title>Consolidate</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
<script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
<link rel="icon" href="../images/plainlogo.png" type="image/x-icon" />
<link rel="stylesheet" href="sass/cons.css">
<link rel="stylesheet" href="sass/conso.css">
<body>
 <nav class="navbar is-fixed-top" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-item" href="index.php">
      <img src="images/logowhite.png" width="112" height="28" class="img-logo">
    </a>
  </div>


  <div class="navbar-end">
    <div class="navbar-item">
      <div class="buttons">

        <a class="button btn-user">
         <?= $_SESSION['admin']?>&nbsp<i class="far fa-user"></i>

       </a>
       <a href="../zerterraph_user/logout.php" class="button btn-logout">
         Logout &nbsp<i class="fas fa-sign-out-alt"></i>
       </a>
     </div>
   </div>
 </div>
</div>
</nav>

<div style="margin-top: 56px;">
<div class="w3-sidebar w3-bar-block w3-collapse w3-card w3-animate-left" style="width:200px;" id="mySidebar">
  <button class="w3-bar-item w3-button w3-large w3-hide-large" onclick="w3_close()" id="close">&times;</button>
  <a href="index.php" class="w3-bar-item w3-button" id="item-hover" ><i class="fas fa-th-large"></i> &nbsp Dashboard</a>
  <a href="admin.php" class="w3-bar-item w3-button" id="item-hover"> <i class="fas fa-user-shield"></i> &nbsp Admin</a>
  <a href="users.php" class="w3-bar-item w3-button" id="item-hover"><i class="fas fa-user"></i> &nbsp Users</a>
  <a class="w3-bar-item w3-button w3-dropdown-hover modal-button" id="sendmodal" data-target="#ordersModal" aria-haspopup="true"><i class="fas fa-cubes"></i> &nbsp Orders</a>
  <a href="request.php" class="w3-bar-item w3-button" id="item-hover"><i class="fas fa-envelope-open-text"></i> &nbsp Request</a>
  <a href="sales.php" class="w3-bar-item w3-button" id="item-hover"><i class="fas fa-hand-holding-usd"></i> &nbsp Sales</a>
  <button onclick="document.getElementById('id01').style.display='block'" href="consolidate.php" class="w3-bar-item w3-button" id="dashboard" ><i class="fas fa-print"></i> &nbsp Consolidate</button>
</div>



<!-- 
<div class="w3-main" style="margin-left:200px">
  <div class="w3-teal">
    <button class="w3-button w3-teal w3-xlarge w3-hide-large" onclick="w3_open()">&#9776;</button>
  </div>

  <div class="w3-container">
   <h1 class="button-category">CONSOLIDATE</h1>
   <div class="columns is-multiline is-mobile">
    <div class="column is-half">
      <a href="sales.php">
        <div class="box" style="background:url(images/sales_bg.png); background-repeat: no-repeat; background-size: cover;">
          <div class="columns">
            <div class="column">
              <p id="name1">SALES</P> -->
                <!-- <span id="view-sales">Click here to view details</span> -->
              <!-- </div>
              <div class="column" style="text-align: center;">
                <span class="is-right"></span>
              </div>
            </div>
          </div>
        </a>

      </div>
      <div class="column is-half">
        <a href="admin.php">
          <div class="box" style="background:url(images/yellow_bg.png); background-repeat: no-repeat; background-size: cover;">
            <div class="columns">
              <div class="column">
                <p id="name1">TRANSACTION HISTORY</p> -->
                <!-- <span id="view-sales">Click here to view details</span> -->
              <!-- </div> -->
              <!-- <div class="column" style="text-align: center;">
                <span class="is-right"></span>
              </div> -->
            <!-- </div>
          </div>
        </a>
      </div> -->


      <!-- <div class="column is-half">
        <a href="users.php">
          <div class="box" style="background:url(images/blue_bg.png); background-repeat: no-repeat; background-size: cover;">
            <div class="columns">
              <div class="column">
                <p id="name1">USERS</p> -->
                <!-- <span id="view-sales">Click here to view details</span> -->
              <!-- </div>
              <div class="column" style="text-align: center;">
                <span class="is-right"></span>
              </div>
            </div>
          </div>
        </a>
      </div> -->


      <!-- <div class="column is-half">
        <a href="request.php">
          <div class="box" style="background:url(images/request_bg.png); background-repeat: no-repeat; background-size: cover;">
            <div class="columns">
              <div class="column">
                <p  id="name1">ACTIVITY LOG</p> -->
                <!-- <span id="view-sales">Click here to view details</span> -->
              <!-- </div>
              <div class="column" style="text-align: center;">
                <span class="is-right"></span>
              </div>
            </div>
          </div>
        </a>
      </div> -->

      
      <!-- <div class="card-content">
        <div class="content">
          <p>TOTAL PENDING : </p>
          <span class="is-right"></span>
        </div>
      </div> -->
    <!-- </div>
  </div>
</div>
</div>

</div> -->

<!-- Modal -->

  <div id="id01" class="w3-modal">
    <div class="w3-modal-content" id="content">
      <div class="w3-container" style="border-radius:8px" >
        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright">&times;</span>

        <div class="w3-container" >
            <!-- <h2>Card Content</h2>
            <p>Add containers inside the card to create different sections:</p> -->

            <div class="columns">
                <div class="column  is-3">
                    <div class="w3-card-4" >
                    <div class="w3-container" id="card-con"  style="background-color: #99cc67;">
                    <center><p id="text1">SALES</p></center>
                    </div>
                    </div>
                </div>

                <div class="column  is-3">
                    <div class="w3-card-4" >
                    <div class="w3-container" id="card-con" style="background-color: #7cd0de;">
                       <center><p id="text1">USERS</p></center>
                        
                    </div>
                    </div>
                </div>

                <div class="column  is-3">
                    <div class="w3-card-4" >
                    <div class="w3-container" id="card-con" style="background-color: #f7de62;">
                    <center><p id="text1">TRANSACTION HISTORY</p></center>
                    </div>
                    </div>
                </div>

                <div class="column  is-3">
                    <div class="w3-card-4" >
                    <div class="w3-container" id="card-con" style="background-color: #fcc174;">
                    <center><p id="text1">ACTIVITY LOG</p></center>
                    </div>
                    </div>
                </div>
            </div>



           
    </div>

      </div>
    </div>


</div>


<!-- modal oders -->
<?php
include 'ordersModal.php';
?>

</div>



</body>
</html>
