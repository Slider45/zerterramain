<?php
include 'connection.php';

$sql= "SELECT * FROM tblusers WHERE CONCAT(`SerialNumber`,`Firstname`, `Lastname`, `Email`, `Contact`) LIKE '%".$searchValue."%' AND is_active='1'";
$result = $con->query($sql);
if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) 
	{
		$id = $row['id'];
		$serialNum = $row['SerialNumber'];
              $fname = $row['Firstname'];
              $lname = $row['Lastname'];
              $email = $row['Email'];
              $contact = $row['Contact'];
              $rdays = $row['RemainingDays'];
              $dateRegister = $row['DateRegistered'];
              $dateExpired = $row['DateExpired'];

		?>

		<tr>


		
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
                  <?php echo $rdays; ?>
                </td>
				<td>
                  <button data-target="#edit<?php echo $id;?>" class="button is-primary is-small modal-button" id="btn_update" name="btn-update"><i class="far fa-edit"></i>
                  </button>
                  <?php
                  include 'Buttons/usersEditModal.php';
                  ?>
                  <button data-target="#delete<?php echo $id;?>" class="button is-danger is-small modal-button"  id="btn_delete" name="acnt_remove"><i class="fas fa-trash-alt"></i>
                  </button>
                  <?php
                  include 'Buttons/usersRemoveModal.php';
                  ?>
                  <button data-target="#view<?php echo $id;?>" class="button is-success is-small modal-button"  id="btn_delete" name="acnt_view"><i class="far fa-eye"></i>
                  </button>
                  <?php
                  include 'Buttons/usersViewModal.php';
                  ?>
                </td>


				<?php 
				
			}


		}



		else{
			$msg='<p style="color: red;" class="is-size-4">NO RECORD FOUND</p>';
       include 'Modals/user_modal_alert.php';
		}

		?>


	</tr>




</tbody>