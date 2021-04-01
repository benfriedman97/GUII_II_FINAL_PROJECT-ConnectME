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

<!-- start session if it is not already started -->
<?php if (session_status() === PHP_SESSION_NONE) session_start(); ?>

<!DOCTYPE html>

<html lang="en-us">

<head>
    <?php include "../res/modules/header.php"; ?>
</head>

<body>

    <?php include "../res/modules/navbar.php"; ?>

    <!-- main body -->
    <div class="container-fluid">
        <div class="row">

            <!-- left sidebar -->
            <div class="col-xs-12 col-md-2 bg-danger">
                Left Sidebar
            </div>

            <!-- main content -->
            <div class="col-xs-12 col-md-8">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius voluptatum numquam error ad iure voluptatibus quas a est iste ullam consequatur omnis, eveniet porro commodi quidem cumque quisquam odio necessitatibus, doloribus eaque fuga tempore perspiciatis magnam fugiat! Quos doloribus necessitatibus tempora rerum molestiae, dolorem quae consectetur. Quos placeat suscipit dicta, excepturi vel consequatur similique reiciendis repudiandae eos est incidunt modi ea dolores omnis rerum! Commodi, molestiae. Ullam rem quia excepturi aperiam quod ea architecto placeat cupiditate voluptatem fugit hic neque, consequuntur qui nam! Temporibus harum at omnis minus sint aliquid nihil sapiente nisi illo iure perspiciatis, eaque consequuntur sed, qui minima deserunt suscipit architecto vero? Quidem quaerat commodi explicabo modi provident! Nostrum, nam doloremque amet sint saepe perferendis quisquam officia quasi eligendi voluptatem quo temporibus iure vero minima. Dicta voluptatem nulla voluptatibus fuga fugit, officiis perspiciatis quasi natus voluptas, commodi deserunt velit magni obcaecati ipsam similique quam. Explicabo placeat voluptatum labore voluptate, expedita delectus temporibus necessitatibus quaerat. Exercitationem quis fugiat eos quia reiciendis culpa impedit odit cum quaerat, molestiae non sit voluptates ea nobis. Labore nesciunt ullam cumque voluptas accusamus molestias quae unde. Incidunt, ad nesciunt officia porro blanditiis a odit. Accusantium aut natus maxime fuga vitae cupiditate labore, harum quis illo aspernatur eius amet voluptas aliquid, consectetur sed molestiae. Dolore esse expedita earum sit dolores quaerat eius quo rem fuga, perferendis aut laboriosam architecto quod, ducimus sapiente et quae, consectetur nihil aspernatur. Odio quaerat natus doloremque dolores nisi. Corrupti molestiae animi accusantium distinctio nam nostrum temporibus inventore dolore. Doloribus dolore, natus, a, accusantium earum veniam nam fugit laborum consectetur exercitationem deserunt repellendus ipsam. Officia in veniam esse illum consequuntur beatae quo architecto deleniti obcaecati, ea saepe dicta repellat similique voluptates nesciunt animi aliquam adipisci quae error illo velit quam quas quisquam. Eaque vel incidunt optio nostrum suscipit neque, explicabo et possimus sequi alias architecto totam ipsa, voluptate molestias. Illum molestiae provident nihil delectus cupiditate, ipsam eum repudiandae? Dolore eligendi aliquam temporibus illum cupiditate eum modi, ipsum nisi ipsa minus hic quia voluptates in vel ducimus assumenda? Asperiores consectetur, dolore quae sequi voluptatibus beatae eligendi exercitationem qui magnam suscipit accusamus odio tempore temporibus. Harum nam officia quo omnis ullam eligendi aut inventore odit cumque reiciendis unde rerum quaerat reprehenderit ducimus suscipit provident, delectus quasi libero adipisci, voluptatem dicta commodi, ad tempora! A voluptates quis reprehenderit ipsam totam, modi sint deleniti molestiae veritatis temporibus, asperiores perferendis vel. Dolorem inventore suscipit laboriosam architecto vitae maxime eligendi eveniet libero! Corrupti dignissimos, nemo ipsa eaque pariatur ab laboriosam deserunt nam sed adipisci blanditiis quaerat commodi ratione perferendis aliquid cupiditate asperiores aspernatur sit quo ipsam? Tenetur deserunt reprehenderit aspernatur sed doloremque. Error corrupti non placeat ea, esse hic, impedit commodi porro voluptate sequi expedita quidem enim, officia tempore libero nemo beatae. Accusamus molestiae, possimus at eos fugit ab exercitationem architecto obcaecati quo, dignissimos voluptatum unde recusandae eveniet, earum atque quisquam. Commodi repellat veritatis ratione. Rem eos ipsa dolores dolorem non, unde maiores aperiam quaerat temporibus blanditiis cupiditate officiis optio iure iste nisi beatae! Non, ratione!
                </p>
            </div>

            <!-- right sidebar -->
            <div class="col-xs-12 col-md-2 bg-warning">
                Right Sidebar
            </div>
            
        </div>
    </div>

    <?php include "../res/modules/footer.php"; ?>

    <script type="text/javascript">
        $(document).ready(function () {
            $("nav ul li:nth-child(2) a").addClass("active");
        });
    </script>

    <?php include "../res/scripts/MySQLi_functions.php"; ?>


</body>

</html>
