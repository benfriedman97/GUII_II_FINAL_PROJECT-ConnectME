
    <!-- footer -->
    <footer> <center>
        <div class="container-fluid">
            <div class="row">

                <div class="col-xs-12 col-md-2 justify-content-center">
                    <img src="res/images/icon.webp" width="50px" />
                </div>

                <div class="col-xs-12 col-md-8 justify-content-center">
                    <!-- copyright -->
                    Copyright &copy; Joseph Calles, Benjamin Friedman, & Tammy Liu 
                    <?php echo date("Y");?>. All rights reserved.

                    <!-- mailto -->
                    &emsp;<a class="nl-social2" 
                            href="mailto:joseph_calles@student.uml.edu,benjamin_friedman@student.uml.edu,tammy_liu@student.uml.edu">
                        <i class="bi bi-envelope"></i> <!-- icon -->

                    <!-- github repository -->
                    &emsp;</a><a href="#" target="_blank">
                        <i class="bi bi-github"></i></a> <!-- icon -->

                    <!-- home -->
                    &emsp;</a><a href="index.php" target="_self">
                        <i class="bi bi-house"></i></a> <!-- icon -->
                                    
                    <br />
                    Source code is distributed under the MIT license.
                </div>

                <!-- PayPal link -->
                <div class="col-xs-12 col-md-2 justify-content-center">
                    <form action="https://www.paypal.com/donate" method="post" target="_top">
                        <input type="hidden" name="business" value="RCM9NZRQ4MQRW" />
                        <input type="hidden" name="currency_code" value="USD" />
                        <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" title="PayPal - The safer, easier way to pay online!" alt="Donate with PayPal button" />
                        <img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1" />
                    </form>
                </div>
            </div>
        </div>
    </footer> </center>
    
    <!-- scripts -->

        <!-- jQuery -->
    <script type="text/javascript" 
            src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" 
            integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" 
            crossorigin="anonymous"></script>

        <!-- JavaScript -->
    <script type="text/javascript" 
            src="res/scripts/script.js"></script>

        <!-- PHP -->
    <?php include 'res/scripts/MySQLi_functions.php'; ?>
