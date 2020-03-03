<?php


include 'approved.php';

if(isset($_POST['delivered_btn'])){
	
	//$serialNum = $row['SerialNumber'];
	$author = $_SESSION['admin'];
	$approvedID =$_POST['delivered_id'];
	$dateNow = date('Y/m/d');
	$fname = $_POST['Firstname'];
    $lname = $_POST['Lastname'];
    $email = $row['Email'];
    $contact = $row['Contact'];
    $address = $row['Address'];

	$sql= "UPDATE approveorders_list SET is_delivered='1' WHERE id='$approvedID'";
	if($con->query($sql) === TRUE){

	$sql= "INSERT INTO delivered_order_list (approve_id,Firstname,Lastname,Email,Contact,Address WHERE is_activated='1';) VALUES ('$id','$fname','$lname','$email','$contact','$address')";
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
}

                          
              
	?>