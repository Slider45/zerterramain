
  <style>

    /* header */
    #admin-header{
      font-weight:bold;
    }

    button {
    font-family: Montserrat;
  }

  .modal-card-body{
    border-bottom-right-radius: 6px;
    border-bottom-left-radius: 6px;
    font-family: Montserrat;
  }
  /* textbox */

  .input{
    border:solid 1px;
    margin-bottom:5px;
    color: #333;
    font-family: Montserrat;
  }
  /* 
  box{
      border-radius: 5px;
      padding-bottom: 9px;
      padding-top: 10px;
      border-bottom: solid 1px;
      border-top: solid 1px;
  } */

  </style>

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
            <input type="hidden" name="edit_id" value="<?php echo $id; ?>">
          </div>
        </div>
        <div class="control">
          <div class="columns">
                <div class="column is-2" id="label">Firstname:</div>
                <div class="column" id="txtbox"><input class="input" type="text" name="edit_fname" value="<?php echo $fname; ?>" required=""></div>
          </div>
        </div>
        <div class="control">
          <div class="columns">
                <div class="column is-2" id="label">Lastname:</div>
                <div class="column" id="txtbox"><input class="input" type="text" name="edit_lname" value="<?php echo $lname; ?>" required=""></div>
          </div>
        </div>
        <div class="control">
          <div class="columns">
                <div class="column is-2" id="label">Email:</div>
                <div class="column" id="txtbox"><input class="input" type="email" name="edit_email" value="<?php echo $email; ?>"   required=""></div>
          </div>
        </div>
        <div class="control">
        <div class="columns">
                <div class="column is-2" id="label">Contact:</div>
                <div class="column" id="txtbox"><box style="border:solid 1px; padding-top:11px; padding-bottom:10px;  border-radius:5px;">
                <input type="text" disabled="disabled" style="width:40px; height:40px; background:white;font-family:Montserrat; border:0; padding-left:6px; border-right:solid 1px;border-top-left-radius: 5px;
      border-bottom-left-radius: 5px;" placeholder="+63">
                  <input  type="number" name="edit_contact" value="<?php echo $contact; ?>" style="width:445px; border:0; padding-left:0;"  required=""></box></div>
          </div>
        
        </div>
        
        <div class="control" style="margin-top: 10px;">
          
                        <!-- <div class="select">
                          <select style="width: 1000px; padding-top:5px; border:solid 1px;" name="role"required="">
                            <option >Super Admin</option>
                            <option>Admin</option>
                          </select>
                        </div> -->
                      </div>
                    </div>
                    
                    <button type="submit" name="updated_user" class="button is-success">
                      <i class="far fa-save"></i>&nbspSave</button>
                    <button class="button is-danger"><i class="fas fa-ban"></i>&nbspCancel</button>

                  </form>

                </div>
              </div>