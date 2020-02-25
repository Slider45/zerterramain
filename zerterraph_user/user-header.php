<nav class="navbar is-dark">
        <div class="navbar-brand">
            <a class="navbar-item" href="index.php">
                <img src="images/weblogo.png">
            </a>
            <div class="navbar-burger burger" data-target="navMenu">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>

        <div id="navMenu" class="navbar-menu">
            <div class="navbar-end">
                <a class="navbar-item" id="userid"><?= $_SESSION['userEmail']?> &nbsp<i class="fas fa-user"></i></a>
                <a class="navbar-item" href="logout.php"><i class="fas fa-sign-out-alt"></i>&nbspLogout</a>
            </div>
        </div>
</nav>