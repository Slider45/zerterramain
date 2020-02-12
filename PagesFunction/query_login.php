<?php



$email = $_POST['email'];
$password=$_POST['password'];

$sql = "SELECT * FROM tblusers_list WHERE email = '$email' AND password = '$password' ";


$result = $con->query($sql);
if($result->num_rows > 0){
$_SESSION['email'] = $email;

 if(!empty($_POST["remember"]))   
   {  
    setcookie ("email",$email,time()+ (10 * 365 * 24 * 60 * 60));  
    setcookie ("password",$password,time()+ (10 * 365 * 24 * 60 * 60));


	
} else  
   {  
   
    if(isset($_COOKIE["email"]))   
    {  
     setcookie ("email",""); 

    }  
    if(isset($_COOKIE["password"]))   
    {  
     setcookie ("password","");  
    } 
    
   }  
   echo "<script>alert('PASSWORD ENTERED!'); </script>";
   header('location: zerterraph_user/');






	
}else{

	$sql = "SELECT * FROM tblusers_list WHERE email = '$email' AND Serial_Number = '$password' ";

	$result = $con->query($sql);
	if($result->num_rows > 0){
		$_SESSION['email'] = $email;

		// header( "Refresh: 5; url=User/index.php" );
		// echo '<div id="toast">';
		// echo	'<div id="img"><img src="images/plainlogo.png"></div>';
		// echo '<div id="desc">Login Successful!</div>';
		// echo '</div>';

		

		
		 echo "<script>alert('SERIAL NUMBER ENTERED!'); </script>";
		header('location: zerterraph_user/');
	}else{
		$sql = "SELECT * FROM admin_list WHERE Email = '$email' AND Password = '$password' ";

		$result = $con->query($sql);
		if($result->num_rows > 0){
			$_SESSION['email'] = $email;


			?>

			<div id="toast">
				<div id="img"><img src="images/plainlogo.png"></div>
				<div id="desc">Login Successful!</div>
			</div>'
			<?php
			
			// header( "Refresh: 5; url=../User/index.php" );
			
		header('location: zerterra_cms/');
		}else{
			// echo "<script>alert('Email not found!'); </script>";



			?>

			<div id="toast">
				<div id="img"><img src="images/plainlogo.png"></div>
				<div id="desc">Record Not Found!</div>
			</div>


			<?php
		}
	}
}
?>

<script>
	function launch_toast() {
		var x = document.getElementById("toast")
		x.className = "show";
		setTimeout(function(){ x.className = x.className.replace("show", ""); }, 5000);
	}
</script>