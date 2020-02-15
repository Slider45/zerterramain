<?php


$sql= "SELECT * FROM approve_list WHERE CONCAT(`FirstName`, `LastName`, `Email`, `ContactNumber`) LIKE '%".$searchValue."%'";
 //$sql = "SELECT * FROM request_list WHERE is_approved='0'" ;
 $result = $con->query($sql);
 if ($result->num_rows > 0) {
 	while($row = $result->fetch_assoc()) 
 	{
        $id = $row['id'];
        $id1 = $row['pendingID'];
        $fname = $row['FirstName'];
        $lname = $row['LastName'];
        $email = $row['Email'];
        $Contact = $row['ContactNumber'];
        $Address = $row['Address'];
        
        ?>
        
        <tr>
         

                <td>
                   # <?php echo $id; ?>
                </td>
                            
                <td>
                    <?php echo $id1; ?>
                </td>

                <td>
                    <?php echo $fname; ?>
                </td>

                <td>
                    <?php echo $lname; ?>
                </td>

                <td>
                    <?php echo $email; ?>
                </td>

                <td>
                    <?php echo $Contact; ?>
                </td>
                            
                <td>
                    <?php echo $Address; ?>
                </td>
          





<?php }





}
else{
	echo "<script>window.alert('NO RECORD FOUND!');</script>";
	echo '<script>window.location.href="approved.php"</script>';
}

?>


</tr>




</tbody>