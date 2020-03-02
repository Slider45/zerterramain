
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

</style>

<div id="view<?php echo $id; ?>" class="modal" role="dialog">
 <div class="modal-background"></div>
 <div class="modal-card">
  <header class="modal-card-head">
    <p class="modal-card-title">USER INFORMATIONS</p>
 <!--    <button class="modal-close" aria-label="close"></button> -->
  </header>
  <form method="POST" class="modal-card-body" style="padding-bottom: 10px;">
    
    <div class="field">
      <div class="control">
        <div class="field">
          <input type="hidden"  value="<?php echo $id; ?>">
        </div>
      </div>
      <div class="control">
         <div class="columns">
              <div class="column is-2" id="label">Firstname:</div>
              <div class="column" id="txtbox"><input class="input"   value="<?php echo $fname; ?>" disabled="disabled"></div>
         </div>
      </div>
      <div class="control">
         <div class="columns">
              <div class="column is-2" id="label">Lastname:</div>
              <div class="column" id="txtbox"><input class="input"   value="<?php echo $lname; ?>"  disabled="disabled"></div>
         </div>
      </div>
      <div class="control">
        <div class="columns">
              <div class="column is-2" id="label">Email:</div>
              <div class="column" id="txtbox"><input class="input"  value="<?php echo $email; ?>"  disabled="disabled"></div>
         </div>
      </div>
      <div class="control">
        <div class="columns">
              <div class="column is-2" id="label">Contact:</div>
              <div class="column" id="txtbox"><input class="input"  value="<?php echo $contact; ?>" disabled="disabled"></div>
         </div>
      </div>
      <div class="control">
        <div class="columns">
              <div class="column is-2" id="label">R.Days:</div>
              <div class="column" id="txtbox"><input class="input"  value="<?php echo $rdays; ?> Days" disabled="disabled"></div>
         </div>
      </div>
      <div class="control">
        <div class="columns">
              <div class="column is-2" id="label">Date Start:</div>
              <div class="column" id="txtbox"><input class="input"  value="<?php echo $dateReg; ?>" disabled="disabled"></div>
         </div>
      </div>
      <div class="control">
        <div class="columns">
              <div class="column is-2" id="label">Date End:</div>
              <div class="column" id="txtbox"><input class="input"  value="<?php echo $dateEnd; ?>" disabled="disabled"></div>
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
                   
                  <!--  <button type="submit" name="updated_user" class="button is-success">Save</button> -->
                   <button class="button is-danger"><i class="far fa-times-circle"></i> &nbspClose</button>

                 </form>

               </div>
             </div>