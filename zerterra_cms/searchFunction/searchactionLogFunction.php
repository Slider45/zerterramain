<?php


$sql= "SELECT * FROM tbl_activity_log WHERE CONCAT(`id`,`AdminName`, `Description`, `DateAction`) LIKE '%".$searchValue."%'";
$result = $con->query($sql);
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) 
  {
    $id = $row['id'];
    $author = $row['AdminName'];
    $action = $row['Description'];
    $dateAction = $row['DateAction'];
    
    ?>
    
    <tr>
           
            <td>
              <?php echo $author; ?>
            </td>
            <td>
              <?php echo $action; ?>
            </td>
            <td>
              <?php echo $dateAction; ?>
            </td>
        



  <?php 

  }
}



else{
	$msg='<p style="color: red;" class="is-size-4">NO RECORD FOUND</p>';
      include 'Modals/act_log_alert.php';
}

?>


</tr>




</tbody>