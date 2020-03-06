<?php
session_start();
if(!isset($_SESSION["admin"]))
{
 header("location:../Log-in.php");
}
include '../PagesFunction/connection.php';
// include 'connection.php';
include 'Buttons/adminButtonFunction.php';

?>


<!DOCTYPE html>
<html>
<title>Admin</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
<script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
<link rel="icon" href="../images/plainlogo.png" type="image/x-icon" />

<link rel="stylesheet" href="sass/admin.css">
<body>

  <?php
  include 'Pages/adminViewPage.php';
  include 'admin-header.php';
  include 'Buttons/adminSearch.php';
  ?>

  <div class="w3-sidebar w3-bar-block w3-collapse w3-card w3-animate-left" style="width:200px;" id="mySidebar">
    <button class="w3-bar-item w3-button w3-large w3-hide-large" onclick="w3_close()" id="close">&times;</button>
    <a href="index.php" class="w3-bar-item w3-button" id="item-hover"><i class="fas fa-th-large"></i> &nbsp Dashboard</a>
    <a href="admin.php" class="w3-bar-item w3-button" id="dashboard"> <i class="fas fa-user-shield"></i> &nbsp Admin</a>
    <a href="users.php" class="w3-bar-item w3-button" id="item-hover"><i class="fas fa-user"></i> &nbsp Users</a>
    <a class="w3-bar-item w3-button w3-dropdown-hover modal-button" id="sendmodal" data-target="#ordersModal" aria-haspopup="true"><i class="fas fa-cubes"></i> &nbsp Orders</a>
    <a href="request.php" class="w3-bar-item w3-button" id="item-hover"><i class="fas fa-envelope-open-text"></i> &nbsp Request</a>
    <a href="sales.php" class="w3-bar-item w3-button" id="item-hover"><i class="fas fa-hand-holding-usd"></i> &nbsp Sales</a>
    <a href="actionLog.php" class="w3-bar-item w3-button" id="item-hover"><i class="fas fa-clipboard-list"></i> &nbsp Action Log</a>
    <button onclick="document.getElementById('id01').style.display='block'" href="consolidate.php" class="w3-bar-item w3-button" id="item-hover"  ><i class="fas fa-print"></i> &nbsp Consolidate</button>
  </div>

  <div class="w3-main" style="margin-left:200px">
    <div class="w3-teal">
      <button class="w3-button w3-teal w3-xlarge w3-hide-large" onclick="w3_open()">&#9776;</button>
    </div>

<<<<<<< HEAD
    <a href="print/printAdmin.php"><button  class="button" id="home" ><i class="fas fa-print"></i> </button></a> 

    <div class="w3-container">
      <div class="columns">
        <div class="column">
          <h1 class="button-category">ADMIN</h1>
        </div>
        <div class="column">
          <button style="margin-top: 30px ; margin-left: 430px; font-family: unset;" id="btn-add" class="button modal-button is-success" data-target="#myModal" aria-haspopup="true">
            <i class="fas fa-user-plus"></i> &nbspADD</button>
            <?php 
            include 'Buttons/addAdminModal.php';
            ?>
          </div>
=======
    <div class="w3-container">
     <h1 class="button-category">DASHBOARD</h1>
     <div class="columns is-multiline is-mobile">
      <div class="column is-half">
        <a href="sales.php">
          <div class="box" style="background:url(images/sales_bg.png); background-repeat: no-repeat; background-size: cover;">
            <div class="columns">
              <div class="column">
                <p>SALES</P>
                  <span id="view-sales">Click here to view details</span>
                </div>
                <div class="column" style="text-align: center;">
                  <span class="is-right is-size-3"><?php echo "P ",number_format($total),"";?></span>
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
                  <p>ADMIN</p>
                  <span id="view-sales">Click here to view details</span>
                </div>
                <div class="column" style="text-align: center;">
                  <span class="is-right is-size-3"><?php echo $adminUserCount;?></span>
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
                  <p>USERS</p>
                  <span id="view-sales">Click here to view details</span>
                </div>
                <div class="column" style="text-align: center;">
                  <span class="is-right is-size-3"><?php echo $regUserCount;?></span>
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
                  <p>REQUEST LIST</p>
                  <span id="view-sales">Click here to view details</span>
                </div>
                <div class="column" style="text-align: center;">
                  <span class="is-right is-size-3"><?php echo $requestCount;?></span>
                </div>
              </div>
            </div>
          </a>
>>>>>>> 2eab43c312c1159370a09894bcfffb850219fb14
        </div>

        <section class="section">
          <div class="container"> 
           <table class="table" id="table">
            <thead>
             <tr>
              <th>#</th>
              <th>Full Name</th>
              <th>Contact</th>
              <th>Email</th>
              <th>Position</th>
              <th>Action</th>
            </tr>
          </thead>



          <?php 

          if (isset($_POST['search_btn'])){
            $searchValue = $_POST['searchValue'];

            if ($searchValue===''){
              echo '<script>window.location.href="?"</script>';
            }else{
             include 'searchFunction/searchAdminFunction.php';
           }
         }else{     
          $sql = "SELECT * FROM admin_list  WHERE is_active='1' ORDER BY ID DESC LIMIT $offset, $no_of_records_per_page";
          $res_data = $con->query($sql);
          while($row = mysqli_fetch_array($res_data)){
            $id = $row['id'];
<<<<<<< HEAD
            $fullname = $row['Fullname'];
            $contact = $row['Contact'];
            $email = $row['Email'];
            $position = $row['Position'];
=======
            $author = $row['AdminName'];
            $action = $row['Description'];
            $dateAction = $row['DateAction'];
            ?>
>>>>>>> 2eab43c312c1159370a09894bcfffb850219fb14
            
            ?>
            <tbody>
             <tr>
               <td>
                # <?php echo $id; ?>
              </td>
              <td>
                <?php echo $fullname; ?>
              </td>
             
              <td>
                <?php echo $contact; ?>
              </td>
              <td>
                <?php echo $email; ?>
              </td>
              <td>
                <?php echo $position; ?>
              </td>
              <td>


                <button data-target="#edit<?php echo $id;?>" class="button is-primary is-small modal-button" id="btn_update" name="btn-update"><i class="far fa-edit"></i>
                </button>
                <?php
                include 'Buttons/adminEditModal.php';
                ?>
                <button data-target="#delete<?php echo $id;?>" class="button is-danger is-small modal-button"  id="btn_delete" name="btn-delete"><i class="fas fa-trash-alt"></i>
                </button>
                <?php
                include 'Buttons/adminRemoveModal.php';
                ?>
              </td>
            </tr>

            <?php 
<<<<<<< HEAD
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
=======
          } 
          
          ?>     


          <footer class="card-footer">
            <div class="card-footer-item">
              <nav class="pagination is-small" role="navigation" aria-label="pagination">
                <a href="<?php if($page <= 1){ echo '#'; } else { echo "?page=".($page - 1); } ?>" class="pagination-previous" ><i class="fas fa-angle-double-left"></i>&nbsp PREV</a> 
                <a href="<?php if($page >= $total_pages){ echo '#'; } else { echo "?page=".($page + 1); } ?>" class="pagination-next">NEXT&nbsp<i class="fas fa-angle-double-right"></i></a>
                
              </nav>
            </div>
          </footer>
        </div>
      </div>
      <div class="column is-5">
        <div class="card">
          <header class="card-header">
            <p class="card-header-title">
              PENDING ORDERS
            </p>
          </header>
          <div class="columns">
            <div class="column">
              <p style="margin-left: 21px;
              font-size: 21pt;">TOTAL COUNT:</p>
            </div>
            <div class="column is-size-3" style="text-align: center; margin-top: 25px;">
              <span class="is-right"><?php echo $penUserCount;?></span>
            </div>
          </div>
      <!-- <div class="card-content">
        <div class="content">
          <p>TOTAL PENDING : </p>
          <span class="is-right"><?php echo $adminUserCount;?></span>
        </div>
      </div> -->
    </div>
>>>>>>> 2eab43c312c1159370a09894bcfffb850219fb14
  </div>
</section>

</div>



<?php
include 'ordersModal.php';
?>


<?php
include 'consolidate.php';
?>

<script>
  function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
  }

  function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
  }
</script>


<!-- modal transaction -->

<!-- modal transaction -->


<!-- modal script -->


<!-- end script -->

<script>
  function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
  }
  function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
  }
  
</script>

<script src="jquery.min.js"></script>
<script src="printThis.js"></script>
<script>
    $('.btnn').click(function(){
        var printme= document.getElementByID('table');
        var wme= window.open("","","width=900","height=700");
        wme.document.write(printme.outerHTML);
        wme.document.close();
        wme.focus();
        wme.printf();
        wme.close();
    }
  </script>
</body>
</html>
