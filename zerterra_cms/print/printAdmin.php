
<!DOCTYPE html>
<html>
<title>Admin</title>
<body>

<div class="container">
<p><button class="btn">Print Table</button></p>
<table class="table" id="table">
<thead>
<tr>
              <th>#</th>
              <th>Full Name</th>
              <th>Contact</th>
              <th>Email</th>
              <th>Position</th>

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
  $fullname = $row['Fullname'];
 
  $contact = $row['Contact'];
  $email = $row['Email'];
  $position = $row['Position'];
  
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
            


            </tr>

            <?php 
          }  
        }        
        ?>
      </tbody>

</body>
</html>

<script src="jquery.min.js"></script>
<script>
    $('.btn').click()