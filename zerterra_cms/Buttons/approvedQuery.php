<?php

if(isset($_POST['delivered_btn'])){
	
	$author = $_SESSION['admin'];
	$approvedID =$_POST['delivered_id'];
	$dateNow = date('Y/m/d');

	$sqlSelect="SELECT * FROM approved_order_list";
  	$res_data = $con->query($sqlSelect);
  	while($row = mysqli_fetch_array($res_data)){
	$serialNum = $row['SerialNumber'];
	$fname = $row['Firstname'];
	$lname = $row['Lastname'];
	$email = $row['Email'];
	$contact = $row['Contact'];
	$address = $row['Address'];


	$sql= "INSERT INTO delivered_order_list (SerialNumber,Firstname,Lastname,Email,Contact,Address,is_activated) VALUES ('$serialNum','$fname','$lname','$email','$contact','$address','1')";
	if($con->query($sql) === TRUE){
	
	$sql= "UPDATE approved_order_list SET is_delivered='1' WHERE id='$approvedID'";
	if($con->query($sql) === TRUE){

	$sql = "INSERT INTO tblactionlog (Author,Action,DateAction) VALUES ('$author','Item Delivered [ $serialNum ] ','$dateNow')";
	if($con->query($sql) === TRUE){


	}
	
	
		echo "<script>window.alert('RECORD HAS BEEN UPDATED!');</script>";
		echo '<script>window.location.href="approved.php"</script>';
	}else{
		echo "<script>window.alert('SOMETHING WENT WRONG, PLEASE TRY AGAIN!');</script>";
	}




}

}
}
	?>