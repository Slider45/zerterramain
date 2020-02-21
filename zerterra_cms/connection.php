<?php       

$con=mysqli_connect ("localhost", "root", "", "zerterra_db") or die ('I cannot connect to the database because: ' . mysql_error());
date_default_timezone_set('Asia/Manila');

$filter_Result = mysqli_query($con, 'zerterra_db');

?>