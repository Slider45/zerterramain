<?php

if(isset($_POST['delivered_btn'])){
	
	//$serialNum = $row['SerialNumber'];
	$author = $_SESSION['admin'];
	$approvedID =$_POST['delivered_id'];
	$dateNow = date("d/m/Y");

	$sql= "UPDATE approveorders_list SET is_delivered='1' WHERE id='$approvedID'";
	if($con->query($sql) === TRUE){

	$sql = "INSERT INTO tblactionlog (Author,Action,DateAction) VALUES ('$author','Item Delivered [ $serialNum ] ','$dateNow')";

	if($con->query($sql) === TRUE){

		echo "<script>window.alert('RECORD HAS BEEN UPDATED!');</script>";
		echo '<script>window.location.href="approved.php"</script>';
	}else{
		echo "<script>window.alert('SOMETHING WENT WRONG, PLEASE TRY AGAIN!');</script>";
	}


}

}


                          
              
	?>