<?php
include 'connection.php';

$sql= "SELECT * FROM tblusers_list WHERE CONCAT(`Serial_Number`,`Firstname`, `Lastname`, `email`, `ContactNumber`) LIKE '%".$searchValue."%' AND is_active='1'";
$result = $con->query($sql);
if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) 
	{
		$id = $row['id'];
		$serialNum = $row['Serial_Number'];
		$fname = $row['Firstname'];
		$lname = $row['Lastname'];
		$rdays = $row['remaining_days'];
		$email = $row['email'];
// $Address = $row['Address'];
		$contact = $row['ContactNumber'];

		?>

		<tr>


			<td>
				# <?php echo $id; ?>
			</td>
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
			<td style="text-align: center;">
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