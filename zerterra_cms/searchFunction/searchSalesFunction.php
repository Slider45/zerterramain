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
                          
    
    
    <td style="text-align: center;">
     <button data-target="#edit<?php echo $id;?>" class="button is-primary is-small modal-button" id="btn_update" name="btn-update"><i class="far fa-edit"></i>
     </button>

     <div id="edit<?php echo $id; ?>" class="modal" role="dialog">
       <div class="modal-background"></div>
       <div class="modal-card">
        <header class="modal-card-head">
          <p class="modal-card-title">EDIT ACCOUNT</p>
          <button class="modal-close" aria-label="close"></button>
        </header>
        <form method="POST" class="modal-card-body" style="padding-bottom: 10px;">
          
          <div class="field">
            <div class="control">
              <div class="field">
                <input type="hidden" name="edit_id" value="<?php echo $id; ?>">
              </div>
            </div>
            <div class="control">
              <input class="input" type="text" name="edit_name" value="<?php echo $fname; ?>" required="">
            </div>
            <div class="control">
              <input class="input" type="text" name="edit_name" value="<?php echo $lname; ?>" required="">
            </div>
            <div class="control">
              <input class="input" type="number" name="edit_contact" value="<?php echo $contact; ?>"   required="">
            </div>
            <div class="control">
              <input class="input" type="email" name="edit_email" value="<?php echo $Email; ?>"  required="">
            </div>
            <div class="control" style="margin-top: 10px;">
              
                       <!-- <div class="select">
                         <select style="width: 1000px; padding-top:5px; border:solid 1px;" name="role"required="">
                          <option >Super Admin</option>
                          <option>Admin</option>
                         </select>
                       </div> -->
                     </div>
                   </div>
                   
                   <button type="submit" name="updated_id" class="button is-success">Save</button>
                   <button class="button is-danger">Cancel</button>

                 </form>

               </div>
             </div>





             <button data-target="#delete<?php echo $id;?>" class="button is-danger is-small modal-button"  id="btn_delete" name="btn-delete"><i class="fas fa-trash-alt"></i>
             </button></a>


             <div id="delete<?php echo $id; ?>" class="modal" role="dialog">

              <div class="modal-background"></div>
              <div class="modal-card">
                <header class="modal-card-head">
                  <p class="modal-card-title">REMOVE ACCOUNT</p>
                  <button class="modal-close" aria-label="close"></button>
                </header>
                <form method="POST" class="modal-card-body">
                  
                  <div class="field">
                    <input type="hidden" name="delete_id" value="<?php echo $id; ?>">
                    <input type="hidden" name="role_id" value="<?php echo $role; ?>">
                  </div>

                  <div class="is-danger">Are you Sure you want Delete <strong>
                    "<?php echo $name;?>"?</strong> </div>
                    <div class="modal-footer">
                    </div>
                    <div style = "margin-bottom: 10px; margin-top: 20px; margin-left: 400px; margin-right: auto;">
                     <button  class="button is-success" name="acnt_remove">REMOVE</button>
                     <button class="button is-danger">Cancel</button>
                   </div>
                   

                 </form>

               </div>
             </div>
           </div>

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