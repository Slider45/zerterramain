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
                       <form method="POST" action="pending.php" class="modal-card-body">
              
                       <div class="field">
                        <div class="control">
                        <div class="field">
                      <input type="hidden" name="edit_id" value="<?php echo $id; ?>">
                    </div>
                      </div>
                      <div class="control" >
                        <input class="input" type="text"  name="edit_fname"  value="<?php echo $fname; ?>" required="" readonly >
                      </div>
                      <div class="control">
                        <input class="input" type="text" name="edit_lname" readonly value="<?php echo $lname; ?>" required="">
                      </div>
                      <div class="control">
                        <input class="input" type="email" name="edit_email"  readonly value="<?php echo $email; ?>"   required="">
                      </div>
                      <div class="control">
                        <input class="input" type="text" name="edit_address" readonly value="<?php echo $Address; ?>"  required="">
                      </div>
                      <div class="control">
                        <input class="input" type="number" name="edit_contact" readonly value="<?php echo $Contact; ?>"  required="">
                      </div>
                      <div class="control">
                        <input class="input" type="text" name="edit_message" readonly value="<?php echo $Message; ?>"  required="">
                      </div>
                        <div class="control" style="margin-top: 10px;">                  
                      </div>
                      </div>
                      <div style = "margin-left: 500px; margin-right: auto;">
                         <button  class="button is-success" name="btnapproved">APPROVE</button>
                      </div>
                    </form>

                    </div>
                  </div>
                    </div>