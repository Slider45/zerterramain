<!DOCTYPE html>
<html>
<head>
	<title>USERS</title>
</head>


<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css">
<link href="https://fonts.googleapis.com/css?family=Montserrat:600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
<link rel="stylesheet" href="https://unpkg.com/bulma-modal-fx/dist/css/modal-fx.min.css" />
<link rel="icon" href="images/plainlogo.png" type="image/x-icon" />
<link rel="stylesheet" href="../sass/order-conf.css">


<style>
  .input, .is-primary{
    font-family: Montserrat; 
    width: 100%;
  }

  #input {
    border: none;
    background-color: transparent;
    box-shadow: none;
    color: #00947e;
    font-family: Montserrat;
  }

  #modalbody{
  	border-radius: 0;
  }

</style>

<body onload="myFunction();" style="font-family: Montserrat;">



  <div class="modal modal-fx-fall" id="removeadminModal" overflow-y:visible;>
    <div class="modal-background"></div>
    <div class="modal-card">
      <header class="modal-card-head is-success">
        <p class="modal-card-title">USERS</p>
       
      </header>
      <section class="modal-card-body" id="modalbody">





          <!-- modal here -->
          <div class="notification is-primary is-light" style = "background-color: #ebfffc;color: #00947e;">
            <center>
             <strong><?php echo $msg?></strong> 
           </center>
         </div>

       </section>
       <footer class="modal-card-foot" >
        <a href="users.php"><button class="button is-danger" style="font-family: Montserrat;"><i class="fas fa-arrow-left"></i>&nbspBACK</button></a>
      </footer>
    </div>
  </div>




<script>




 function myFunction() {
  // var pgloader = document.querySelector('#pgloadr');
  // pgloader.classList.add('is-active');

  var warrantyModal = document.querySelector('#removeadminModal');
  var modalCloseBtn = document.querySelector('#closeMdl');
  warrantyModal.classList.add('is-active');
}



</script>
<script type="text/javascript" src="dist/js/modal-fx.min.js"></script>

<script type="text/javascript" src="https://unpkg.com/bulma-modal-fx/dist/js/modal-fx.min.js"></script>


</body>
</html>