<!-- ---------------------------------------------------------------------- --
  - Joseph Calles, Benjamin Friedman, & Tammy Liu
  - University of Massachusetts Lowell
  - COMP.4620-201 SP2021 Term Project
  - Filename: index.html
  - Link: <INSERT HERE>
  - Email:  joseph_calles@student.uml.edu
            benjamin_friedman@student.uml.edu
            tammy_liu@student.uml.edu
  - Copyright (c) 2021 by Josph Calles, Benjamin Friedman, & Tammy Liu. 
        All rights reserved. May be freely copied or excerpted for educational 
        purposes with credit to the author.
  - File created on 03/19/2021.
  - HTML file for the landing page of our project
  - TO DO:
        x add main body content
        x make working sign in buttons
        x redesign color scheme (https://bootswatch.com/cerulean/)
        x integrate backend and php server
  -- ---------------------------------------------------------------------- -->
  
<!DOCTYPE html>

<html lang="en-us">

<head>
    <!-- metadata -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="authors" content="Joseph Calles, Benjamin Friedman, Tammy Liu" />
    <meta name="description" content="COMP.4210-201 SP2021 Term Project" />
    <meta name="organization" content="University of Massachusetts Lowell" />
    <meta name="keywords" content="UML, GUI, HTML5, CSS3, JS, PHP, Bootstrap 5.0" />
    
    <!-- title -->
    <title>ConnectME</title>
    
    <!-- tab icon -->
    <link rel="icon" type="image/x-icon" href="res/images/icon.webp" />

    <!-- CSS styles -->
        <!-- Bootstrap main -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" 
          rel="stylesheet"
          integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" 
          crossorigin="anonymous" />

        <!-- Bootstrap custom theme -->
    <link rel="stylesheet" 
          type="text/css" 
          href="res/styles/bootstrap-cerulean-theme.min.css" />

    <link rel="stylesheet" 
          href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
        <!-- custom CSS -->
    <link rel="stylesheet" 
          type="text/css" 
          href="res/styles/style.css" />
</head>

<body>

    <!-- navbar -->
    <nav class="navbar navbar-fixed-top navbar-dark bg-primary">
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
                <a href="index.php" target="_self" id="navbar-title">ConnectME</a>
            </div>

            <!-- sign-in -->
            <div id="sign-in-buttons" class="col-xs-12">
                <a href="#" target="_self"><img src="res/images/google_logo.png" width="30px" /></a>
                <a href="#" target="_self"><img src="res/images/linkedin_logo.png" width="35px" /></a>
                <a href="#" target="_self"><img src="res/images/github_logo.png" width="30px" /></a>
                <button class="btn btn-md btn-outline-secondary" type="button">Sign in</button>
            </div>
        </form>
    </nav>

    <br />

    <!-- main body -->
    <div class="container-fluid">
        <div class="row">

            <!-- left sidebar -->
            <div class="col-xs-12 col-sm-12 col-md-2 bg-danger">
                Left Sidebar
            </div>

            <!-- main content -->
            <div class="col-xs-12 col-sm-12 col-md-8">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius voluptatum numquam error ad iure voluptatibus quas a est iste ullam consequatur omnis, eveniet porro commodi quidem cumque quisquam odio necessitatibus, doloribus eaque fuga tempore perspiciatis magnam fugiat! Quos doloribus necessitatibus tempora rerum molestiae, dolorem quae consectetur. Quos placeat suscipit dicta, excepturi vel consequatur similique reiciendis repudiandae eos est incidunt modi ea dolores omnis rerum! Commodi, molestiae. Ullam rem quia excepturi aperiam quod ea architecto placeat cupiditate voluptatem fugit hic neque, consequuntur qui nam! Temporibus harum at omnis minus sint aliquid nihil sapiente nisi illo iure perspiciatis, eaque consequuntur sed, qui minima deserunt suscipit architecto vero? Quidem quaerat commodi explicabo modi provident! Nostrum, nam doloremque amet sint saepe perferendis quisquam officia quasi eligendi voluptatem quo temporibus iure vero minima. Dicta voluptatem nulla voluptatibus fuga fugit, officiis perspiciatis quasi natus voluptas, commodi deserunt velit magni obcaecati ipsam similique quam. Explicabo placeat voluptatum labore voluptate, expedita delectus temporibus necessitatibus quaerat. Exercitationem quis fugiat eos quia reiciendis culpa impedit odit cum quaerat, molestiae non sit voluptates ea nobis. Labore nesciunt ullam cumque voluptas accusamus molestias quae unde. Incidunt, ad nesciunt officia porro blanditiis a odit. Accusantium aut natus maxime fuga vitae cupiditate labore, harum quis illo aspernatur eius amet voluptas aliquid, consectetur sed molestiae. Dolore esse expedita earum sit dolores quaerat eius quo rem fuga, perferendis aut laboriosam architecto quod, ducimus sapiente et quae, consectetur nihil aspernatur. Odio quaerat natus doloremque dolores nisi. Corrupti molestiae animi accusantium distinctio nam nostrum temporibus inventore dolore. Doloribus dolore, natus, a, accusantium earum veniam nam fugit laborum consectetur exercitationem deserunt repellendus ipsam. Officia in veniam esse illum consequuntur beatae quo architecto deleniti obcaecati, ea saepe dicta repellat similique voluptates nesciunt animi aliquam adipisci quae error illo velit quam quas quisquam. Eaque vel incidunt optio nostrum suscipit neque, explicabo et possimus sequi alias architecto totam ipsa, voluptate molestias. Illum molestiae provident nihil delectus cupiditate, ipsam eum repudiandae? Dolore eligendi aliquam temporibus illum cupiditate eum modi, ipsum nisi ipsa minus hic quia voluptates in vel ducimus assumenda? Asperiores consectetur, dolore quae sequi voluptatibus beatae eligendi exercitationem qui magnam suscipit accusamus odio tempore temporibus. Harum nam officia quo omnis ullam eligendi aut inventore odit cumque reiciendis unde rerum quaerat reprehenderit ducimus suscipit provident, delectus quasi libero adipisci, voluptatem dicta commodi, ad tempora! A voluptates quis reprehenderit ipsam totam, modi sint deleniti molestiae veritatis temporibus, asperiores perferendis vel. Dolorem inventore suscipit laboriosam architecto vitae maxime eligendi eveniet libero! Corrupti dignissimos, nemo ipsa eaque pariatur ab laboriosam deserunt nam sed adipisci blanditiis quaerat commodi ratione perferendis aliquid cupiditate asperiores aspernatur sit quo ipsam? Tenetur deserunt reprehenderit aspernatur sed doloremque. Error corrupti non placeat ea, esse hic, impedit commodi porro voluptate sequi expedita quidem enim, officia tempore libero nemo beatae. Accusamus molestiae, possimus at eos fugit ab exercitationem architecto obcaecati quo, dignissimos voluptatum unde recusandae eveniet, earum atque quisquam. Commodi repellat veritatis ratione. Rem eos ipsa dolores dolorem non, unde maiores aperiam quaerat temporibus blanditiis cupiditate officiis optio iure iste nisi beatae! Non, ratione!
                </p>
            </div>

            <!-- right sidebar -->
            <div class="col-xs-12 col-sm-12 col-md-2 bg-warning">
                Right Sidebar
            </div>
            
        </div>
    </div>



    <!-- footer -->
    <footer>
        <hr/>
        <center><p>
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
        </p></center>
    </footer>

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

</body>

</html>
