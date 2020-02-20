<style>

  /* header */
  #admin-header{
    font-weight:bold;
  }

  #searchbtn{
   font-family: Montserrat;
  }

  /* textbox */

  .input{
    border:solid 1px;
    margin-bottom:5px;
    color: #333;
  }

</style>

<div class="modal" id="salesSearchModal">
  <div class="modal-background"></div>
  <div class="modal-card">
    <header class="modal-card-head">
     <p class="modal-card-title" id="admin-header">SEARCH</p>
     <button class="modal-close" aria-label="close"></button>
   </header>
   <form method="POST" action="sales.php" class="modal-card-body" style="border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;" >
     <div class="field">   
      <div class="control">
        <input class="input" type="text" name="searchValue" placeholder="Search..." required="">
      </div>
      <div class="control" >
     
      
     </div>
   </div>         
   <button class="button is-primary" id="searchbtn" name="search_btn" value="submit" ><i class="fa fa-search"></i>&nbspSearch</button>
  

 </form>

</div>
</div>






