


<?php


if(!empty($_POST["email"]) && !empty($_POST["password"]))
{
	$name = $_POST["email"];
	$password = $_POST["password"];
	$sql = "SELECT * FROM tblusers_list where email = '" . $name . "' AND password = '" . $password . "' OR Serial_Number = '". $password ."' AND is_active = '1' ";

	$sqlAdmin = "SELECT * FROM admin_list WHERE Email = '". $name ."' AND Password = '" . $password . "' AND is_active = '1'";



	$result = mysqli_query($con,$sql);  
	$resultAdmin = mysqli_query($con,$sqlAdmin);


	$admin = mysqli_fetch_array($resultAdmin);
	$user = mysqli_fetch_array($result);  

	if($user)   
	{  
		if(!empty($_POST["remember"]))   
		{  
			setcookie ("member_email",$name,time()+ (10 * 365 * 24 * 60 * 60));  
			setcookie ("member_password",$password,time()+ (10 * 365 * 24 * 60 * 60));
			$_SESSION["userEmail"] = $name;
		}  
		else  
		{  
			if(isset($_COOKIE["member_email"]))   
			{  
				setcookie ("member_email","");  
			}  
			if(isset($_COOKIE["member_password"]))   
			{  
				setcookie ("member_password","");  
			}  
			$_SESSION["userEmail"] = $name;
		}  
		?>
		<div class="notification is-success">
			<center>
				"Login Success!"
			</center>
			<p id="notif"></p>
		</div>
		<?php
		
		header("Refresh: 1; zerterraph_user/");
	}  
	else if($admin)
	{

		if(!empty($_POST["remember"]))   
		{  
			setcookie ("member_email",$name,time()+ (10 * 365 * 24 * 60 * 60));  
			setcookie ("member_password",$password,time()+ (10 * 365 * 24 * 60 * 60));
			$_SESSION["admin"] = $name;
		}  
		else  
		{  
			if(isset($_COOKIE["member_email"]))   
			{  
				setcookie ("member_email","");  
			}  
			if(isset($_COOKIE["member_password"]))   
			{  
				setcookie ("member_password","");  
			}  
			$_SESSION["admin"] = $name;
		}  
		?>
		<div class="notification is-success">
			<center>
				"Login Success!"
			</center>
			<p id="notif"></p>
		</div>
		<?php
		
		header("Refresh: 1; zerterra_cms/");




	}
	else 
	{  
		?>
		<div class="notification is-danger">
			<center>
				"Invalid Login"
			</center>
			
		</div>
		<?php

	} 
}
else
{
	?>
	<div class="notification is-danger">
		<center>
			"Both are Required Fields"
		</center>
		
	</div>
	<?php

}

?>