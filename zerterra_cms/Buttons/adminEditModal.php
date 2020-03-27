<style>

  button{
    font-family: unset;
    align-items: center;
 
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
           
              <div class="column" id="txtbox" style="padding-top:0;"> <box style="border:solid 1px; padding-top:11px; padding-bottom:10px;  border-radius:5px;">
                <input placeholder="+63" style="width:40px; height:40px; font-family:Montserrat; border:0; padding-left:6px; border-right:solid 1px;border-top-left-radius: 5px;
    border-bottom-left-radius: 5px;">
    <input  minlength="10" maxlength="10" onkeyup="mobileValidation()"  id="edit_contact" name="edit_contact" style="width:375px; border:0; padding-left:0;" value="<?php echo $contact; ?>">
                <span class="icon is-medium is-right">
                  <i class="fas fa-check" id="iconcheck4" style="display:none;color: #48c774;margin-top: 10px;"></i>
                  <i class="fas fa-times" id="icontimes4" style="display:none;color:#f14668;margin-top: 10px;"></i>  
                </span>
                </div>
              </box>
            </p>
          </div>
        </div>
        <p id="lblwarning4" style="text-align:center" class="is-size-7"></p>

      
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

    <button type="submit" id="save4" name="updated_id" class="button is-success">
      <i class="far fa-save"></i>&nbspSave</button>
    <button class="button is-danger"><i class="fas fa-ban"></i>&nbspCancel</button>



  </form>
</div>
</div>


<script>



  $(document).ready(function() {
    $("#edit_contact").keyup(check5);
   

  });
  function check5() {


    var usernum5 = $("#edit_contact").val();

    var btncheck5 = $("#save4");
    var wrning5 = $("#lblwarning4");
    var icon5 = $("#iconcheck4");
    var icon6 = $("#icontimes4");
    var regx =/^(9)\d{9}/;

    if (regx.test(usernum5)){
      icon5.show();  
      icon6.hide();
      wrning5.text("");  

      wrning5.hide();
      btncheck5.attr("disabled", false);

    }else if(usernum5==""){
      icon5.hide(); 
      icon6.show();
      wrning5.text("Enter your number!"); 
      wrning5.show();
      wrning5.css("color","#f14668");
    }else{

      icon5.hide(); 
      icon6.show();

      wrning5.show();
      wrning5.text("INVALID NUMBER!");
      wrning5.css("color","#f14668");
      btncheck5 .attr("disabled", true);




    }

  }


  
</script>

<!-- dito ako nag edit -->