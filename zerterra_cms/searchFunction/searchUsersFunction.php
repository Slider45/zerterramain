<?php
include 'connection.php';

$sql= "SELECT * FROM sales_list WHERE CONCAT(`FirstName`, `LastName`, `email`, `Contact`) LIKE '%".$searchValue."%' AND is_active='1'";
$result = $con->query($sql);
 if ($result->num_rows > 0) {
 	while($row = $result->fetch_assoc()) 
 	{
$id = $row['id'];
$fname = $row['FirstName'];
$lname = $row['LastName'];
$rdays = $row['RemainingDays'];
$email = $row['email'];
$Address = $row['Address'];
$contact = $row['Contact'];

?>

<tr>


<td>
<?php echo $id; ?>
</td>

<td>
<?php echo $fname; ?>
</td>

<td>
<?php echo $lname; ?>
</td>

<td>
<?php echo $rdays; ?>
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
<input class="input1" type="text" name="edit_fname" value="<?php echo $fname; ?>" required="">
</div>
<div class="control">
<input class="input1" type="text" name="edit_lname" value="<?php echo $lname; ?>" required="">
</div>
<div class="control">
<input class="input1" type="email" name="edit_email" value="<?php echo $email; ?>"   required="">
</div>
<div class="control">
<input class="input1" type="text" name="edit_address" value="<?php echo $Address; ?>"  required="">
</div>
<div class="control">
<input class="input1" type="number" name="edit_contact" value="<?php echo $contact; ?>"  required="">
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

<button type="submit" name="updated_user" class="button is-success">Save</button>
<button class="button is-danger">Cancel</button>

</form>

</div>
   </div>


   <?php 
   
}


 }



else{
	echo "<script>window.alert('NO RECORD FOUND!');</script>";
	echo '<script>window.location.href="users.php"</script>';
}

?>


</tr>




</tbody>