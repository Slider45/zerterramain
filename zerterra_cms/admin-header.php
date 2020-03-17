 <nav class="navbar" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
      <a class="navbar-item" href="index.php">
        <img src="images/logowhite.png" width="112" height="28" class="img-logo">
      </a>
    </div>


    <div class="navbar-end">
      <div class="navbar-item">
        <div class="buttons">
          <a class="button btn-logout modal-button" data-target="#adminSearchModal" aria-haspopup="true">
            <i class="fa fa-search"></i></i> &nbspSearch
          </a>
          <a class="button btn-user">
             <?= $_SESSION['admin']?>&nbsp&nbsp<img src="images/userIcon.png" id="userIcon"></i>

          </a>
          <!--<a href="../zerterraph_user/logout.php" class="button btn-logout">-->
          <!--   Logout &nbsp<i class="fas fa-sign-out-alt"></i>-->
          <!--</a>-->
        </div>
      </div>
    </div>
  </div>
</nav>