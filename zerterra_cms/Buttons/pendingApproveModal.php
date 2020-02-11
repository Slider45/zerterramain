<?php
include 'connection.php';
?>
<div id="delete<?php echo $id; ?>" class="modal" role="dialog">

                    <div class="modal-background"></div>
                    <div class="modal-card">
                      <header class="modal-card-head">
                        <p class="modal-card-title">CUSTOMER INFORMATION</p>
                        <button class="modal-close" aria-label="close"></button>
                      </header>
                       <form method="POST" class="modal-card-body">
              
                       <div class="field">
                        <div class="control">
                        <div class="field">
                      <input type="hidden" name="id" value="<?php echo $id; ?>">
                      </div>
                      </div>
                      <div class="control" >
                        <input class="input1" type="text"  name="efname"  disabled value="<?php echo $fname; ?>" required="">
                      </div>
                      <div class="control">
                        <input class="input1" type="text" name="elname" disabled value="<?php echo $lname; ?>" required="">
                      </div>
                      <div class="control">
                        <input class="input1" type="email" name="eemail"  disabled value="<?php echo $email; ?>"   required="">
                      </div>
                      <div class="control">
                        <input class="input1" type="text" name="eaddress" disabled value="<?php echo $Address; ?>"  required="">
                      </div>
                      <div class="control">
                        <input class="input1" type="number" name="econtact" disabled value="<?php echo $Contact; ?>"  required="">
                      </div>
                      <div class="control">
                        <input class="input1" type="text" name="emessage" disabled value="<?php echo $Message; ?>"  required="">
                      </div>
                        <div class="control" style="margin-top: 10px;">
                        
                      </div>
                      </div>
                      <div style = " margin-left: 500px; margin-right: auto;">
                         <button  class="button is-success" name="btnapproved">APPROVE</button>
                          
                      </div>
                     

                    </form>

                    </div>
                  </div>
                