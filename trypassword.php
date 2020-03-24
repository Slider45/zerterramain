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
			<input class="input" id="oldpassDB" type="text" placeholder="Email" value="<?php echo $pass?>">
			<br><br>
			<p class="control has-icons-right">
				<input class="input" id="newpass" type="text" placeholder="new pass" onkeyup='check();'>
				<span class="icon is-medium is-right">
					<i class="fas fa-check" id="iconcheck1" style="display: none;color: #48c774;"></i>
					<i class="fas fa-times" id="icontimes1" style="display:none;color:#f14668;"></i>
					<p id="lblpasswrng" style="text-align: center" class="is-size-5"></p>
				</span>
			</p>
			<br>
			<a class="button is-primary is-rounded" id="btn">Rounded</a>
		</div>
	</div>
	<hr>


	<script>
		$(document).ready(function () {
			
			function check() {

				var oldpass = document.getElementById('oldpassDB');
				var valueoldpass = oldpass.value;

				var newpass = document.getElementById('newpass');
				var valuenewpass= newpass.value;

				var btncheck = document.getElementById('btn');
				var icon1 = document.getElementById('iconcheck1');
				var icon2 = document.getElementById('icontimes1')

				var wrngpass = document.getElementById('lblpasswrng');




				if (valueoldpass == oldpass) {



					wrningpass.style.color = 'green';
					btncheck.disabled = false;
					wrngpass.innerHTML = 'matching';
					icon1.style.display = "block";
					icon2.style.display = "none";


				} else {


					wrningpass.style.color = 'red';
					btncheck.disabled = true;
					wrngpass.innerHTML = 'not match!';
					icon1.style.display = "none";
					icon2.style.display = "block";

				}
			}
		});

		

	</script>





	<script type="text/javascript" src="dist/js/modal-fx.min.js"></script>
	<script type="text/javascript" src="https://unpkg.com/bulma-modal-fx/dist/js/modal-fx.min.js"></script>
</body>
</html>