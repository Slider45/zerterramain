<style>

  /* header */
  #admin-header{
    font-weight:bold;
  }

  .modal-card-body{
    border-bottom-right-radius: 6px;
    border-bottom-left-radius: 6px;
  }

  #adminbtnsave{
    font-family: Montserrat;
  }
  /* textbox */

  .input{
    border:solid 1px;
    margin-bottom:5px;
    color: #333;
  }

</style>

<div class="modal" id="myModal">
  <div class="modal-background"></div>
  <div class="modal-card">
    <header class="modal-card-head">
     <p class="modal-card-title" id="admin-header">ADD ADMIN</p>
     <button class="modal-close" aria-label="close"></button>
   </header>
   <form method="POST" class="modal-card-body">
     <div class="field">
      <div class="control">
        <input class="input" type="text" name="name" placeholder="Fullname" required autofocus>
      </div>
      <div class="control">
        <input class="input" type="password" name="password" placeholder="Password" required>
      </div>
      <div class="control">
        <input class="input" type="password" name="cpassword" placeholder="Confirm Password" required>
      </div>
      <div class="control">
      <box style="border:solid 1px; padding-top:11px; padding-bottom:10px;  border-radius:5px;"> 
     <input placeholder="+63" style="width:40px; height:40px; font-family:Montserrat; border:0; padding-left:6px; border-right:solid 1px;border-top-left-radius: 5px;
    border-bottom-left-radius: 5px;">
        <input class="input" type="text" name="contact" placeholder="Contant Number" required style="width:553px; border:0; padding-left:0;">
      </div>
      <div class="control">
        <input class="input" type="email" name="email" placeholder="Email" required>
      </div>
      <div class="control" >
       <!--  <input class="input1" type="text" name="role" placeholder="Role" required=""> -->
       <div class="select">
         <select style="width: 1000px; padding-top:5px; border:solid 1px;" name="role" required>
           <option value="Admin">Admin</option>
           <option value="Super Admin">Super Admin</option>
         </select>
       </div>
     </div>
   </div>         
   <button type="submit" class="button is-success" name="btn_add_admin" id="adminbtnsave">
     <i class="far fa-save"></i>&nbspSave</button>

   </form>

 </div>
</div>



