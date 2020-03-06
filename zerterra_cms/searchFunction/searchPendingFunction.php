<?php


$sql= "SELECT * FROM pending_order_list WHERE CONCAT(`OrderNumber`,`Firstname`, `Lastname`, `Email`,`Contact`) LIKE '%".$searchValue."%'";

$result = $con->query($sql);
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) 
  {
    $id = $row['id'];
    $orderNum = $row['OrderNumber'];
    $fname = $row['Firstname'];
    $lname = $row['Lastname'];
    $email = $row['Email'];
    $contact = $row['Contact'];
    $address = $row['Address'];  
    
    ?>
    
    <tr>
     

  

                                 <td>
                                  <?php echo $orderNum; ?>
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
        <button data-target="#edit<?php echo $id;?>" class="button is-primary is-small modal-button" id="btn_update" name="btn-update"><i class="far fa-edit"></i>
        </button>
        <?php
         include 'Buttons/pendingEditModal.php';
        ?>  
        <button data-target="#view<?php echo $id;?>" class="button is-success is-small modal-button"  id="btn_delete" name="btn-delete"><i class="fas fa-eye"></i>
        </button>
        <?php
          include 'Buttons/pendingApproveModal.php';
       ?>
      </td>





       <?php }





     }
     else{
        $msg='<p style="color: red;" class="is-size-4">NO RECORD FOUND</p>';
       include 'Modals/pending_modal_alert.php';
     }

     ?>


   </tr>




 </tbody>