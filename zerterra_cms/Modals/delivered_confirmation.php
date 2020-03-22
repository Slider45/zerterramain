<?php
session_start();
include '../connection.php';
$orderNum = $_GET['orderNum'];
$id = $_GET['delivered_id'];
$adminName = $_SESSION['admin'];

// $sql ="SELECT * FROM approved_order_list WHERE id ='$id'";

// $res_data = $con->query($sql);
// while($row = mysqli_fetch_array($res_data)){
// 	$id = $row['id'];
	// $orderNum= $row['OrderNumber'];
	// $fname = $row['Firstname'];
	// $lname = $row['Lastname'];
	// $email = $row['Email'];
	// $contact = $row['Contact'];
	// $address = $row['Address'];


	

	?>


	<!DOCTYPE html>
	<html>
	<head>
		<title>Delivery</title>
	</head>


	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:600&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
	<link rel="stylesheet" href="https://unpkg.com/bulma-modal-fx/dist/css/modal-fx.min.css" />
	<link rel="icon" href="../images/plainlogo.png" type="image/x-icon" />
	<link rel="stylesheet" href="../../sass/order-conf.css">


	<style>
		.input, .is-primary{
			font-family: Montserrat; 
			width: 100%;
		}

		#input {


			font-family: Montserrat;

		}

		#modalbody{
			border-radius: 0;
		}

	</style>

	<body onload="myFunction();" style="font-family: Montserrat;">



		<div class="modal modal-fx-fall" id="removeadminModal" overflow-y:visible;>
			<div class="modal-background"></div>
			<div class="modal-card">
				<header class="modal-card-head is-success">
					<p class="modal-card-title">ORDER DELIVERED</p>

				</header>
				<section class="modal-card-body" id="modalbody">




					<form action="delivered_modal_alert.php"method="POST" accept-charset="utf-8">
						<!-- modal here -->
						<div class="notification is-primary is-light" style = "background-color: #ebfffc;">
							<div class="is-danger" style="color: #00947e; text-align: center;">
							<strong>ENTER YOUR PASSWORD TO CONFIRM<br></strong> 
								<input type="hidden" name="id" id="input" value="<?php echo $id;?>" readonly/>
							

								<input type="hidden" name="adminName" id="input" value="<?php echo $adminName;?>" required=""/>

								<div class="field">
									<div class="control">

										

										<input class="input is-primary" name="password" type="PASSWORD" placeholder="Enter Password">
										<center>
											
										</div>	</div>
									</div>
								</section>

								<footer class="modal-card-foot" style="place-content: center;">

									<button class="button is-success" type="submit" name="confirm_deliver" style="font-family: Montserrat;"><i class="far fa-check-circle"></i>&nbspConfirm</button></form>
									<a href="../approved.php"><button class="button is-danger" style="font-family: Montserrat;"><i class="fas fa-ban"></i>&nbspCancel</button></a>

								</footer>
							</div>
						</div>


						<?php
						include 'delivered_modal_alert.php';
						?>



						<script>




							function myFunction() {


								var warrantyModal = document.querySelector('#removeadminModal');
								var modalCloseBtn = document.querySelector('#closeMdl');
								warrantyModal.classList.add('is-active');
							}



						</script>
						<script type="text/javascript" src="../dist/js/modal-fx.min.js"></script>

						<script type="text/javascript" src="https://unpkg.com/bulma-modal-fx/dist/js/modal-fx.min.js"></script>


					</body>
					</html>