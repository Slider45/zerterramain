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
     <p class="modal-card-title" id="admin-header">ADD USERS</p>
     <button class="modal-close" aria-label="close"></button>
   </header>
   <form method="POST" class="modal-card-body">
     <div class="field">
       <div class="control">
        <input class="input" type="text" name="serialnum" placeholder="Serialnumber" required="">
      </div>
      <div class="control">
        <input class="input" type="text" name="fname" placeholder="Firstname" required="">
      </div>
      <div class="control">
        <input class="input" type="text" name="lname" placeholder="Lastname" required="">
      </div>
      <div class="control">
        <input class="input" type="email" name="email" placeholder="Email " required="">
      </div>
      <div class="control">
        <input class="input" type="number" name="contact" placeholder="Contact" required="">
      </div>
      
    </div>         
    <button type="submit" class="button is-success" name="userbtn-save">Save</button>
  </form>

</div>
</div>

