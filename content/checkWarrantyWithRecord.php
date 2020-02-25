<!DOCTYPE html>
    <html>
    <head>
      <title>Check Warranty</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css">
      <link href="https://fonts.googleapis.com/css?family=Montserrat:600&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
      <link rel="stylesheet" href="https://unpkg.com/bulma-modal-fx/dist/css/modal-fx.min.css" />

      <link rel="stylesheet" href="dist/css/modal-fx.min.css" />
      <script src="https://code.jquery.com/jquery-3.3.1.js"></script>


    </head>

    
    <body onload="myFunction();">
      <div class="pageloader is-bottom-to-top is-active" id="pgloadr"><span class="title"></span></div>



      <div class="modal modal-fx-fall" id="warrantyModal" overflow-y:visible;>
        <div class="modal-background"></div>
        <div class="modal-card">
          <header class="modal-card-head">
            <p class="modal-card-title">Check Warranty</p>
            <a href="index.php"><button class="delete" id="closeMdl"aria-label="close"></button></a>
          </header>
          <section class="modal-card-body">

             <div class="notification is-success is-light alert">

            Serial # : <strong><?php echo $serialNum; ?></strong><br>
            Firstname : <strong><?php echo $fname; ?></strong><br>
            Lastname : <strong><?php echo $lname; ?></strong><br>
            Contact # : <strong><?php echo $contact; ?></strong><br>
            Email : <strong><?php echo $email; ?></strong><br>
            Remaning Warranty Days : <strong><?php echo $Rdays; ?></strong><br>
            Date Registered : <strong><?php echo $dateRegs; ?></strong><br>
            Warranty Expired : <strong><?php echo $dateEnds; ?></strong><br>
            <br>

            For more info just contact as at support@zerterra.com

          </div>

        </section>
        <footer class="modal-card-foot">
          <a href="index.php"><button class="button is-success">BACK</button></a>
        </footer>
      </div>
    </div>
 

  <script>




   function myFunction() {
  // var pgloader = document.querySelector('#pgloadr');
  // pgloader.classList.add('is-active');

  var warrantyModal = document.querySelector('#warrantyModal');
  var modalCloseBtn = document.querySelector('#closeMdl');
  warrantyModal.classList.add('is-active');
}



</script>
<script type="text/javascript" src="dist/js/modal-fx.min.js"></script>

<script type="text/javascript" src="https://unpkg.com/bulma-modal-fx/dist/js/modal-fx.min.js"></script>

</body>
</html>

