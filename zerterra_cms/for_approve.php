<?php
session_start();
include 'connection.php';
include 'Buttons/approvedQuery.php';

 
$id = $_SESSION['id'];

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
                        <a class="button btn-logout modal-button" data-target="#approvedSearchModal" aria-haspopup="true">
                         <i class="fa fa-search"></i></i> &nbspSearch
                     </a>
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

<?php include 'Buttons/approvedSearch.php'?>

<div class="w3-sidebar w3-bar-block w3-collapse w3-card w3-animate-left" style="width:200px;" id="mySidebar">
  <button class="w3-bar-item w3-button w3-large w3-hide-large" onclick="w3_close()" id="close">&times;</button>
  <a href="index.php" class="w3-bar-item w3-button" id="item-hover"><i class="fas fa-th-large"></i> &nbsp Dashboard</a>
  <a href="admin.php" class="w3-bar-item w3-button" id="item-hover"> <i class="fas fa-user-shield"></i> &nbsp Admin</a>
  <a href="users.php" class="w3-bar-item w3-button" id="item-hover"><i class="fas fa-user"></i> &nbsp Users</a>
  <a class="w3-bar-item w3-button" id="sendmodal" ><i class="fas fa-cubes"></i> &nbsp Orders</a>
  <a href="request.php" class="w3-bar-item w3-button" id="item-hover"><i class="fas fa-envelope-open-text"></i> &nbsp Request</a>
  <a href="sales.php" class="w3-bar-item w3-button" id="item-hover"><i class="fas fa-hand-holding-usd"></i> &nbsp sales</a>
  <a href="#" class="w3-bar-item w3-button" id="item-hover"><i class="fas fa-print"></i> &nbsp Consolidate</a>
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
                <a href="pending.php">
                  <button style="margin-top: 30px ; margin-left: 400px; font-family: unset;" id="btn-add" class="button is-danger is-small">
                      <i class="fas fa-exclamation-circle"></i> &nbspPENDING</button></a>
                      <a href="delivered.php">
                          <button style="margin-top: 10px ; margin-left: 400px; font-family: unset;" id="btn-add" class="button is-primary is-small">
                              <i class="fas fa-truck"></i> &nbspDELIVERED</button></a>

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