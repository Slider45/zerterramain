<?php       

$con=mysqli_connect ("localhost", "root", "", "zerterraph") or die ('I cannot connect to the database because: ' . mysql_error());
// mysqli_select_db ($con,'zerterraph');
$filter_Result = mysqli_query($con, 'zerterraph');



?>