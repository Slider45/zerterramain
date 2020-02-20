<?php

include 'connection.php';

$sql= "SELECT * FROM request_repair_list WHERE CONCAT(`SerialNumber`, `RequestNumber`, `Firstname`, `Lastname`, `Email`) LIKE '%".$searchValue."%' AND is_approved='0'";
//$sql = "SELECT * FROM request_list WHERE is_approved='0'" ;
$result = $con->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) 
    {
      $id = $row['id'];
      $fname = $row['Firstname'];
      $lname = $row['Lastname'];
      $contact = $row['Contact'];
      $email = $row['Email'];
      $serialNum = $row['SerialNumber'];
      $requestNum = $row['RequestNumber'];
      $address = $row['Address'];
      ?>
        

        <tr>
        <td>
              <?php echo $id; ?>
            </td>
            <td>
              <?php echo $serialNum; ?>
            </td>
            <td>
              <?php echo $requestNum; ?>
            </td>
            <td>
              <?php echo $fname; ?>
            </td>
            <td>
              <?php echo $email; ?>
            </td>
            <td>
              <?php echo $contact; ?>
            </td>

        <td>
        <button data-target="#editrequest<?php echo $id;?>" class="button is-primary is-small modal-button" id="btn_update" name="btn-update"><i class="fas fa-pencil-alt"></i>
        </button>
        <?php
        include 'Buttons/requestEditModal.php';
        ?>
        <button data-target="#deleterequest<?php echo $id;?>" class="button is-danger is-small modal-button"  id="btn_delete" name="btn-delete"><i class="fas fa-trash-alt"></i>
        </button>
        <?php
        include 'Buttons/requestRemoveModal.php';
        ?>
            </td>









<?php }






}
else{
 echo "<script>window.alert('NO RECORD FOUND!');</script>";
 echo '<script>window.location.href="request.php"</script>';
}

?>


</tr>



</tbody>

