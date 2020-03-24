<?php
include 'PagesFunction/connection.php';

$sql = "SELECT * FROM tblusers WHERE id = '7' AND is_active='1'";

$res_data = $con->query($sql);
while($row = mysqli_fetch_array($res_data)){
	$id = $row['id'];
	$serialNum = $row['SerialNumber'];
	$fname = $row['Firstname'];
	$lname = $row['Lastname'];
	$contact = $row['Contact'];
	$address = $row['Address']; 
	$email = $row['Email'];
	$pass = $row['Password'];
	$rdays = $row['RemainingDays'];
	$dateReg = $row['DateRegistered'];
	$dateEnd= $row['DateExpired'];
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>TRY PASS</title>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:600&display=swap" rel="stylesheet">
	<link rel="icon" href="images/plainlogo.png" type="image/x-icon" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
	<script src="js/homeJS.js"></script>
	<link rel="stylesheet" type="text/css" href="sass/sass.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
	<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://unpkg.com/bulma-modal-fx/dist/css/modal-fx.min.css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>

</head>


<style type="text/css" media="screen">
	.testpass{
		margin-top: 20px;
		margin-left: 100px;
	}
	.field{
		margin-top: 20px;
		width: 50%;	
		margin-left: 100px;
	}

	
</style>
<body>


	<p class="is-size-3" style="text-align: center;">COMPARING PASSWORD</p>
	<div class="testpass">

		<div class="field">
			<input class="input"  type="hidden" value="<?php echo $fname?>">
			<input class="input" id="oldpassDB" type="hidden" placeholder="Email" value="<?php echo $pass?>">
			<br><br>
			<p class="control has-icons-right">
				<input class="input" id="newpass" type="text" placeholder="new pass" onkeyup="check()">
				<span class="icon is-medium is-right">
					<i class="fas fa-check" id="iconcheck1" style="display: none;color: #48c774;"></i>
					<i class="fas fa-times" id="icontimes1" style="display:none;color:#f14668;"></i>
					
					<p class="notification is-danger is-size-6" id="validate-status" style="display:none; text-align: center;" ></p>
					
					
				</span>
			</p>
			<br>
			<a class="button is-primary is-rounded" id="btnSubmit" disabled='disabled'>Rounded</a>
		</div>
	</div>
	<hr>


	<script>
		// $(document).ready(function () {
			// $(document).ready(function() {
			// 	$("#newpass").keyup(check);
			// });

		// 	function check() {

		// 		var oldpass = document.getElementById('oldpassDB');
		// 		var valueoldpass = oldpass.value;

		// 		var newpass = document.getElementById('newpass');
		// 		var valuenewpass= newpass.value;

		// 		var btncheck = document.getElementById('btn');
		// 		var icon1 = document.getElementById('iconcheck1');
		// 		var icon2 = document.getElementById('icontimes1')

		// 		var wrngpass = document.getElementById('lblpasswrng');




		// 		if (valuenewpass == valueoldpass) {



		// 			wrningpass.style.color = 'green';
		// 			btncheck.disabled = false;
		// 			wrngpass.innerHTML = 'matching';
		// 			icon1.style.display = "block";
		// 			icon2.style.display = "none";


		// 		} else {


		// 			wrningpass.style.color = 'red';
		// 			btncheck.disabled = true;
		// 			wrngpass.innerHTML = 'not match!';
		// 			icon1.style.display = "none";
		// 			icon2.style.display = "block";

		// 		}
		// 	}
		// });

		$(document).ready(function() {
			$("#newpass").keyup(validate);
		});


		function validate() {
			var password1 = $("#oldpassDB").val();
			var password2 = $("#newpass").val();
			var btncheck = $("#btnSubmit");
			var wrning = $("#validate-status");
			var icon1 = $("#iconcheck1");
			var icon2 = $("#icontimes1");
			var notif = $("#notif");



			if(password1 == password2) {
				icon1.show();  
				icon2.hide();

				wrning.show();
				// wrning.addClass("is-success");
				// wrning.removeClass("is-danger");

				wrning.text("Password matched");  
				wrning.css("background-color","#48c774");
				btncheck.attr("disabled", false);


				

			}else if(password2==""){
				icon1.hide(); 
				icon2.hide();
				wrning.text(""); 
				wrning.hide();

				
			}
			else {
				icon1.hide(); 
				icon2.show();


				wrning.show();
				// wrning.addClass("is-danger");
				// wrning.removeClass("is-success");

				wrning.css("background-color","#f14668");
				wrning.text("invalid"); 
				// wrning.css("color","#f14668");
				btncheck.attr("disabled", true);
			}

		}

	</script>





	<script type="text/javascript" src="dist/js/modal-fx.min.js"></script>
	<script type="text/javascript" src="https://unpkg.com/bulma-modal-fx/dist/js/modal-fx.min.js"></script>
</body>
</html>