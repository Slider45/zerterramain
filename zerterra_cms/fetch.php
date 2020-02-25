<?php  
 //filter.php  
 if(isset($_POST["from_date"], $_POST["to_date"]))  
 {  
      $connect = mysqli_connect("localhost", "root", "", "zerterra_db");  
      $output = '';  
      $query = " SELECT * FROM tblsales_list WHERE Date_Purchased BETWEEN '".$_POST["from_date"]."' AND '".$_POST["to_date"]."'  
      ";  
      $result = mysqli_query($connect, $query);  
      $output .= '  
           <table class="table">  
                <tr>  
                     <th width="5%">ID</th>  
                     <th width="30%">First Name</th>  
                     <th width="43%">Last Name</th>  
                     <th width="10%">Amount</th>  
                     <th width="12%">Date Purchased</th>  
                </tr>  
          
      ';  
      if(mysqli_num_rows($result) > 0)  
      {  
           while($row = mysqli_fetch_array($result))  
           {  
                $output .= '  
                     <tr>  
                          <td>'. $row["id"] .'</td>  
                          <td>'. $row["Firstname"] .'</td>  
                          <td>'. $row["Lastname"] .'</td>  
                          <td>'. $row["Amount"] .'</td>  
                          <td>'. $row["Date_Purchased"] .'</td>  
                     </tr>  
                ';  
           }  
      }  
      else  
      {  
           $output .= '  
                <tr>  
                     <td colspan="5">No Order Found</td>  
                </tr>  
           ';  
      }  
      $output .= '</table>';  
      echo $output;  
 }  
 ?>