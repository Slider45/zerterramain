<?php  
 //filter.php  
 if(isset($_POST["from_date"], $_POST["to_date"]))  
 {  
      $con = mysqli_connect("localhost", "root", "", "zerterra_db");  
      $output = '';  
      $query = "SELECT * FROM tblsales_list  WHERE Date_Purchased BETWEEN '".$_POST["from_date"]."' AND '".$_POST["to_date"]."'  
      ";  
      $result = mysqli_query($con, $query);  
      $output .= '  
           <table class="table table-bordered">  
           <thead>
           <tr>
           
            <th>Trans #</th>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Email</th>
            <th>Contact</th>
            <th>Amount</th>
            <th>Vat</th>
            <th>Date Purchased</th>

   
        </tr>
      </thead>
      ';  
      if(mysqli_num_rows($result) > 0)  
      {  
           while($row = mysqli_fetch_array($result))  
           {  
                $output .= '  
                     <tr>  
                          
                          <td>'. $row["TransactionNumber"] .'</td>  
                          <td>'. $row["Firstname"] .'</td>  
                          <td>'. $row["Lastname"] .'</td>  
                          <td>'. $row["Email"] .'</td>
                          <td>'. $row["Contact"] .'</td>
                          <td>'. $row["Amount"] .'</td>
                          <td>'. $row["Vat"] .'</td>
                          <td>'. $row["Date_Purchased"] .'</td>
                          

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