    <!-- navbar -->
    <nav class="navbar fixed-top navbar-dark bg-primary">
        <form class="container-fluid">
            <!-- dropdown -->
            <div class="col-xs-3">
                <div class="btn">
                    <button type="button" class="btn btn-secondary" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-list"></i>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="about_us.php" target="_self">About Us</a></li>
                        <li><a class="dropdown-item" href="the_industry.php" target="_self">The Industry</a></li>
                        <li><a class="dropdown-item" href="networking.php" target="_self">Networking</a></li>
                        <li><a class="dropdown-item" href="getting_started.php" target="_self">Getting Started</a></li>
                        <li><a class="dropdown-item" href="contact.php" target="_self">Contact</a></li>
                    </ul>
                </div>
            </div>

            <!-- navbar heading -->
            <div class="col-xs-9">
                <img class="align-middle" src="res/images/icon.webp" width="50px" />
                <a class="align-middle" href="index.php" target="_self" id="navbar-title">ConnectME</a>
            </div>

            <!-- sign-in -->
            <div id="sign-in" class="col-xs-3">
                <div id="welcome_placeholder"></div>
                <button class="btn btn-lg btn-outline-secondary" type="button">
                    <a href="signin.php" target="_self">Sign in</a>
                </button>
            </div>
        </form>
    </nav>