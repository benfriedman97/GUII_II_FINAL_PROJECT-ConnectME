
<?php

// generate redirect link for post-signin
$link = openssl_encrypt($_SERVER["REQUEST_URI"], 
                        "CAMELLIA-128-CBC", 
                        "ConnectME", 0, 
                        "1234567891011121"); 
                        
?>
    <!-- navbar -->
    <nav class="navbar fixed-top bg-primary">

            <!-- offcanvas -->
            <div class="col-xs-12 col-md-4">

                <!-- offcanvas button -->
                <button class="btn btn-lg btn-dark" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                    <i class="bi bi-list" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample"></i>
                </button>

                <!-- offcanvas definition -->
                <div class="offcanvas offcanvas-start offcanvas-shadow" 
                     data-bs-scroll="true" 
                     data-bs-backdrop="false" 
                     tabindex="-1" 
                     id="offcanvasExample" 
                     aria-labelledby="offcanvasExampleLabel">
                    
                     <!-- offcanvas header -->
                    <div class="offcanvas-header">
                        <span class="welcome_message"></span>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>

                    <!-- offcanvas body -->
                    <div class="offcanvas-body">

                        <center><span class="fs-4">Menu</span></center>

                        <hr>

                        <!-- link menu -->
                        <ul class="nav nav-pills flex-column mb-auto" id="menu-items" style="font-size:150%">
                            <li class="nav-item">
                                <a href="index.php" class="nav-link">
                                    <i class="bi bi-house"></i>&emsp;Home
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="about_us.php" class="nav-link">
                                    <i class="bi bi-book-half"></i>&emsp;About us
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="the_industry.php" class="nav-link">
                                    <i class="bi bi-terminal"></i>&emsp;The Industry
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="networking.php" class="nav-link rounded">
                                    <i class="bi bi-bounding-box"></i>&emsp;Networking
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="getting_started.php" class="nav-link">
                                    <i class="bi bi-align-start"></i>&emsp;Getting started
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="contact.php" class="nav-link">
                                    <i class="bi bi-mailbox"></i>&emsp;Contact
                                </a>
                            </li>
                        </ul>

                        <hr>

                        <center> <!-- brand -->
                            <a href="index.php" target="_self">
                                <img class="align-middle" src="../res/images/icon.webp" width="200px" />
                            </a>
                        </center>

                    </div>
                </div>

                &emsp; <span class="welcome_message"></span> 

            </div>

            <!-- brand -->
            <div class="d-flex col-xs-12 col-md-4 justify-content-center"> 
                <a href="index.php" target="_self">
                    <img class="align-middle" src="../res/images/icon.webp" width="50px" />
                </a>
                <a class="align-middle" href="index.php" target="_self" id="navbar-title">ConnectME</a>
            </div>

            <!-- signin/signout -->
            <div id="sign-in" class="d-flex col-xs-12 col-md-4 justify-content-center justify-content-md-end">
                <span id="account_page_placeholder"></span>                
                <a href="signin.php?from=<?php echo $link ?>" target="_self">
                    <button class="btn btn-lg btn-dark" type="button">
                        Sign in&nbsp;
                    </button>
                </a>
            </div>
    </nav>

    <br /><br /><hr />
