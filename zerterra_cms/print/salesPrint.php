<?php


$dateFrom = $_GET['from_date'];
$dateTo = $_GET['to_date'];

?>

<!DOCTYPE html>
<html>
<title>Sales Print</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
<script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">

<link rel="stylesheet" href="sass/salesPrint.css">

<body>
  <center>
    <div class="card">
      <header class="card-header">

        <p id="head-title">SALES</p>

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
  <tr>
    <th>Order #</th>
    <th>Firstname</th>
    <th>Lastname</th>
    <th>Email</th>
    <th>Contact</th>
    <th>Amount</th>
    <th>Vat</th>
    <th>Date-Purchased</th>
  </tr>
</table>




    </div>

    
    
    </div>
      <!-- -- -->


         <a href="../conso-sales.php"><button class="button is-danger" id="return" ><i class="fas fa-arrow-left"></i> </button></a>
          <button onclick="window.print();" class="button" id="home" ><i class="fas fa-print"></i> </button>

          

        </div>
      </center>
    </body>
    </html>
 