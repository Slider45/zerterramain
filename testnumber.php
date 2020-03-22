<?php
include 'PagesFunction/connection.php';

$userid = "7";





$sql = "SELECT * FROM tblusers WHERE id='$userid' AND is_active='1'";

$res_data = $con->query($sql);
while($row = mysqli_fetch_array($res_data)){
	$id = $row['id'];
	$serialNum = $row['SerialNumber'];
	$fname = $row['Firstname'];
	$lname = $row['Lastname'];
	$contact = $row['Contact'];
	$address = $row['Address']; 
	$email = $row['Email'];
	$rdays = $row['RemainingDays'];
	$dateReg = $row['DateRegistered'];
	$dateEnd= $row['DateExpired'];

	$dateToday = date("2021/03/06");

	$testTime = date("His");
	$start_date = strtotime($dateToday);
	$end_date = strtotime($dateEnd);

	$diffdate = ($end_date - $start_date)/60/60/24;

	// $autoupdate_sql = "UPDATE tblusers SET RemainingDays = '$diffdate' WHERE id='$userid' AND time >= now() - INTERVAL 1 HOUR";

	// if($con->query($autoupdate_sql) === TRUE)
	if($userid == 7){
		// echo "<script>alert('UPDATE SUCCESS');</script>";
		$sql = "UPDATE tblusers SET RemainingDays = '170' WHERE id='$userid";

		if($con->query($sql)){
			echo "<script>alert('UPDATE SUCCESS');</script>";
		}else{
			echo "<script>alert('UPDATE FAILED');</script>";
		}



	}else{
		echo "<script>alert('UPDATE FAILED');</script>";
	}



}

// $dateToday = date("Y/m/d");





?>

<!DOCTYPE html>
<html>
<head>
	<title>test number</title>
</head>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
<link rel="stylesheet" href="https://unpkg.com/bulma-modal-fx/dist/css/modal-fx.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css">

<style type="text/css" media="screen">

	.field{
		margin-top: 100px;
		width: 50%;	
		margin-left: 100px;
	}
	#iconcheck{
		display: none;
		color: #48c774;

	}

	#icontimes{
		display:none;
		color:#f14668;
	}



</style>


<body>



	<!-- <form action="testnumber.php" method="POST" accept-charset="utf-8">
	-->
	<div class="field" >
		<p class="control has-icons-right">
			<input class="input" type="text" maxlength="10" id="phonetxt" onkeyup="mobileValidation()" placeholder="phonenumber">
			<span class="icon is-small is-right">
				<i class="fas fa-check" id="iconcheck"></i>
				<i class="fas fa-times" id="icontimes"></i>
			</span>
		</p>
	</div>
	
	<!-- 	<div class="testnum"><input type="text" name="number" maxlength="10" id="phonetxt" onfocusout="mobileValidation()" placeholder="phonenumber"><i class="fas fa-check" id="icontest"></i></div> -->
	<input type="text" name="username" id="uname"  placeholder="username">
	<button type="button" id="checknumber" name="checknumber" >check number</button>
	<p id="textwarning"></p>

	<br>
	<div class="testing"style="margin-left: 100px;">
		<p class="is-size-4">NAME: <?php echo $fname; ?></p>
		<br>
		<p class="is-size-4">REMAINING DAYS: <?php echo $rdays; ?></p>
		<br>
		<p class="is-size-4">DATE REGS: <?php echo $dateReg; ?></p>
		<br>
		<p class="is-size-4">DATE END: <?php echo $dateEnd; ?></p>
		<br>
		<p class="is-size-4">TIME NOW: <?php echo $dateToday; ?></p>
		<br>
		

	</div>





	<script>

		function mobileValidation() {
			var myTextBox = document.getElementById('phonetxt');
			var value = myTextBox.value;
			var btn = document.getElementById('checknumber');
			var wrning = document.getElementById('textwarning');
			var checkicon = document.getElementById('iconcheck');
			var erroricon = document.getElementById('icontimes');
			

			var regx =/^(9)\d{9}/;




			if (regx.test(value)){
				
				
				myTextBox.style.borderColor = 'blue';
				btn.disabled = false;
				wrning.innerHTML="Valid";
				checkicon.style.display = "block";
				erroricon.style.display = "none";
				// erroricon.css('display','none');

				
				
			}else{
				myTextBox.style.borderColor = "red";
				btn.disabled = true;
				wrning.innerHTML="in-Valid";
				checkicon.style.display = "none";
				erroricon.style.display = "block";
			}
		}


		
	</script>

	<script type="text/javascript" src="dist/js/modal-fx.min.js"></script>
	<script type="text/javascript" src="https://unpkg.com/bulma-modal-fx/dist/js/modal-fx.min.js"></script>
</body>




</html>