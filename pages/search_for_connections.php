  <!-- start session if it is not already started -->
  <?php if (session_status() === PHP_SESSION_NONE) session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php include "../res/modules/header.php"; ?>

    <!-- page-specific style -->
    <style>

    
    </style>
</head>
<body>
    
    <?php include "../res/modules/navbar.php"; ?>

    
    <!-- main body -->
    <div class="container-fluid">
        <div class="row">

            <!-- left sidebar -->
            <div class="col-xs-12 col-md-2 bg-success">
                Left Sidebar
            </div>

            <!-- main content -->
            <div class="col-xs-12 col-md-8">
                <p>
                SEARCH FOR CONNECTIONS PAGE HERE
                </p>
            </div>

            <!-- right sidebar -->
            <div class="col-xs-12 col-md-2 bg-warning">
                Right Sidebar
            </div>
            
        </div>
    </div>
    

    <?php include "../res/modules/footer.php"; ?>

</body>
</html>
