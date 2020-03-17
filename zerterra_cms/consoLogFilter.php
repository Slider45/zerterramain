<?php  
 //filter.php  
 if(isset($_POST["from_date"], $_POST["to_date"]))  
 {  
      $con = mysqli_connect("localhost", "zerterra", "zerterra", "zerterra_db");  
      $output = '';  
      $query = "SELECT * FROM tblactionlog WHERE DateAction BETWEEN '".$_POST["from_date"]."' AND '".$_POST["to_date"]."'  
      ";  
      $result = mysqli_query($con, $query);  
      $output .= '  
           <table class="table table-bordered">  
           <thead>
           <tr>
            
            <th>Author</th>
            <th>Action</th>
            <th>Date Action</th>
           </tr>
      </thead>
      ';  
      if(mysqli_num_rows($result) > 0)  
      {  
           while($row = mysqli_fetch_array($result))  
           {  
                $output .= '  
                     <tr>  
                         
                          <td>'. $row["Author"] .'</td>  
                          <td>'. $row["Action"] .'</td>  
                          <td>'. $row["DateAction"] .'</td>  
                          

                     </tr>  
                ';  
           }  
      }  
      else  
      {  
           $output .= '  
                <tr>  
                     <td colspan="4">No Record Found</td>  
                </tr>  
           ';  
      }  
      $output .= '</table>';  
      echo $output;  
 }  
 ?>