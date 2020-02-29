<?php
session_start();
if(!isset($_SESSION["admin"]))
{
 header("location:../Log-in.php");
}
$connect = mysqli_connect("localhost", "root", "", "zerterra_db");  
$query = "SELECT * FROM tblsales_list ORDER BY Date_Purchased desc";  
$result = mysqli_query($connect, $query);


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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>  
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>  
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3..3.6/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">  

<body>
  <?php
  include 'Pages/salesViewPage.php'; 
  include 'admin-header.php';
  include 'Buttons/salesSearch.php';
  ?>

  <div class="w3-sidebar w3-bar-block w3-collapse w3-card w3-animate-left" style="width:200px;" id="mySidebar">
    <button class="w3-bar-item w3-button w3-large w3-hide-large" onclick="w3_close()" id="close">&times;</button>
    <a href="index.php" class="w3-bar-item w3-button" id="item-hover"><i class="fas fa-th-large"></i> &nbsp Dashboard</a>
    <a href="admin.php" class="w3-bar-item w3-button" id="item-hover"> <i class="fas fa-user-shield"></i> &nbsp Admin</a>
    <a href="users.php" class="w3-bar-item w3-button" id="item-hover"><i class="fas fa-user"></i> &nbsp Users</a>
    <a class="w3-bar-item w3-button w3-dropdown-hover" id="sendmodal" ><i class="fas fa-cubes"></i> &nbsp Orders</a>
    <a href="request.php" class="w3-bar-item w3-button" id="item-hover"><i class="fas fa-envelope-open-text"></i> &nbsp Request</a>
    <a href="sales.php" class="w3-bar-item w3-button" id="dashboard"><i class="fas fa-hand-holding-usd"></i> &nbsp sales</a>
    <button onclick="document.getElementById('id01').style.display='block'" href="consolidate.php" class="w3-bar-item w3-button" id="item-hover" ><i class="fas fa-print"></i> &nbsp Consolidate</button>
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
          
                </div>
                <div>
           <div class="col-md-3">  
                     <input type="text" name="from_date" id="from_date" class="form-control" placeholder="From Date" />  
                </div>  
                <div class="col-md-3">  
                     <input type="text" name="to_date" id="to_date" class="form-control" placeholder="To Date" />  
                </div>  
                <div class="col-md-3">  
                     <input type="button" name="filter" id="filter" value="Filter" class="btn btn-info" />  
                </div> 
          </div>
           </div>
           <br>
           
               <section class="section">
                <div class="container" id="order_table">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Amount</th>
                        <th>Options</th>
                      </tr>
                    </thead>

                    <?php 

                    if (isset($_POST['search_btn'])){
                      $searchValue = $_POST['searchValue'];

                      if ($searchValue===''){
                        echo '<script>window.location.href="?"</script>';
                      }else{
                        include 'searchFunction/searchSalesFunction.php';
                      }
                    }else{     
                      $sql = "SELECT * FROM tblsales_list ORDER BY ID DESC LIMIT $offset, $no_of_records_per_page";
                      $res_data = $connect->query($sql);
                      while($row = mysqli_fetch_array($res_data)){
                        $id = $row['id'];
                        $fname = $row['Firstname'];
                        $lname = $row['Lastname'];
                        $amount = $row['Amount'];

                        ?>
    
                        <tbody>
                          <tr>
                            <td>
                              # <?php echo $id; ?>
                            </td>
                            <td>
                              <?php echo $fname; ?>
                            </td>
                            <td>
                              <?php echo $lname; ?>
                            </td>
                            <td>
                              <?php echo $amount; ?>
                            </td>
                            <td>
                              <button data-target="#view<?php echo $id;?>" class="button is-success is-small modal-button"  id="btn_delete" name="acnt_view"><i class="far fa-eye"></i>
                              </button>
                              <?php
                              include 'Buttons/salesViewModal.php';
                              ?>
                            </td>
                          </tr>

                          <?php 
                        }  
                      } 
                    
                      ?>

                    </tbody>
                  </table>
              <nav aria-label="Page navigation example">
                    <ul class="pagination">
                      <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                      <li class="page-item"><a class="page-link" href="#">1</a></li>
                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item"><a class="page-link" href="#">Next</a></li>
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

           

  <?php
include 'consolidate.php';
?>

<?php
include 'ordersModal.php';
?>

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


            $(document).ready(function(){  
           $.datepicker.setDefaults({  
                dateFormat: 'yy-mm-dd'   
           });  
           $(function(){  
                $("#from_date").datepicker();  
                $("#to_date").datepicker();  
           });  
           $('#filter').click(function(){  
                var from_date = $('#from_date').val();  
                var to_date = $('#to_date').val();  
                if(from_date != '' && to_date != '')  
                {  
                     $.ajax({  
                          url:"fetch.php",  
                          method:"POST",  
                          data:{from_date:from_date, to_date:to_date},  
                          success:function(data)  
                          {  
                               $('#order_table').html(data);  
                          }  
                     });  
                }  
                else  
                {  
                     alert("Please Select Date");  
                }  
           });  
      });  
          </script>

        </body>

        </html>