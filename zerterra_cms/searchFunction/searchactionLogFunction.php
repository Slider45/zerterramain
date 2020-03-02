<?php


$sql= "SELECT * FROM tblactionlog WHERE CONCAT(`id`,`Author`, `Action`, `DateAction`) LIKE '%".$searchValue."%'";
 //$sql = "SELECT * FROM request_list WHERE is_approved='0'" ;
$result = $con->query($sql);
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) 
  {
    $id = $row['id'];
    $author = $row['Author'];
    $action = $row['Action'];
    $dateAction = $row['DateAction'];
    
    ?>
    
    <tr>
            <td>
              <?php echo $id; ?>.
            </td>
            <td>
              <?php echo $author; ?>
            </td>
            <td>
              <?php echo $action; ?>
            </td>
            <td>
              <?php echo $dateAction; ?>
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