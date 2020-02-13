<style>

/* header */
#admin-header{
  font-weight:bold;
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
            <input class="input" type="text" name="name" placeholder="Name" required="">
          </div>
          <div class="control">
            <input class="input" type="password" name="password" placeholder="Password" required="">
          </div>
          <div class="control">
            <input class="input" type="password" name="cpassword" placeholder="Confirm Password" required="">
          </div>
          <div class="control">
            <input class="input" type="number" name="contact" placeholder="Contant Number" required="">
          </div>
          <div class="control">
            <input class="input" type="email" name="email" placeholder="Email" required="">
          </div>
          <div class="control" >
           <!--  <input class="input1" type="text" name="role" placeholder="Role" required=""> -->
           <div class="select">
             <select style="width: 1000px; padding-top:5px; border:solid 1px;" name="role"required="">
              <option value="Super Admin">Super Admin</option>
              <option value="Admin">Admin</option>
            </select>
          </div>
        </div>
      </div>         
      <button type="submit" class="button is-success" name="btn_add_admin">Save</button>
       </form>

  </div>
</div>

