<?php


$sql= "SELECT * FROM `delivered_order_list` WHERE CONCAT(`OrderNumber`,`SerialNumber`,`Firstname`, `Lastname`, `Email`, `Contact`) LIKE '%".$searchValue."%' AND is_activated='1'";
 //$sql = "SELECT * FROM request_list WHERE is_approved='0'" ;
$result = $con->query($sql);
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) 
  {
    $id = $row['id'];
    $orderNum = $row['OrderNumber'];
    $serialNum =$row['SerialNumber'];
    $fname = $row['Firstname'];
    $lname = $row['Lastname'];
    $email = $row['Email'];
    $Contact = $row['Contact'];
    $Address = $row['Address'];
    
    ?>
    
    <tr>


        <td>
          <?php echo  $orderNum; ?>
      </td>

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
        <?php echo $Contact; ?>
    </td>
    
    <td>
        <?php echo $Address; ?>
    </td>
    





    <?php 
}





}
else{
	echo "<script>window.alert('NO RECORD FOUND!');</script>";
	echo '<script>window.location.href="delivered.php"</script>';
}

?>


</tr>




</tbody>