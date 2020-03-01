<?php
include 'connection.php';

$sql= "SELECT * FROM tblusers WHERE CONCAT(`SerialNumber`,`Firstname`, `Lastname`, `Email`) LIKE '%".$searchValue."%'";
$result = $con->query($sql);
if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) 
	{
		$id = $row['id'];
              $serialNumber = $row['SerialNumber'];
              $firstname = $row['Firstname'];
              $lastname = $row['Lastname'];
              $email = $row['Email'];
              $contact = $row['Contact'];
              $rdays = $row['RemainingDays'];
              $dateRegister = $row['DateRegistered'];
              $dateExpired = $row['DateExpired'];

		?>

		<tr>


		<td>
                  # <?php echo $id; ?>
              </td>
              <td>
                    <?php echo $serialNumber; ?>
              </td>
              <td>
                    <?php echo $firstname; ?>
              </td>
              <td>
                    <?php echo $lastname; ?>
              </td>
              <td>
                    <?php echo $email; ?>
              </td>
              <td>
                    <?php echo $contact; ?>
              </td>
              <td>
                    <?php echo $rdays; ?>
              </td>
              <td>
                    <?php echo $dateRegister; ?>
              </td>
              <td>
                    <?php echo $dateExpired; ?>
              </td>
			


				<?php 
				
			}


		}



		else{
			echo "<script>window.alert('NO RECORD FOUND!');</script>";
			echo '<script>window.location.href="conso-users.php"</script>';
		}

		?>


	</tr>




</tbody>