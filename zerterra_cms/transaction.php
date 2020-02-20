<?php
session_start();
if(!isset($_SESSION["admin"]))
{
 header("location:../Log-in.php");
}
include '../PagesFunction/connection.php';
// include 'connection.php';


?>


<!DOCTYPE html>
<html>
<title>Transactions</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
<script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">

<link rel="stylesheet" href="sass/transaction.css">
<body>
  <nav class="navbar" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
      <a class="navbar-item" href="https://bulma.io">
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
  <a href="index.php" class="w3-bar-item w3-button" id="item-hover"><i class="fas fa-th-large"></i> &nbsp Dashboard</a>
  <a href="admin.php" class="w3-bar-item w3-button" id="item-hover"> <i class="fas fa-user-shield"></i> &nbsp Admin</a>
  <a href="users.php" class="w3-bar-item w3-button" id="item-hover"><i class="fas fa-user"></i> &nbsp Users</a>
  <a href="transaction.php" class="w3-bar-item w3-button" id="dashboard"><i class="fas fa-hourglass-half"></i> &nbsp Transactions</a>
  <a href="#" class="w3-bar-item w3-button" id="item-hover"><i class="fas fa-envelope-open-text"></i> &nbsp Request</a>
  <a href="#" class="w3-bar-item w3-button" id="item-hover"><i class="fas fa-hand-holding-usd"></i> &nbsp sales</a>
  <a href="#" class="w3-bar-item w3-button" id="item-hover"><i class="fas fa-print"></i> &nbsp Consolidate</a>
</div>

<div class="w3-main" style="margin-left:200px">
  <div class="w3-teal">
    <button class="w3-button w3-teal w3-xlarge w3-hide-large" onclick="w3_open()">&#9776;</button>
  </div>

  <div class="w3-container">
    <div class="columns">
      <div class="column">
        <h1 class="button-category">Transactions</h1>
      </div>
      <div class="column">
        <!-- <input class="input" placeholder="Please Enter Text" type="text" >   -->
        <h1 class="button" id="add-admin"><i class="fas fa-user-plus"></i> &nbspADD</h1>  
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
  </script>
  
</body>
</html>
