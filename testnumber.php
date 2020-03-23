<?php
include 'PagesFunction/connection.php';










$testTime = date("i");



// $sql1="SELECT GROUP_CONCAT(id) FROM `tblusers`";

$sql = "SELECT * FROM tblusers WHERE is_active='1'";

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


	$datenow = time();

	$dateExp = strtotime($dateEnd);

	$datediff = $dateExp-$datenow;
	$diff = round($datediff / (60 * 60 * 24));


	if($testTime==2){
		$query ="UPDATE tblusers SET RemainingDays = '$diff' WHERE id='$id'";
		if($con->query($query) === TRUE){
			$msge="HELLO";
		}else{
			$msge="query Failed";
		}
	}else{
		$msge="world";
	}

}


$datenow = time();

$dateExp = strtotime($dateEnd);

$datediff = $dateExp-$datenow;
$diff = round($datediff / (60 * 60 * 24));




// CREATE EVENT `update_warranty` ON SCHEDULE EVERY 5 MINUTE STARTS '2020-03-23 00:00:00.000000' ENDS '2030-03-23 00:00:00.000000' ON COMPLETION NOT PRESERVE ENABLE DO UPDATE tblusers SET RemaingDays = 1 WHERE id=id AND is_active='1'

// CREATE EVENT IFupdate_warranty
// ON SCHEDULE 
// EVERY 5 MINUTES
// DO 
// UPDATE [tbl_name] SET [column_name] = 1 WHERE id=id AND is_active='1';


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
		margin-top: 20px;
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
	.testupdate{
		margin-top: 100px;
		margin-left: 100px;
	}




</style>


<body>
	<div class="testupdate">
		<form action="connection.php" method="get" accept-charset="utf-8">
			<input type="text" name="remainingDays" id="warrantyLeft" value="<?php echo $diff;?>">
			<input type="text" value="<?php echo $testTime; ?>" >
			<input type="text" value="<?php echo $msge; ?>" >
			<input type="text" value="<?php echo $id; ?>" >
		</form>
	</div>




	<hr>

	<!-- <form action="testnumber.php" method="POST" accept-charset="utf-8">
	-->
	<div class="field" >
		<p class="control has-icons-right">
			<input class="input" type="text" maxlength="10" id="phonetxt" onkeyup="mobileValidation()" placeholder="phonenumber">
			<span class="icon is-small is-right">
				<i class="fas fa-check" id="iconcheck"></i>
				<i class="fas fa-times" id="icontimes"></i>
			</span>
			<p id="textwarning"></p>
		</p>
		<br>
		<button type="button" class="button is-primary" id="checknumber" name="checknumber" >CHECK NUMBER</button>
	</div>
	
	<!-- 	<div class="testnum"><input type="text" name="number" maxlength="10" id="phonetxt" onfocusout="mobileValidation()" placeholder="phonenumber"><i class="fas fa-check" id="icontest"></i></div> -->
	
	
	
	<hr>

	<br>
	<div class="testing"style="margin-left: 100px;">
		<p class="is-size-4">NAME: <?php echo $fname; ?></p>
		<br>
		<p class="is-size-4">REMAINING DAYS: <?php echo $rdays; ?></p>
		<br>
		<p class="is-size-4">DATE REGS: <?php echo $dateReg; ?></p>
		<br>
		<input type="text" class="is-size-4" id="dateExp" value="<?php echo $dateEnd; ?>" readonly>
		<br>
		<!-- 	<p class="is-size-4">TIME NOW: <?php //echo $dateToday; ?></p> -->
		<br>
		<p class="is-size-4" id="demo"></p>

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


	<script>






		// var currentTime = new Date();
		// var h = currentTime.getHours();
		// document.getElementById("warrantyLeft").value = h;
















// Set the date we're counting down to
var dateExp = document.getElementById("dateExp").value;
var countDownDate = new Date(dateExp).getTime();
// var currentTime = new Date();
// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();

  // Find the distance between now and the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Output the result in an element with id="demo"
  document.getElementById("demo").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";

  // If the count down is over, write some text 
  if (distance < 0) {
  	clearInterval(x);
  	document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);

// var h = currentTime.getHours();
// var m = currentTime.getMinutes();
// document.getElementById("demo").innerHTML = m;
// if(h==0){
// 	alert("hello");
// }else{
// 	alert("world")
// }

</script>

<script type="text/javascript" src="dist/js/modal-fx.min.js"></script>
<script type="text/javascript" src="https://unpkg.com/bulma-modal-fx/dist/js/modal-fx.min.js"></script>
</body>




</html>