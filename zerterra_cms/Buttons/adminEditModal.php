<style>

  button{
    font-family: unset;
    align-items: center;
 
  }

  box{
    border-radius: 5px;
    padding-bottom: 9px;
    padding-top: 10px;
    border-bottom: solid 1px;
    border-top: solid 1px;
  }

</style>

<div id="edit<?php echo $id; ?>" class="modal" role="dialog">
 <div class="modal-background"></div>
 <div class="modal-card">
  <header class="modal-card-head">
    <p class="modal-card-title">EDIT ACCOUNT</p>
    <!-- <button class="modal-close" aria-label="close"></button> -->
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
              <div class="column is-2" id="label">Fullname:</div>
              <div class="column" id="txtbox"><input class="input" type="text" name="edit_name" style="width:459px;" value="<?php echo $fullname; ?>" required=""></div>
        </div>
      </div>
     
      
      <div class="control">
          <div class="columns">
            <div class="column is-2" id="label">Contact:</div>
            <p class="control has-icons-right">
              <box id="box">
              <div class="column" id="txtbox"><input type="text" placeholder="+63" style="width:38px; border:none;padding-top: 6px;padding-bottom: 11px;margin-left:10px;padding-left:6px;font-weight: bold;font-family: Montserrat; 7px;border-bottom: solid 1px;" disabled="disabled"><input class="input"  minlength="10" maxlength="10" onkeyup="mobileValidation()"  id="edit_contact" name="edit_contact" style="width:400px;padding-left:2px;" value="<?php echo $contact; ?>">
                <span class="icon is-medium is-right">
                  <i class="fas fa-check" id="iconcheck" style="display:none;color: #48c774;margin-top: 10px;"></i>
                  <i class="fas fa-times" id="icontimes" style="display:none;color:#f14668;margin-top: 10px;"></i>  
                </span>
                </div>
              </box>
            </p>
          </div>
        </div>
        <p id="lblwarning" style="text-align:center" class="is-size-7"></p>

      
      <div class="control">
           <div class="columns">
              <div class="column is-2" id="label">Email:</div>
              <div class="column" id="txtbox"><input class="input" type="email" name="edit_email" style="width:459px;" value="<?php echo $email; ?>"  required=""></div>
           </div>
      </div>

      <div class="control" style="margin-top: 10px;">
      </div>
    </div>
    <!-- END OF MODAL EDIT -->

    <button type="submit" id="save" name="updated_id" class="button is-success">
      <i class="far fa-save"></i>&nbspSave</button>
    <button class="button is-danger"><i class="fas fa-ban"></i>&nbspCancel</button>



  </form>
</div>
</div>


<script>



  $(document).ready(function() {
    $("#edit_contact").keyup(check);
   

  });
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

