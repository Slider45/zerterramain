<?php


$sql= "SELECT * FROM admin_list WHERE CONCAT(`Fullname`, `Password`, `Contact`, `Email`, `Position`) LIKE '%".$searchValue."%' AND is_active='1'";
 //$sql = "SELECT * FROM request_list WHERE is_approved='0'" ;
$result = $con->query($sql);
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) 
  {
    $id = $row['id'];
    $fullname = $row['Fullname'];
    $password = $row['Password'];
    $contact = $row['Contact'];
    $email = $row['Email'];
    $position = $row['Position'];
    ?>
    
    <tr>
      

     
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
      
      <td>


        <button data-target="#edit<?php echo $id;?>" class="button is-primary is-small modal-button" id="btn_update" name="btn-update"><i class="far fa-edit"></i>
        </button>
        <?php
        include 'Buttons/adminEditModal.php';
        ?>
        <button data-target="#delete<?php echo $id;?>" class="button is-danger is-small modal-button"  id="btn_delete" name="btn-delete"><i class="fas fa-trash-alt"></i>
        </button>
        <?php
        include 'Buttons/adminRemoveModal.php';
        ?>
      </td>





    <?php }





  }
  else{
   $msg='<p style="color: red;" class="is-size-4">NO RECORD FOUND</p>';
       include 'Modals/remove_admin_alert.php';
 }

 ?>


</tr>




</tbody>