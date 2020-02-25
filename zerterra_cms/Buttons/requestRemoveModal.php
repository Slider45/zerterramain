<div id="deleterequest<?php echo $id; ?>" class="modal" role="dialog">

  <div class="modal-background"></div>
  <div class="modal-card">
    <header class="modal-card-head">
      <p class="modal-card-title">REMOVE ACCOUNT</p>
      <button class="modal-close" aria-label="close"></button>
    </header>
    <form method="POST" class="modal-card-body">
      
      <div class="field">
        <input type="hidden" name="delete_id" value="<?php echo $id; ?>">
        
      </div>

      <div class="is-danger">Are you Sure you want Delete <strong>
        "<?php echo $fname.' '.$lname;?>"?</strong> </div>
        
        <div style = " margin-bottom: 10px;
        margin-top: 20px;
        margin-right: auto;">

        <button  class="button is-success" name="acnt_remove">
         <i class="fas fa-user-slash"></i>&nbspREMOVE</button>
         <button class="button is-danger"><i class="fas fa-ban">
         </i>&nbspCancel</button>


       </div>
       

     </form>

   </div>
 </div>
</div>