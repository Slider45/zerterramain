<?php


$sql= "SELECT * FROM sales_list WHERE CONCAT(`Firstname`, `Lastname`, `Amount`) LIKE '%".$searchValue."%' AND is_active='1'";
 //$sql = "SELECT * FROM request_list WHERE is_approved='0'" ;
$result = $con->query($sql);
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) 
  {
            $id = $row['id'];
            $fname = $row['Firstname'];
            $lname = $row['Lastname'];
            $amount = $row['Amount'];

    
    ?>
    
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


       <?php }





     }
     else{
       echo "<script>window.alert('NO RECORD FOUND!');</script>";
       echo '<script>window.location.href="sales.php"</script>';
     }

     ?>


   </tr>




 </tbody>