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
                    <th>#</th>
                    <th>Transaction Number</th>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Amount</th>
                    <th>Option </th>  
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
                          <td>'. $row["TransactionNumber"] .'</td>  
                          <td>'. $row["Firstname"] .'</td>  
                          <td>'. $row["Lastname"] .'</td>  
                          <td>'. $row["Amount"] .'</td>
                          <td>
                          <button data-target="#view<?php echo $id;?>" class="button is-success is-small modal-button"  id="btn_delete" name="acnt_view"><i class="far fa-eye"></i>
                          </button>

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