<?php 
session_start();
// include '../PagesFunction/connection.php';
include 'connection.php';
?>


<!DOCTYPE html>
<html>
<title>Sales</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
<script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
<link rel="icon" href="../images/plainlogo.png" type="image/x-icon" />
<link rel="stylesheet" href="sass/sales.css">

<body>
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
  <a class="w3-bar-item w3-button w3-dropdown-hover" id="sendmodal" ><i class="fas fa-cubes"></i> &nbsp Orders</a>
  <a href="request.php" class="w3-bar-item w3-button" id="item-hover"><i class="fas fa-envelope-open-text"></i> &nbsp Request</a>
  <a href="sales.php" class="w3-bar-item w3-button" id="dashboard"><i class="fas fa-hand-holding-usd"></i> &nbsp sales</a>
  <a href="#" class="w3-bar-item w3-button" id="item-hover"><i class="fas fa-print"></i> &nbsp Consolidate</a>
</div>

    <div class="w3-main" style="margin-left:200px">
        <div class="w3-teal">
            <button class="w3-button w3-teal w3-xlarge w3-hide-large" onclick="w3_open()">&#9776;</button>
        </div>

        <div class="w3-container">
            <div class="columns">
                <div class="column">
                    <h1 class="button-category">SALES</h1>
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
                                <th>Name</th>
                                <th>Country</th>
                                <th>City</th>
                                <th>zip code</th>
                                <th>Options</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Sachin</td>
                                <td>India</td>
                                <td>England</td>
                                <td>England</td>
                                <td><button class="button is-primary is-small modal-button" id="btn_update"
                                        name="btn-update"><i class="far fa-edit"></i>
                                    </button>
                                    <button class="button is-primary is-small modal-button is-danger" id="btn_update"
                                        name="btn-update"><i class="fas fa-trash"></i>
                                    </button></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Smith</td>
                                <td>Australia</td>
                                <td>England</td>
                                <td>England</td>
                                <td><button class="button is-primary is-small modal-button" id="btn_update"
                                        name="btn-update"><i class="far fa-edit"></i>
                                    </button>
                                    <button class="button is-primary is-small modal-button is-danger" id="btn_update"
                                        name="btn-update"><i class="fas fa-trash"></i>
                                    </button></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Joe Root</td>
                                <td>England</td>
                                <td>England</td>
                                <td>England</td>
                                <td><button class="button is-primary is-small modal-button" id="btn_update"
                                        name="btn-update"><i class="far fa-edit"></i>
                                    </button>
                                    <button class="button is-primary is-small modal-button is-danger" id="btn_update"
                                        name="btn-update"><i class="fas fa-trash"></i>
                                    </button></td>
                            </tr>

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
                                                    <a href="dashboard.html">
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
                                                    <a href="dashboard.html">
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
                var btn = document.querySelector('#sendmodal');
                var modalDlg9 = document.querySelector('#serv-modal1');
                var imageModalCloseBtn9 = document.querySelector('#close9');
                btn.addEventListener('click', function () {
                    modalDlg9.classList.add('is-active');
                });

                imageModalCloseBtn9.addEventListener('click', function () {
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
            </script>

</body>

</html>