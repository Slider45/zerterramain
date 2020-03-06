 <?php
 // include 'approvedQuery.php';
 ?>
 
 <style type="text/css" media="screen">

  #btndeliver{
    margin-bottom: 10px;
    margin-top: 20px;
    margin-right: auto;
  }
  
</style>

<div id="delivered<?php echo $id; ?>" class="modal" role="dialog">

  <div class="modal-background"></div>
  <div class="modal-card">
    <header class="modal-card-head">
      <p class="modal-card-title">Delivered Order</p>

    </header>
    <div class="modal-card-body" style="border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;">


     

      <div>Product for<strong>
        "<?php echo $fname. " " .$lname ;?>"?</strong> has been delivered? </div>

        <div>
          <form action="Modals/delivered_confirmation.php" method="GET" accept-charset="utf-8">
            <div class="field">
             <input type="hidden" name="orderNum" value="<?php echo $orderNum; ?>">
             <input type="hidden" name="delivered_id" value="<?php echo $id; ?>">
             <input type="hidden" name="serialNum" value="<?php echo $serialNum; ?>">

             <button  class="button is-success" id="btndeliver" name="delivered_btn">
              <i class="fas fa-check-double"></i>&nbspDone</button> 

            </form>
            <form action="approved.php" method="POST" accept-charset="utf-8">
              
              <button class="button is-danger" id="btndeliver"><i class="fas fa-ban">
              </i>&nbspCancel</button>
            </form>
            
          </div>

        </div>
      </div>

    </div>
