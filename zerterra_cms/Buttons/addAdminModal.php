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

<script>
  var btn = document.querySelector('#sendmodal');
  var modalDlg9 = document.querySelector('#serv-modal1');
  var imageModalCloseBtn9 = document.querySelector('#close9');
  btn.addEventListener('click', function(){
    modalDlg9.classList.add('is-active');
  });

  imageModalCloseBtn9.addEventListener('click', function(){
    modalDlg9.classList.remove('is-active');
  });
    // .click(function() {
    //   .addClass("is-active");  
    // });

    // $(".modal-close").click(function() {
    //    $(".modal").removeClass("is-active");
    // });
  </script>        

<script>
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
}
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}
document.querySelectorAll('.modal-button').forEach(function(el) {
    el.addEventListener('click', function() {
      var target = document.querySelector(el.getAttribute('data-target'));
      
      target.classList.add('is-active');
      
      target.querySelector('.modal-close').addEventListener('click', function(){
        target.classList.remove('is-active');
      });
    });
  });
</script>