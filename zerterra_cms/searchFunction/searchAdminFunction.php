<?php


$sql= "SELECT * FROM admin_list WHERE CONCAT(`name`, `contact`, `Email`) LIKE '%".$searchValue."%' AND is_active='1'";
 //$sql = "SELECT * FROM request_list WHERE is_approved='0'" ;
$result = $con->query($sql);
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) 
  {
    $id = $row['ID'];
    $name = $row['name'];
    $contact = $row['contact'];
    $Email = $row['Email'];
    $role = $row['role'];
    
    ?>
    
              <tr>
              

                <td>
                # <?php echo $id; ?>
              </td>

              <td>
                <?php echo $name; ?>
              </td>

              <td>
                <?php echo $contact; ?>
              </td>

              <td>
                <?php echo $Email; ?>
              </td>
              <td>
                <?php echo $role; ?>
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
       echo "<script>window.alert('NO RECORD FOUND!');</script>";
       echo '<script>window.location.href="admin.php"</script>';
     }

     ?>


   </tr>




 </tbody>