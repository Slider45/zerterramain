<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css">
  <link rel="icon" href="images/plainlogo.png" type="image/x-icon" />
  <link href="https://fonts.googleapis.com/css?family=Montserrat:600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
  <script src="js/homeJS.js"></script>
  <link rel="stylesheet" type="text/css" href="../sass/pendingDeclineModal.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
  <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://unpkg.com/bulma-modal-fx/dist/css/modal-fx.min.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <title>Login</title>
  </head>

<body>

<div class="buttons">
  <button class="button is-danger" id="btn">Danger</button>

  

  <div class="modal" id="modal">
    <div class="modal-background"></div>
    <div class="modal-content">
      <div class="card">
        <header class="card-header">
          <p class="card-header-title">
            Customer Information
          </p>
        </header>

        <div class="card-content">
          <div class="content">
           
            <div class="field">
              <div class="control">
                <div class="field">
                  <input type="hidden" name="edit_id" value="<?php echo $id; ?>">
                </div>
              </div>
              <div class="control" >
                <div class="columns">
                  <div class="column is-2" id="label">Firstname:</div>
                  <div class="column" id="txtbox"><input class="input"   name="edit_fname"  value="<?php echo $fname; ?>" disabled="disabled" ></div>
                </div>
              </div>
              <div class="control">
                <div class="columns">
                  <div class="column is-2" id="label">Lastname:</div>
                  <div class="column" id="txtbox"> <input class="input"  name="edit_lname" readonly value="<?php echo $lname; ?>"disabled="disabled"></div>
                </div>
              </div>
              <div class="control">
                <div class="columns">
                  <div class="column is-2" id="label">Email:</div>
                  <div class="column" id="txtbox"><input class="input"  name="edit_email"  readonly value="<?php echo $email; ?>" disabled="disabled"></div>
                </div>
              </div>
              <div class="control">
                <div class="columns">
                  <div class="column is-2" id="label">Address:</div>
                  <div class="column" id="txtbox"><input class="input"  name="edit_address" readonly value="<?php echo $address; ?>" disabled="disabled"></div>
                </div>
              </div>
              <div class="control">
                <div class="columns">
                  <div class="column is-2" id="label">Contact:</div>
                  <div class="column" id="txtbox"><input class="input"  name="edit_contact" readonly value="<?php echo $contact; ?>"  disabled="disabled"></div>
                </div>
              </div>
              <div class="control" style="margin-top: 10px;">                  
              </div>
            </div>

            <footer class="card-footer">
                <div class="buttons">
                  <button class="button is-success">Remove</button>
                  <button class="button is-danger" id="btn-decline">Decline</button>
            
                  <div class="modal" id="modal2">
                    <div class="modal-background"></div>

                    <div class="modal-content">

                    <div class="card">
                        <header class="card-header">
                          <p class="card-header-title">
                            Confirm Password
                          </p>
                        </header>
                        <div class="card-content">
                          <div class="content">
                          <input class="input" type="text" placeholder="Password">
                          </div>
                        </div>
                        <footer class="card-footer">
                        <div class="buttons">
                          <button class="button is-success">Success</button>
                        </div>
                        </footer>
                      </div>
                    </div>

                    <button class="modal-close is-large" aria-label="close" id="modal-close-decline"></button>
                  </div>
                </div>
            </footer>
            </div>
           
          </div>
        </div>

      </div>
    </div>
    <button class="modal-close is-large" aria-label="close" id="modal-2"></button>
  </div>

</div>

<script>

 var btn = document.querySelector('#btn');
 var modalDlg = document.querySelector('#modal');
 var imageModalCloseBtn = document.querySelector('#modal-2');
 btn.addEventListener('click', function(){
  modalDlg.classList.add('is-active');
});

 imageModalCloseBtn.addEventListener('click', function(){
  modalDlg.classList.remove('is-active');
});

</script>

<script>

 var btn1 = document.querySelector('#btn-decline');
 var modalDlg1 = document.querySelector('#modal2');
 var imageModalCloseBtn1 = document.querySelector('#modal-close-decline');
 btn1.addEventListener('click', function(){
  modalDlg1.classList.add('is-active');
});

 imageModalCloseBtn1.addEventListener('click', function(){
  modalDlg1.classList.remove('is-active');
});

</script>

<script type="text/javascript" src="dist/js/modal-fx.min.js"></script>
  <script type="text/javascript" src="js/script.js"></script>
  <script type="text/javascript" src="https://unpkg.com/bulma-modal-fx/dist/js/modal-fx.min.js"></script>
  <script type="text/javascript" src="js/script.js"></script>

</body>
</html>

