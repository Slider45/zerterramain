<!DOCTYPE html>
<html>
<title>Approved</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
<script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">

<link rel="stylesheet" href="sass/print.css">

<body>
<center>
<div class="card">
<header class="card-header">

    <p id="h-img">
        <img src="images/logowhite.png" alt="">
    </p>

</header>

<!-- -- -->

  <div class="card-content">
      <h1 class="title">APPROVAL FORM</h1>

    <div class="content">
    <div class="columns">
           <div class="column">
              <div class="field">
                    <div class="control">
                    <div class="columns">
                        <div class="column" id="label">Order #:</div>
                        <div class="column" id="txtbox"> <input class="input"  name="edit_lname" readonly value="Sample" ></div>
                    </div>
                  </div>
                </div>
                <div class="field">
                    <div class="control">
                    <div class="columns">
                        <div class="column" id="label">Serial #:</div>
                        <div class="column" id="txtbox"> <input class="input"  name="edit_lname" readonly value="Sample" ></div>
                    </div>
                  </div>
                </div>
                <div class="field">
                    <div class="control">
                    <div class="columns">
                        <div class="column" id="label">Firstname:</div>
                        <div class="column" id="txtbox"> <input class="input"  name="edit_lname" readonly value="Sample" ></div>
                    </div>
                  </div>
                </div>
                <div class="field">
                    <div class="control">
                    <div class="columns">
                        <div class="column" id="label">Lastname:</div>
                        <div class="column" id="txtbox"> <input class="input"  name="edit_lname" readonly value="Sample" ></div>
                    </div>
                  </div>
                </div>
                <div class="field">
                    <div class="control">
                    <div class="columns">
                        <div class="column" id="label">Email:</div>
                        <div class="column" id="txtbox"> <input class="input"  name="edit_lname" readonly value="Sample" ></div>
                    </div>
                  </div>
                </div>
                <div class="field">
                    <div class="control">
                    <div class="columns">
                        <div class="column" id="label">Contact #:</div>
                        <div class="column" id="txtbox"> <input class="input"  name="edit_lname" readonly value="Sample" ></div>
                    </div>
                  </div>
                </div>
           </div>


           <div class="column" id="qrimg">
              <p id="qr-img">
                  <img src="images/qrcode.png" alt="">
              </p>  
           </div>
    </div>
    <div class="field">
                    <div class="control">
                    <div class="columns">
                        <div class="column is-2" id="label1">Address:</div>
                        <div class="column" id="txtbox1" style="width:100px;"> <input class="input1"  name="edit_lname" readonly value="Sample" ></div>
                    </div>
                  </div>
                </div>
    </div>

    <div id="hereby">
<center>
<p id="p1">I hereby certify that the above information given are true and</p>
<p id="p2">correct as to the best of my knowledge.</p>
</center>
</div>


<!-- -- -->



<!-- -- -->

<div class="columns" style="margin-top:200px;">
  <div class="column" id="footer-col1">
      <input class="input" readonly id="line" >
      <p id="date">Date</p>
  </div>
  <div class="column" id="footer-col1">
  <input class="input" readonly id="line1" >
      <p id="date">Signature over Printed name</p>
  </div>
</div>


</div>

<!-- -- -->

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

<button onclick="window.print();" class="button" id="home" ><i class="fas fa-print"></i> </button>


</div>
</center>
</body>
</html>