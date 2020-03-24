<?php

if(isset($_POST['delivered_btn'])){
	
	$author = $_SESSION['admin'];
	$approvedID =$_POST['delivered_id'];
	$dateNow = date('Y/m/d');

	$sqlSelect="SELECT * FROM approved_order_list WHERE id='$approvedID'";
	$res_data = $con->query($sqlSelect);
	while($row = mysqli_fetch_array($res_data)){
		$id = $row['id'];
		$serialNum = $row['SerialNumber'];
		$fname = $row['Firstname'];
		$lname = $row['Lastname'];
		$email = $row['Email'];
		$contact = $row['Contact'];
		$address = $row['Address'];


		$sql= "INSERT INTO tblusers (SerialNumber,Firstname,Lastname,Email,Contact,Address,is_active,RemainingDays,DateRegistered) VALUES ('$serialNum','$fname','$lname','$email','$contact','$address','1','730','$dateNow')";
		if($con->query($sql) === TRUE){

			$sql= "INSERT INTO delivered_order_list (SerialNumber,Firstname,Lastname,Email,Contact,Address,is_activated) VALUES ('$serialNum','$fname','$lname','$email','$contact','$address','1')";
			if($con->query($sql) === TRUE){

				$sql= "UPDATE approved_order_list SET is_delivered='1' WHERE id='$approvedID'";
				if($con->query($sql) === TRUE){




					echo "<script>window.alert('RECORD HAS BEEN UPDATED!');</script>";
		//echo '<script>window.location.href="approved.php"</script>';
				}else{
		//echo "<script>window.alert('SOMETHING WENT WRONG, PLEASE TRY AGAIN!');</script>";
				}




			}
		}
	}

}


if(isset($_POST['apprv_remove'])){
	$author = $_POST['adminEmail'];
	$adminPass=$_POST['adminpass'];


	$username = $_POST['username'];
	$delete_id = $_POST['delete_id'];
	$dateNow = date('Y/m/d');


	$sqlAdmin = "SELECT * FROM admin_list WHERE Email = '". $author ."' AND Password = '" . $adminPass . "' AND is_active = '1'";

	$resultAdmin = mysqli_query($con,$sqlAdmin);
	$admin = mysqli_fetch_array($resultAdmin);

	if($admin){

		$sql= "UPDATE approved_order_list SET is_removed='1' WHERE id='$delete_id'";
		if($con->query($sql) === TRUE){

			$sqlactionlog = "INSERT INTO tbl_activity_log (AdminName, Description, DateAction) VALUES ('$author','Approved list [$username] is removed ','$dateNow')";
			if($con->query($sqlactionlog)===TRUE){

				$msg='<p class="is-size-3">RECORD IS DELETED!</p>';
				include 'Modals/approve_modal_alert.php';


			}else{

				$msg='SOMETHING WENT WRONG, PLEASE TRY AGAIN!';
				include 'Modals/approve_modal_alert.php';
			}
		}
	}else{
		$msg='<p style="color: red;" class="is-size-4">INCORRECT PASSWORD!</p>';
		include 'Modals/approve_modal_alert.php';

	}

}


?>