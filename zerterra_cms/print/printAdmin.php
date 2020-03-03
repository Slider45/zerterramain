<?php
include '../../PagesFunction/connection.php';
?>


<!DOCTYPE html>
<html>
<title>Admin Print</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
<script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">

<link rel="stylesheet" href="sass/adminPrint.css">

<style>
 .card-content table td {
    text-align:center;
  }
</style>

<body>
  <center>
    <div class="card">
      <header class="card-header">

        <p id="head-title">ADMINS</p>

        <p id="h-img">
          <img src="images/logowhite.png" alt="">
        </p>
      
      </header>

    <div class="card-content">

    <div id="date">
        <span>DATE:<?php echo date("m-d-yy") ?></span> 
        <!-- <span id="date-today"> </span>
        <p>TO:01-01-2021</p> -->
    </div>

    <div class="table">

    <table>
      
    <th>ID</th>
    <th>Fullname</th>
    <th>Contact</th>
    <th>Email</th>
    <th>Position</th>
    <?php 

// if (isset($_POST['search_btn'])){
//   $searchValue = $_POST['searchValue'];

//   if ($searchValue===''){
//     echo '<script>window.location.href="?"</script>';
//   }else{
//    include 'searchFunction/searchAdminFunction.php';
//  }
// }else{     
$sql = "SELECT * FROM admin_list  WHERE is_active='1'";
$res_data = $con->query($sql);
while($row = mysqli_fetch_array($res_data)){
  $id = $row['id'];
  $fullname = $row['Fullname'];
 
  $contact = $row['Contact'];
  $email = $row['Email'];
  $position = $row['Position'];
  
  ?>
  
 
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
  </tr>
  <!-- <tr>
    <td>Centro comercial Moctezuma</td>
    <td>Francisco Chang</td>
    <td>Mexico</td>
    <td>Centro comercial Moctezuma</td>
    <td>Francisco Chang</td>
    <td>Mexico</td>
    <td>Centro comercial Moctezuma</td>
    <td>Francisco Chang</td>
    
  </tr>
  <tr>
    <td>Ernst Handel</td>
    <td>Roland Mendel</td>
    <td>Austria</td>
    <td>Ernst Handel</td>
    <td>Roland Mendel</td>
    <td>Austria</td>
    <td>Ernst Handel</td>
    <td>Roland Mendel</td>
  </tr>
  <tr>
  <td>Ernst Handel</td>
    <td>Roland Mendel</td>
    <td>Austria</td>
    <td>Ernst Handel</td>
    <td>Roland Mendel</td>
    <td>Austria</td>
    <td>Ernst Handel</td>
    <td>Roland Mendel</td>
  </tr>
  <tr>
  <td>Ernst Handel</td>
    <td>Roland Mendel</td>
    <td>Austria</td>
    <td>Ernst Handel</td>
    <td>Roland Mendel</td>
    <td>Austria</td>
    <td>Ernst Handel</td>
    <td>Roland Mendel</td>
  </tr>
  <tr>
  <td>Ernst Handel</td>
    <td>Roland Mendel</td>
    <td>Austria</td>
    <td>Ernst Handel</td>
    <td>Roland Mendel</td>
    <td>Austria</td>
    <td>Ernst Handel</td>
    <td>Roland Mendel</td>
  </tr> -->
  <?php 
          }  
            
        ?>
</table>




    </div>

    
    
    </div>
      <!-- -- -->


         <a href="../admin.php"><button class="button is-danger" id="return" ><i class="fas fa-arrow-left"></i> </button></a>
          <button onclick="window.print();" class="button" id="home" ><i class="fas fa-print"></i> </button>

          

        </div>
      </center>
    </body>
    </html>
 