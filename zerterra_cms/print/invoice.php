

<!DOCTYPE html>
<html>
<title>Invoice</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
<script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
<link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Calligraffitti&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">

<link rel="stylesheet" href="sass/invoice.css">

<body>
  <center>
    <div class="card">
      <header class="card-header">

      <div class="columns">
        <div class="column is-6">
           <p id="head-title">Invoice</p>
                <div id="inv-no">
                <span>NO. :</span>   &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span> 20021348-01</span><br>
                <span>DATE. :</span>  &nbsp  &nbsp<span>25-Feb-2020</span><br>
                <span>OR # :</span> &nbsp &nbsp&nbsp&nbsp<span>123456789-0</span>
                </div>
        </div>
        <div class="column is-6" id="is-6">
                <p id="h-img">
                <img src="images/weblogo2.png" alt="">
                </p> 
        </div>
    </div>


<!-- 
        -->
      
      </header>

    <div class="card-content">

            <div class="columns">
                    <div class="column is-4">
                    <div id="bill">
                <span id="billto">Bill To.</span><br>
                <span>LASTNAME</span><span>,</span><br>
                <span>FIRSTNAME</span>
                
                <br>
                <br>

                <span><i class="fas fa-map-pin"></i></span>
                <span>Address</span><br>
                <span>Address</span>

                <br>
                <br>

                <span><i class="fas fa-phone"></i></span>
                <span>Contact</span>

                <br>
                <br>

                <p id="pay0"><i class="fas fa-tag"></i>
                <span>Payment Method</span></p>
                <span id="pay">Bank:</span>&nbsp<span id="pay1">123456789-0</span><br>
                <span id="pay">Paypal:</span>&nbsp<span id="pay1">payment@.com</span><br>
                <span id="pay">Paymaya:</span>&nbsp<span id="pay1">12345678901</span><br>
                <span id="pay">Gcash:</span>&nbsp<span id="pay1">09171724567</span>

                <br>
                <br>
                <br>

               
                <span id="name">Paul Salcedo</span><br>
                <span id="pos">Operation Manager</span><br>
                <p id="sign"> SalcedoPaul</p>
                

                </div>
                    </div>
                    <div class="column is-8">
                       
                    
                        

    <div class="table">

<table>
<tr>
<th id="th1">Description</th>
<th id="th2">Qty</th>
<th id="th3">Price</th>
</tr>
<tr>
<td id="td1"><p>Smart Bin-Machine</p> <span class="serial">Serial No. 123456789-0</span></td>
<td>1</td>
<td><span>₱</span>10,000</td>


</tr>
<tr>
<td id="td1"><p>Parts Replacement</p> <span class="serial">7 Inch Touch Monitor</span></td>
<td>1</td>
<td><span>₱</span>10,000</td>


</tr>
<tr>
<td id="td1"><p>Parts Replacement</p> <span class="serial">power Supply</span></td>
<td>1</td>
<td><span>₱</span>10,000</td>

</tr>
<tr>
<td id="td1"><p>Service Charge</p> <span class="serial">power Supply</span></td>
<td>1</td>
<td><span>₱</span>10,000</td>

</tr>
<tr>
<td id="td0"></td>
<td><span class="serial">Sub-Total</span></td>
<td><span>₱</span>10,000</td>

</tr>
<tr>
<td id="td0"></td>
<td><span class="serial">Tax(12%)</span></td>
<td><span>₱</span>10,000</td>
</tr>

<tr>
<td id="td0"></td>
<td><span class="serial">Total</span></td>
<td><span>₱</span>10,000</td>
</tr>
</table>

</div>



                    </div>
             </div>
    
    
    </div>
      <!-- -- -->


         <a href="../for_approve.php"><button class="button is-danger" id="return" ><i class="fas fa-arrow-left"></i> </button></a>
          <button onclick="window.print();" class="button" id="home" ><i class="fas fa-print"></i> </button>

          


          
  <footer class="card-footer">
    <div class="card-footer-content">

      <div class="columns">
        <div class="column" id="footer-col">
          <p id="footer-txt"><i class="fas fa-map-marked-alt"></i><span>&nbsp UCC CONG.RD.. CALOOCAN CITY</span><p>   
            <p id="footer-txt"> <i class="fa fa-phone"></i><span>&nbsp  (+63) 995 495 0384 | (+63) 906 593 9808</span><p> 
              <p id="footer-txt"><i class="far fa-envelope"></i></i><span>&nbsp support@zerterra.com</span><p> 
                <p id="footer-txt"><i class="fab fa-facebook-square"></i><span>&nbsp https://www.facebook.com/zerterra/</span><p> 
                </div>
                <div class="column" id="footer-col1">
                  <p id="footer-txt1" >Zerterra is a home-made organic fertilizer</p>
                  <p id="footer-txt1">maker made from food scrap</p>

                  <p id="footer-txt2">THANKS YOU FOR TRUSTING!</p>
                  <p id="footer-txt1">© 2019 ZerterraPh</p>
                </div>
              </div>

            </div>

          </footer>

         <a href="../for_approve.php"><button class="button is-danger" id="return" ><i class="fas fa-arrow-left"></i> </button></a>
          <button onclick="window.print();" class="button" id="home" ><i class="fas fa-print"></i> </button>

          

        </div>

        </div>

        
      </center>
    </body>
    </html>
 