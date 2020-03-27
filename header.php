<?php include 'PagesFunction/connection.php'; 
$serialNum = "";?>

<div class="menu">
  <ul>
    <li><a class="navbar-item active" href="index.php">Home</a></li>
    <li><a class="navbar-item" id="showModal2">Services</a>
      <div class="container">
        <div id="service-modal" class="modal modal-fx-slideTop">
          <div class="modal-background"></div>
          <div class="modal-content is-half is-offset-one-quarter">
            <div class="card" id="card-modal">
              <header class="modal-card-head2">
                <p class="modal-card-title">SERVICES</p>
                <button class="delete" aria-label="close" id="image-modal-close2"></button>
              </header>

              <div class="card-content">
                <div class="columns">
                  <div class="column is-3" id="serv-column">
                    <button class="card" id="serv-warranty">
                      <img src="images\serviceWarrantyIcon.png" id="title-img">
                      <div class="card-content" id="title-h2">
                        <h2>Service Warranty</h2>
                      </div>
                    </button>
                  </div>


                  <form action="check_warranty.php" method="GET" accept-charset="utf-8">

                    <div class="container">
                      <div id="serv-modal" class="modal">
                        <div class="modal-background"></div>
                        <div class="modal-content1" id="serv-modal">
                         <div class="modal-card1">
                          <header class="modal-card-head1" id="modal-card-head1">
                           <p class="modal-card-title">SERIAL NUMBER</p>
                           <button class="modal-close is-large" aria-label="close" id="image-modal-close4"></button>
                         </header>
                         <section class="modal-card-body1" id="modal-card-body1">
                          <!-- Content ... -->
                          <div class="field">
                            <div class="control">
                              <input class="input1" type="text" name="SerialNumber" placeholder="Enter your Serial Number" required="">
                            </div>
                          </div>
                        </section>
                        <footer class="modal-card-foot1" id="modal-card-foot1">
                          <button class="btn" id="showModal1" type="submit" style="font-family: Montserrat;"><i class="far fa-calendar-check"></i> Check Warranty</button>

                        </footer>
                      </div>
                    </div>
                  </div>
                </div>

              </form>

              <div class="column  is-3" id="serv-column">
                <button class="card" id="serv-RR">
                  <img src="images\RequestRepairIcon.png" id="title-img">
                  <div class="card-content" id="title-h2">
                    <h2>Request Repair</h2>
                  </div>
                </button>

              </div>

              <form action="Modals/repairconfirmation.php" method="GET" accept-charset="utf-8">
                <div class="container" id="app">
                  <div id="repair-modal" class="modal">
                    <div class="modal-background"></div>
                    <div class="modal-content2" id="repair-modal-content">
                     <div class="modal-card2">
                      <header class="modal-card-head2">
                        <p class="modal-card-title">REQUEST FORM</p>
                        <button class="delete" aria-label="close" id="image-modal-close5" ></button>
                      </header>

                      <section class="modal-card-body2">
                        <!-- Content ... -->
                        <div class="field">
                          <div  class="control1" id="form_error" >
                            <input class="input2" type="text" name="SerialNumber" placeholder="Serial Number" required >

                          </div>




                          <div class="control1">
                            <input class="input2" type="text" name="Fname" placeholder="Firstname" required>
                          </div>
                          <div class="control1">
                            <input class="input2" type="text" name="Lname" placeholder="Lastname" required>
                          </div>
                          <div class="control1">
                            <input class="input2" type="email" name="email" placeholder="Email" required>
                          </div>
                          
                          <div class="control1">
                              <p class="control has-icons-right">
                                <box id="box1">
                                <input type="text" placeholder="+63" style="width:54px; border:solid #333 1px; padding-top: 15.5px;padding-bottom: 11.5px;border-right:0;padding-left:13px;font-weight: bold;font-family: Montserrat;     border-top-left-radius: 5px;
    border-bottom-left-radius: 5px;;border-bottom: solid 1px;" disabled="disabled"><input class="input2"  minlength="10" maxlength="10" placeholder="Contact (919XXXXXXX)" onkeyup="mobileValidation()" id="contactNum1" name="contactNum" style="width:788px;height:45px;border:solid 1px;border-radius:0;border-bottom-right-radius: 5px;
                    border-top-right-radius: 5px;">
                                  <span class="icon is-medium is-right">
                                    <i class="fas fa-check" id="iconcheck1" style="display: none;color: #48c774;margin-top: 15px;"></i>
                                    <i class="fas fa-times" id="icontimes1" style="display:none;color:#f14668;margin-top: 15px;"></i>
                                    <p id="lblwarning1" style="text-align: center" class="is-size-7"></p>
                                  </span>
                                </box>
                              </p>
                          </div>
                          
                          
                          <div class="control1">
                            <input class="input2" type="text" name="address" placeholder="Address" required>
                          </div>
                          <!-- <div class="control">
                            <textarea class="textarea1" placeholder="Message"></textarea>
                          </div> -->                     
                        </div>
                      </section>
                      <footer class="modal-card-foot2">
                        <button class="btn" id="sndRequest" name="sndRequest" type="submit">Send Request &nbsp<i class="far fa-paper-plane"></i></button>
                      </footer>  
                    </div></div></div>
                  </div>
</form>

              


                <div class="column  is-3" id="serv-column">
                  <button class="card" id="serv-TAC">
                    <img src="images\TermandConditionIcon.png" id="title-img">
                    <div class="card-content" id="title-h2">
                      <h2>Terms And Condition</h2>
                    </div>
                  </button>
                  <div id="term-condition-modal" class="modal">
                    <div class="modal-background"></div>
                    <div class="modal-content3">
                      <div class="modal-card3">
                        <header class="modal-card-head3">
                          <p class="modal-card-title">Term & Condition</p>
                          <button class="delete" aria-label="close" id="image-modal-close6"></button>
                        </header>
                        <section class="modal-card-body3" id="TAC-css">
                          <?php
                          include 'content/termandcondition.php';
                          ?>
                        </section>
                        <footer class="modal-card-foot3" style="padding-bottom:0; height:100px;">
                        <a href="index.php"><button class="button is-medium btn">Accept &nbsp<i class="far fa-thumbs-up"></i></button></a>
                       </footer>
                     </div>
                   </div>
                 </div>
               </div>

               <div class="column" id="serv-column">
                <button class="card" id="serv-download">
                  <img src="images\DownloadIcon.png" id="title-img">
                  <div class="card-content" id="title-h2">
                    <h2>Download App</h2>
                  </div>
                </button>

                  <div class="container" >
                  <div id="serv-download-modal" class="modal">
                    <div class="modal-background"></div>
                    <div class="modal-content1" id="download-app-modal">
                     <div class="modal-card1">
                      <header class="modal-card-head3" id="modal-card-head">
                       <p class="modal-card-title">Download App</p>
                       <!--    <button class="delete" aria-label="close" id="image-modal-close7"></button> -->
                     </header>
                     <section class="modal-card-body1" id="modal-card-body">
                      <!-- Content ... -->
                      <div class="field">
                        <div class="control">
                          <p style="text-align: center;"> Do you want to download the remote for your machine?</p>
                        </div>
                      </div>
                    </section>
                    <footer class="modal-card-foot1" id="modal-card-foot">
                      <a href="zerterra.apk" download class="button is-success">Download</a>
                      <button class="button is-danger" aria-label="close" id="image-modal-close7">Cancel</button>
                    </footer>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>

</div>
</div>
</li>

<li><a class="navbar-item" href="ContactUs.php">Contact Us</a></li>
<li><a class="navbar-item" href="AboutUs.php">About Us</a></li>
</ul>
</div>
</nav>
</div>

<script>



  $(document).ready(function() {
    $("#contactNum1").keyup(check1);
   

  });
  function check1() {


    var usernum = $("#contactNum1").val();

    var btncheck1 = $("#sndRequest");
    var wrning1 = $("#lblwarning1");
    var icon3 = $("#iconcheck1");
    var icon4 = $("#icontimes1");
    var regx =/^(9)\d{9}/;

    if (regx.test(usernum)){
      icon3.show();  
      icon4.hide();
      wrning1.text("");  

      wrning1.hide();
      btncheck1.attr("disabled", false);

    }else if(usernum==""){
      icon3.hide(); 
      icon4.show();
      wrning1.text("Enter your number!"); 
      wrning1.show();
      wrning1.css("color","#f14668");
    }else{

      icon3.hide(); 
      icon4.show();

      wrning1.show();
      wrning1.text("INVALID NUMBER!");
      wrning1.css("color","#f14668");
      btncheck1.attr("disabled", true);




    }

  }


  
</script>