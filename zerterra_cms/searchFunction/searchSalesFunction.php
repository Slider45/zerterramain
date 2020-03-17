<?php


$sql= "SELECT * FROM tblsales_list WHERE CONCAT(`TransactionNumber`, `Firstname`, `Lastname`, `Amount`) LIKE '%$searchValue%'";
 //$sql = "SELECT * FROM request_list WHERE is_approved='0'" ;
$result = $con->query($sql);
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) 
  {
    $id = $row['id'];
    $transcationNumber = $row['TransactionNumber'];
    $firstname = $row['Firstname'];
    $lastname = $row['Lastname'];
    $email = $row['Email'];
    $contact = $row['Contact'];
    $amount = $row['Amount'];
            

    
    ?>
    
    
    <tr>
          
            <td>
                  <?php echo $transcationNumber; ?>
            </td>
            <td>
                  <?php echo $firstname; ?>
            </td>
            <td>
                  <?php echo $lastname; ?>
            </td>
            <td>
                  <?php echo $amount; ?>
            </td>
            </td>
            <td>
            <button data-target="#view<?php echo $id;?>" class="button is-success is-small modal-button"  id="btn_delete" name="acnt_view"><i class="far fa-eye"></i>
            </button>
            <?php
                include 'Buttons/salesViewModal.php';
            ?>
            </td>

    


    <?php }





}
else{
<<<<<<< HEAD
$msg='<p style="color: red;" class="is-size-4">NO RECORD FOUND</p>';
=======
      $msg='<p style="color: red;" class="is-size-4">NO RECORD FOUND</p>';
>>>>>>> origin/master
      include 'Modals/sales_alert.php';
}

?>


   </tr>




 </tbody>