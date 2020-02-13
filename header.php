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
                    <div class="container">
                      <div id="serv-modal" class="modal">
                        <div class="modal-background"></div>
                        <div class="modal-content1">
                         <div class="modal-card1">
                          <header class="modal-card-head1" id="modal-card-head">
                           <p class="modal-card-title">SERIAL NUMBER</p>
                           <button class="delete" aria-label="close" id="image-modal-close4"></button>
                         </header>
                         <section class="modal-card-body1" id="modal-card-body">
                          <!-- Content ... -->
                          <div class="field">
                            <div class="control">
                              <input class="input1" type="text" placeholder="Enter your Serial Number" required="">
                            </div>
                          </div>
                        </section>
                        <footer class="modal-card-foot1" id="modal-card-foot">
                          <button class="btn" id="showModal1">Check Warranty 
                          </button>
                        </footer>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

             
            
              <div class="column  is-3" id="serv-column">
                <button class="card" id="serv-RR">
                  <img src="images\RequestRepairIcon.png" id="title-img">
                  <div class="card-content" id="title-h2">
                    <h2>Request Repair</h2>
                  </div>
                </button>
               
</div>

<form action="index.php" method="POST" accept-charset="utf-8">
  


                  <div class="container" id="app">
                    <div id="repair-modal" class="modal">
                      <div class="modal-background"></div>
                      <div class="modal-content2" id="repair-modal-content">
                       <div class="modal-card2">
                        <header class="modal-card-head2">
                          <p class="modal-card-title">REQUEST FORM</p>
                          <button class="delete" aria-label="close" id="image-modal-close5"></button>
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
                              <input class="input2" type="number" name="contactNum" placeholder="Contact Number" required>
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
                        <button class="btn" name="sndRequest">Send Request &nbsp<i class="far fa-paper-plane"></i></button>
                      </footer>
                    </div></div></div>
                  </div>
       
</form>

              <?php 

              if (isset($_POST['sndRequest'])) {


                 // include 'PagesFuction/query_request.php';
                $serialNum = $_POST['SerialNumber'];
                $fname = 



                $sql = "SELECT * FROM tblusers_list WHERE Serial_Number='$serialNum'";
                $result = $con->query($sql);
                if($result->num_rows > 0){


               echo "<script>alert('data found!');</script>";



                }else{
                   echo "<script>alert('data NOT found!');</script>";
                }

              }


              ?>

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
                      <footer class="modal-card-foot3">
                       <button class="button is-medium btn">Accept &nbsp<i class="far fa-thumbs-up"></i></button>
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
              <div class="container" id="app">
                <div id="serv-download-modal" class="modal">

                  <div class="modal-background"></div>
                  <div class="modal-content4 column is-half is-offset-one-quarter">
                    <a href="download/zerterra.zip" download class="download_button">
                      <div class="filename"><span class="value">File.zip</span></div>
                      <div class="filesize">Size : <span class="value">2.15 MB</span></div>
                      <div class="downloads">Downloads : <span class="value">0</span></div>
                    </a>
                  </div>
                  <button class="modal-close is-large" aria-label="close" id="image-modal-close7"></button>
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

