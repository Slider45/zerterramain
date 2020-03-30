

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
            
            
            <div class="column" id="txtbox">
             <p class="control has-icons-right"> <box id="box" style="border:solid 1px; padding-top:11px; padding-bottom:10px;  border-radius:5px;">
              <input placeholder="+63" style="width:40px; height:40px; font-family:Montserrat; border:0; padding-left:6px; border-right:solid 1px;border-top-left-radius: 5px;
              border-bottom-left-radius: 5px;">
              <input  minlength="10" maxlength="10" onkeyup="validation()"  id="edit_contact" name="edit_contact" style="width:413px; border:0;" value="<?php echo $contact; ?>">
              

              
            </box>
            <span class="icon is-medium is-right">
              <i class="fas fa-check" id="iconcheck1" style="display: none;color: #48c774;"></i>
              <i class="fas fa-times" id="icontimes1" style="display:none;color:#f14668;"></i>
              <p id="lblwarning1" style="text-align: center; color:#f14668;" class="is-size-7"></p>
            </span>
            <p id="lblwarning1" style="text-align: center" class="is-size-7"></p>
          </div>
          
        </div>
      </div>

        
        <div class="control" style="margin-top: 10px;">
          
                        
                      </div>
                    </div>
                    
                    <button type="submit" id="save4" name="updated_user" class="button is-success">
                      <i class="far fa-save"></i>&nbspSave</button>
                    <button class="button is-danger" id="closeMdl"><i class="fas fa-ban"></i>&nbspCancel</button>

                  </form>

                </div>
              </div>

<script>

var modalDlg2 = document.querySelector('#edit<?php echo $id; ?>');
var imageModalCloseBtn2 = document.querySelector('#closeMdl');
imageModalCloseBtn2.addEventListener('click', function(){
  modalDlg2.classList.remove('is-active');
});
</script>


<script type="text/javascript">
 function cancelevent() {
  window.location.href="users.php";
}

function validation(){

  var editcontact = document.getElementById('edit_contact').value;
  var btn = document.getElementById('save4');
  var wrning = document.getElementById('lblwarning1');
  var checkicon = document.getElementById('iconcheck1');
  var erroricon = document.getElementById('icontimes1');

  var editcontactpattern = /^(9)\d{9}/;

  if(editcontactpattern.test(editcontact)){
   document.getElementById('box').style.borderColor = '#3ec46d';
   btn.disabled = false;
   wrning.innerHTML="";
   checkicon.style.display = "block";
   erroricon.style.display = "none";
   
 }else{
  document.getElementById('box').style.borderColor = '#f14668';
  btn.disabled = true;
  wrning.innerHTML="INVALID NUMBER";
  checkicon.style.display = "none";
  erroricon.style.display = "block";
  
}

}
</script>
