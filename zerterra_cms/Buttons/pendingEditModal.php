<?php
include 'connection.php';
?>
<div id="edit<?php echo $id; ?>" class="modal" role="dialog">
                               <div class="modal-background"></div>
                      <div class="modal-card">
                        <header class="modal-card-head">
                          <p class="modal-card-title">EDIT ACCOUNT</p>
                          <button class="modal-close" aria-label="close"></button>
                        </header>
                         <form method="POST" class="modal-card-body" style="padding-bottom: 10px;">
              
                         <div class="field">
                        <div class="control">
                        <div class="field">
                      <input type="hidden" name="id" value="<?php echo $id; ?>">
                      </div>
                      </div>
                      <div class="control" >
                        <input class="input2" type="text"  name="fname"  value="<?php echo $fname; ?>" required="">
                      </div>
                      <div class="control">
                        <input class="input2" type="text" name="lname" value="<?php echo $lname; ?>" required="">
                      </div>
                      <div class="control">
                        <input class="input2" type="email" name="email" value="<?php echo $email; ?>"   required="">
                      </div>
                      <div class="control">
                        <input class="input2" type="text" name="address" value="<?php echo $Address; ?>"  required="">
                      </div>
                      <div class="control">
                        <input class="input2" type="number" name="contact" value="<?php echo $Contact; ?>"  required="">
                      </div>
                      <div class="control">
                        <input class="input2" type="text" name="message" value="<?php echo $Message; ?>"  required="">
                      </div>
                        <div class="control" style="margin-top: 10px;">
                        
                      </div>
                      </div>
                      
                      <button type="submit" name="updated_id" class="button is-success">Save</button>
                      <button class="button is-danger">Cancel</button>

                    </form>

                    </div>
</div>

 