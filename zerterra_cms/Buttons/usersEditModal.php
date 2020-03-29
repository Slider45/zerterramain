

  <style>

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
  
  .input{
    border:solid 1px;
    margin-bottom:5px;
    color: #333;
    font-family: Montserrat;
  }

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
            <p class="control has-icons-right">
              <div class="column" id="txtbox" style="padding-top:0;">
              <box id="box" style="border:solid 1px; padding-top:11px; padding-bottom:10px;  border-radius:5px;">
                <input placeholder="+63" style="width:40px; height:40px; font-family:Montserrat; border:0; padding-left:6px; border-right:solid 1px;border-top-left-radius: 5px;
    border-bottom-left-radius: 5px;">
    <input minlength="10" maxlength="10" onkeyup="check()" id="edit_contact"  name="edit_contact" style="width:409px; border:0; padding-left:0;" value="<?php echo $contact; ?>">
                <span class="icon is-medium is-right">
                  <i class="fas fa-check" id="iconcheck" style="display:none;color: #48c774;margin-top: 15px;"></i>
                  <i class="fas fa-times" id="icontimes" style="display:none;color:#f14668;margin-top: 15px;"></i>  
                </span>
                </div>
              </box>
            </p>
          </div>
        </div>
        <p id="lblwarning" style="text-align:center" class="is-size-7"></p>

        
        <div class="control" style="margin-top: 10px;">
          
                        
                      </div>
                    </div>
                    
                    <button type="submit" id="save" name="updated_user" class="button is-success">
                      <i class="far fa-save"></i>&nbspSave</button>
                    <button class="button is-danger"><i class="fas fa-ban"></i>&nbspCancel</button>

                  </form>

                </div>
              </div>


 <script>


function check() {


  var usernum = $("#edit_contact").val();

  var btncheck = $("#save");
  var wrning = $("#lblwarning");
  var icon1 = $("#iconcheck");
  var icon2 = $("#icontimes");
  var regx =/^(9)\d{9}/;

  if (regx.test(usernum)){
    icon1.show();  
    icon2.hide();
    wrning.text("");  

    wrning.hide();
    btncheck.attr("disabled", false);

  }else if(usernum==""){
    icon1.hide(); 
    icon2.show();
    wrning.text("Enter your number!"); 
    wrning.show();
    wrning.css("color","#f14668");
  }else{

    icon1.hide(); 
    icon2.show();

    wrning.show();
    wrning.text("INVALID NUMBER!");
    wrning.css("color","#f14668");
    btncheck.attr("disabled", true);


  }

}

</script>
