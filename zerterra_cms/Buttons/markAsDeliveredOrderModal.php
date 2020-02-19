 <div id="delivered<?php echo $id; ?>" class="modal" role="dialog">

                                              <div class="modal-background"></div>
                                              <div class="modal-card">
                                                <header class="modal-card-head">
                                                  <p class="modal-card-title">Delivered Order</p>

                                              </header>
                                              <form method="POST" class="modal-card-body" style="border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;">



                                                  <div class="field">
                                                    <input type="hidden" name="delivered_id" value="<?php echo $id; ?>">
                                                    
                                                </div>

                                                <div>Product for<strong>
                                                    "<?php echo $fname. " " .$lname ;?>"?</strong> has been delivered? </div>

                                                    <div style = " margin-bottom: 10px;
                                                    margin-top: 20px;
                                                    margin-right: auto;">

                                                    <button  class="button is-success" name="delivered_btn">
                                                      <i class="fas fa-check-double"></i>&nbspDone</button>
                                                      <button class="button is-danger"><i class="fas fa-ban">
                                                      </i>&nbspCancel</button>


                                                  </div>
                                              </form>

                                          </div>
                                      </div>
                                  </div>