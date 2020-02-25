<?php


$sql= "SELECT * FROM approved_order_list WHERE CONCAT(`SerialNumber`,`Firstname`, `Lastname`, `Email`, `Contact`) LIKE '%".$searchValue."%'";
 //$sql = "SELECT * FROM request_list WHERE is_approved='0'" ;
$result = $con->query($sql);
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) 
  {
                        $id = $row['id'];
                        $orderNum = $row['OrderNumber'];
                        $serialNum = $row['SerialNumber'];
                        $fname = $row['Firstname'];
                        $lname = $row['Lastname'];
                        $email = $row['Email'];
                        $contact = $row['Contact'];
                        $address = $row['Address'];
    
    ?>
    
    <tr>
     

    <td>
                             # <?php echo $id; ?>
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
                            <?php echo $contact; ?>
                        </td>


                        <td>
                            <button data-target="#delivered<?php echo $id;?>" class="button is-success is-small modal-button" id="btn_update" name="btn-update"><i class="far fa-edit"></i></i>
                            </button>
                            <?php
                            include 'Buttons/markAsDeliveredOrderModal.php';
                            ?> 


                        </td>




  <?php }





}
else{
	echo "<script>window.alert('NO RECORD FOUND!');</script>";
	echo '<script>window.location.href="approved.php"</script>';
}

?>


</tr>




</tbody>