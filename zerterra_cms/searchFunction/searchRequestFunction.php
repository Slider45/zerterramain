<?php



include 'connection.php';
 
$sql= "SELECT * FROM request_list WHERE CONCAT(`serial_no`, `request_number`, `FirstName`, `LastName`, `email`) LIKE '%".$searchValue."%' AND is_approved='1'";
//$sql = "SELECT * FROM request_list WHERE is_approved='0'" ;
$result = $con->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) 
    {
        $id = $row['id'];
        $fname = $row['FirstName'];
        $lname = $row['LastName'];
        $contact = $row['contact'];
        $Email = $row['email'];
        $serialNo = $row['serial_no'];
        $reqNo = $row['request_number'];

        ?>

        <tr>
            <td>
               # <?php echo $id; ?>
            </td>
            <td>
                <?php echo $serialNo; ?>
            </td>
            <td>
                <?php echo $fname; ?>
            </td>
            <td>
                <?php echo $lname; ?>
            </td>
            <td>
                <?php echo $Email; ?>
            </td>
            <td>
                <?php echo $contact; ?>
            </td>
            <td>
                <?php echo $reqNo; ?>
            </td>
            <td>
                <button data-target="#edit<?php echo $id;?>" class="button is-primary is-small modal-button" id="btn_update" name="btn-update"><i class="far fa-edit"></i>
                </button>

                <button data-target="#delete<?php echo $id;?>" class="button is-danger is-small modal-button"  id="btn_delete" name="btn-delete"><i class="fas fa-trash-alt"></i>
                </button>

                <!-- EDIT MODAL -->

                <div id="edit<?php echo $id; ?>" class="modal" role="dialog">
                    <div class="modal-background"></div>
                    <div class="modal-card">
                        <header class="modal-card-head">
                            <p class="modal-card-title">EDIT REQUEST</p>
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
                                    <input class="input1" type="text" name="edit_name" value="<?php echo $fname; ?>" required="">
                                </div>

                                <div class="control">
                                    <input class="input1" type="text" name="edit_name" value="<?php echo $lname; ?>" required="">
                                </div>

                                <div class="control">
                                    <input class="input1" type="text" name="edit_name" value="<?php echo $reqNo; ?>" required="">
                                </div>

                                <div class="control">
                                    <input class="input1" type="number" name="edit_contact" value="<?php echo $contact; ?>"   required="">
                                </div>
                                <div class="control">
                                    <input class="input1" type="email" name="edit_email" value="<?php echo $Email; ?>"  required="">
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


<!-- END MODAL -->



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

