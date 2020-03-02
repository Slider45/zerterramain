<?php
include 'connection.php';

$sql= "SELECT * FROM tblsales_list WHERE CONCAT(`TransactionNumber`,`Firstname`, `Lastname`, `Email`) LIKE '%".$searchValue."%'";
$result = $con->query($sql);
if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) 
	{
		$id = $row['id'];
            $transcationNumber = $row['TransactionNumber'];
            $firstname = $row['Firstname'];
            $lastname = $row['Lastname'];
            $email = $row['Email'];
            $contact = $row['Contact'];
            $amount = $row['Amount'];
            $vat = $row['Vat'];
            $datePurchased = $row['Date_Purchased'];

		?>

		<tr>


		<td>
                # <?php echo $id; ?>
            </td>
            <td>
                  <?php echo $transcationNumber; ?>
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
                  <?php echo $amount; ?>
            </td>
            <td>
                  <?php echo $vat; ?>
            </td>
            <td>
                  <?php echo $datePurchased; ?>
            </td>
			


				<?php 
				
			}


		}



		else{
			echo "<script>window.alert('NO RECORD FOUND!');</script>";
			echo '<script>window.location.href="conso-sales.php"</script>';
		}

		?>


	</tr>




</tbody>