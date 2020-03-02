<!-- Modal -->

<style type="text/css" media="screen">
  #card-con:hover {
  border: solid 1px;
  color: #fff;
}  
</style>

<div id="id01" class="w3-modal">
    <div class="w3-modal-content" id="content">
      <div class="w3-container" style="border-radius:8px;">
        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright">&times;</span>

        <div class="w3-container" >
            <h2 class="is-size-4" style="font-family: Montserrat; text-align: center;">CONSOLIDATE ACCOUNTS</h2>
            <!-- <p>Add containers inside the card to create different sections:</p> -->

            <div class="columns">
                <div class="column  is-4">
                <a href="conso-sales.php">
                    <div class="w3-card-4" >
                    <div class="w3-container" id="card-con"  style="background:url(images/consSaleIcon.png);  background-size: 100% 100%; background-repeat: no-repeat;  margin-top: 20px;">
                  <!--   <center><p id="text1">SALES</p></center> -->
                    </div>
                    </div></a>
                </div>

                <div class="column  is-4">
                <a href="conso-users.php">
                    <div class="w3-card-4" >
                   <div class="w3-container" id="card-con"  style="background:url(images/consUserIcon.png);  background-size: 100% 100%; background-repeat: no-repeat;  margin-top: 20px;">
                       <!-- <center><p id="text1">USERS ITO</p></center> -->
                        
                    </div>
                    </div>
                </a>    
                </div>

                <div class="column  is-4">
                <a href="conso-act.php">
                    <div class="w3-card-4" >
                  <div class="w3-container" id="card-con"  style="background:url(images/consALIcon.png);  background-size: 100% 100%; background-repeat: no-repeat;  margin-top: 20px;">
                    <!-- <center><p id="text1">ACTIVITY LOG</p></center> -->
                    </div>
                    </div>
                </a>
                </div>
            </div>



           
    </div>

      </div>
    </div>
