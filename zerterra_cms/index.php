<?php
session_start();
// include '../PagesFunction/connection.php';
include 'connection.php';
?>
<!DOCTYPE html>
<html>
<title>Dashboard</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
<script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
<link rel="icon" href="../images/plainlogo.png" type="image/x-icon" />
<link rel="stylesheet" href="sass/sass.css">
<body>
  <nav class="navbar" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
      <a class="navbar-item" href="index.php">
        <img src="images/logowhite.png" width="112" height="28" class="img-logo">
      </a>
    </div>


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
  <a href="index.php" class="w3-bar-item w3-button" id="dashboard"><i class="fas fa-th-large"></i> &nbsp Dashboard</a>
  <a href="admin.php" class="w3-bar-item w3-button" id="item-hover"> <i class="fas fa-user-shield"></i> &nbsp Admin</a>
  <a href="users.php" class="w3-bar-item w3-button" id="item-hover"><i class="fas fa-user"></i> &nbsp Users</a>
  <a class="w3-bar-item w3-button w3-dropdown-hover modal-button" id="sendmodal" data-target="#ordersModal" aria-haspopup="true"><i class="fas fa-cubes"></i> &nbsp Orders</a>
  <a href="request.php" class="w3-bar-item w3-button" id="item-hover"><i class="fas fa-envelope-open-text"></i> &nbsp Request</a>
  <a href="sales.php" class="w3-bar-item w3-button" id="item-hover"><i class="fas fa-hand-holding-usd"></i> &nbsp Sales</a>
  <a href="#" class="w3-bar-item w3-button" id="item-hover"><i class="fas fa-print"></i> &nbsp Consolidate</a>
</div>

<?php
$sql = "SELECT id FROM approveorders_list";
$result=mysqli_query($con,$sql);
$regUserCount=mysqli_num_rows($result);

$sql = "SELECT id FROM pendingorders_list";
$result=mysqli_query($con,$sql);
$penUserCount=mysqli_num_rows($result);

$sql = "SELECT id FROM admin_list";
$result=mysqli_query($con,$sql);
$adminUserCount=mysqli_num_rows($result);

$sql = "SELECT id FROM sales_list";
$result=mysqli_query($con,$sql);
$salesCount=mysqli_num_rows($result);

$sql = "SELECT id FROM request_list";
$result=mysqli_query($con,$sql);
$requestCount=mysqli_num_rows($result);


?>


<div class="w3-main" style="margin-left:200px">
  <div class="w3-teal">
    <button class="w3-button w3-teal w3-xlarge w3-hide-large" onclick="w3_open()">&#9776;</button>
  </div>

  <div class="w3-container">
   <h1 class="button-category">DASHBOARD</h1>
   <div class="columns is-multiline is-mobile">
    <div class="column is-half">
      <a href="sales.php">
        <div class="box" style="background:url(images/sales_bg.png); background-repeat: no-repeat; background-size: cover;">
          <div class="columns">
            <div class="column">
              SALES
            </div>
            <div class="column" style="text-align: center;">
              <span class="is-right">Php 123,456</span>
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
              ADMIN
            </div>
            <div class="column" style="text-align: center;">
              <span class="is-right"><?php echo $adminUserCount;?></span>
            </div>
          </div>
        </div>
      </a>
    </div>


    <div class="column is-half">
      <a href="users.php">
        <div class="box" style="background:url(images/blue_bg.png); background-repeat: no-repeat; background-size: cover;">
          <div class="columns">
            <div class="column">
              USERS
            </div>
            <div class="column" style="text-align: center;">
              <span class="is-right"><?php echo $regUserCount;?></span>
            </div>
          </div>
        </div>
      </a>
    </div>


    <div class="column is-half">
      <a href="request.php">
        <div class="box" style="background:url(images/request_bg.png); background-repeat: no-repeat; background-size: cover;">
          <div class="columns">
            <div class="column">
              REQUEST LIST
            </div>
            <div class="column" style="text-align: center;">
              <span class="is-right"><?php echo $requestCount;?></span>
            </div>
          </div>
        </div>
      </a>
    </div>

    <div class="column is-7">
      <div class="card">
        <header class="card-header">
          <p class="card-header-title">
           RECENTLY ACTIVITIES
         </p>
       </header>


       <table class="table">
        <tr>
          <td id=""><p>Kumain</p>
            <span id="userinfo">Serial No. 13215-46548-02 | Jan. 9, 2019 | 04:45 pm</span>
          </td>
        </tr>
        <tr>
          <td id=""><p>Kumain</p>
            <span id="userinfo">Serial No. 13215-46548-02 | Jan. 9, 2019 | 04:45 pm</span>
          </td>
        </tr>
        <tr>
          <td id=""><p>Kumain</p>
            <span id="userinfo">Serial No. 13215-46548-02 | Jan. 9, 2019 | 04:45 pm</span>
          </td>
        </tr>
      </table>






      <footer class="card-footer">
        <div class="card-footer-item">
          <nav class="pagination is-right" role="navigation" aria-label="pagination">
           <span><a class="pagination-previous">Prev</a></span> <span>|</span>
           <span> <a class="pagination-next">Next</a></span>
         </nav>
       </div>
     </footer>
   </div>
 </div>
 <div class="column is-5">
  <div class="card">
    <header class="card-header">
      <p class="card-header-title">
        ORDERS
      </p>
    </header>
    <div class="card-content">
      <div class="content">
        <p>BOBO MO BERN</p>
      </div>
    </div>
  </div>
</div>
</div>
</div>

</div>

</div>


<!-- modal transaction -->

<div class="container" id="modal-container">

  <div id="ordersModal" class="modal  modal-fx-slideTop">
    <div class="modal-background"></div>
    <div class="modal-content1">
     <div class="modal-card1">

      <section class="modal-card-body1" id="modal-card-body">
        <!-- Content ... -->
        <div class="field">
          <div class="control">
            <div class="card" id="modal-card">
              <div class="card-content" id="trans-content">
                <button class="modal-close" id="close9"></button>
                <div class="columns is-mobile">
                  <div class="column is-6">
                    <a href="pending.php">
                      <div class="card" id="card-pending" style="background:url(images/pendingicon.png);  background-size: 100% 100%; background-repeat: no-repeat; background-size: cover;">
                       <!-- PENDING -->
                     </div>
                   </a>
                 </div>
                 <div class="column is-6">
                  <a href="approved.php">
                    <div class="card" id="card-approve" style="background:url(images/approvedicon.png);  background-size: 100% 100%; background-repeat: no-repeat; background-size: cover;">
                        <!-- <div class="card-content" >
                          <a href="approved.php" id="pending">
                            APPROVED
                          </a>
                        </div> -->
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

  <?php
  $sql = "SELECT id FROM approve_list";
  $result=mysqli_query($con,$sql);
  $regUserCount=mysqli_num_rows($result);

  $sql = "SELECT id FROM pending_list";
  $result=mysqli_query($con,$sql);
  $penUserCount=mysqli_num_rows($result);

  $sql = "SELECT id FROM admin_list";
  $result=mysqli_query($con,$sql);
  $adminUserCount=mysqli_num_rows($result);

  $sql = "SELECT id FROM sales_list";
  $result=mysqli_query($con,$sql);
  $salesCount=mysqli_num_rows($result); 


  ?>

  <!-- modal script -->
  <script>
    var btn = document.querySelector('#sendmodal');
    var modalDlg9 = document.querySelector('#serv-modal1');
    var imageModalCloseBtn9 = document.querySelector('#close9');
    btn.addEventListener('click', function(){
      modalDlg9.classList.add('is-active');
    });

    imageModalCloseBtn9.addEventListener('click', function(){
      modalDlg9.classList.remove('is-active');
    });
    // .click(function() {
    //   .addClass("is-active");  
    // });

    // $(".modal-close").click(function() {
    //    $(".modal").removeClass("is-active");
    // });
  </script>        

  <!-- end script -->

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
