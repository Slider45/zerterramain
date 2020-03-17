<?php       

$con=mysqli_connect ("localhost", "zerterra", "zerterra", "zerterra_db") or die ('I cannot connect to the database because: ' . mysql_error());
date_default_timezone_set("Asia/Manila");
// mysqli_select_db ($con,'zerterraph');
$filter_Result = mysqli_query($con, 'zerterra_db');



?>