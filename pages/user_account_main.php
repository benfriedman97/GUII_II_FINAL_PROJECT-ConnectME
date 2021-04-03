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

    <div class="container text-center">
        <div class="p-4 mb-4 bg-light rounded-3">
            <div class="container-fluid py-7">
                <main class="form-signin">
                    

                        
                </main>
            </div>
        </div>
    </div>

    <?php include "../res/modules/footer.php"; ?>

</body>
</html>
