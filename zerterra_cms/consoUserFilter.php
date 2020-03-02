<?php  
 //filter.php  
 if(isset($_POST["from_date"], $_POST["to_date"]))  
 {  
      $con = mysqli_connect("localhost", "root", "", "zerterra_db");  
      $output = '';  
      $query = "SELECT * FROM tblusers WHERE DateRegistered BETWEEN '".$_POST["from_date"]."' AND '".$_POST["to_date"]."'   and is_active='1'";  
      $result = mysqli_query($con, $query);  
      $output .= '  
           <table class="table table-bordered">  
           <thead>
           <tr>
           <th>#</th>
              <th>Serial #</th>
              <th>Firstname</th>
              <th>Lastname</th>
              <th>R. Days</th>
           </tr>
      </thead>
      ';  
      if(mysqli_num_rows($result) > 0)  
      {  
           while($row = mysqli_fetch_array($result))  
           {  
                $output .= '  
                     <tr>  
                          <td>'. $row["id"] .'</td>  
                          <td>'. $row["SerialNumber"] .'</td>  
                          <td>'. $row["Firstname"] .'</td>  
                          <td>'. $row["Lastname"] .'</td>  
                          <td>'. $row["RemainingDays"] .' Days </td>
                          
                          

                     </tr>  
                ';  
           }  
      }  
      else  
      {  
           $output .= '  
                <tr>  
                     <td colspan="6">No Record Found</td>  
                </tr>  
           ';  
      }  
      $output .= '</table>';  
      echo $output;  
 }  
 ?>