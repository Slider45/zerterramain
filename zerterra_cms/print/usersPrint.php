<?php

include '../../PagesFunction/connection.php';

$dateFrom = $_GET['from_date'];
$dateTo = $_GET['to_date'];

?>

<!DOCTYPE html>
<html>
<title>Users Print</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
<script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">

<link rel="stylesheet" href="sass/usersPrint.css">

<body>
  <center>
    <div class="card">
      <header class="card-header">

        <p id="head-title">USERS</p>

        <p id="h-img">
          <img src="images/logowhite.png" alt="">
        </p>
      
      </header>

    <div class="card-content">

    <div id="date">
        <p>FROM: <?php echo $dateFrom; ?> <span id="date-today"> DATE:02-25-2020</span></p>
        <p>TO:<?php echo $dateTo; ?></p>
    </div>

    <div class="table">

    <table>
    <thead>
  <tr>
    <th>Serial #</th>
    <th>Firstname</th>
    <th>Lastname</th>
    <th>Email</th>
    <th>Contact</th>
    <th>Remaining Days</th>
    <th>Date Registered</th>
    <th>Date Expired</th>
  </tr>
  </thead>
  <?php
  
  $sql = "SELECT * FROM tblusers WHERE is_active='1' ORDER BY id DESC";
              $res_data = $con->query($sql);
              while($row = mysqli_fetch_array($res_data)){
                $id = $row['id'];
                $serialNum = $row['SerialNumber'];
                $fname = $row['Firstname'];
                $lname = $row['Lastname'];
                $contact = $row['Contact'];   
                $email = $row['Email'];
                $rdays = $row['RemainingDays'];
                $dateReg = $row['DateRegistered'];
                $dateEnd= $row['DateExpired'];
                
                ?>


<tbody>
<tr>
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
                    <?php echo $contact; ?> Days
                  </td>
                  <td>
                    <?php echo $rdays; ?> Days
                  </td>
                  <td>
                    <?php echo $dateReg; ?>
                  </td>
                  <td>
                    <?php echo $dateEnd; ?>
                  </td>
                 
                </tr>

</tbody>
<?php
              }
?>
</table>




    </div>

    
    
    </div>
      <!-- -- -->


         <a href="../conso-users.php"><button class="button is-danger" id="return" ><i class="fas fa-arrow-left"></i> </button></a>
          <button onclick="window.print();" class="button" id="home" ><i class="fas fa-print"></i> </button>

          

        </div>
      </center>
    </body>
    </html>
 