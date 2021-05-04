<?php include '../res/modules/prescript.php'; ?>

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
    
       
        #edit_user_profile {
            margin-top: 20%;
            margin-left: 25%;
            margin-right: 25%;
            border-style: groove;
            background-color: #dad8d8;
            border-color: black;
        }

        #name_email {
            padding-top: 5%;
            color:black;
        }
    
        

        
    </style>
</head>
<body>
    
    <?php include "../res/modules/navbar.php"; ?>

    
    <!-- main body -->
    <div class="container-fluid">

        <div class="row p-5">
            <div class="col">
                <img src="../res/images/account.png" alt="account_logo" class="rounded mx-auto d-block" style="width:50%">
            </div>

            <div class="col" id="name_email">
                <h6 class="text-center" style="color:black">Name: <?php echo $_SESSION['current-user-first-name'] . ' ' . $_SESSION['current-user-last-name']; ?></h4>
                <h6 class="text-center" style="color:black">Email: <?php echo $_SESSION['current-user-email']; ?></h4>
            </div>
            <div class="col">
                <h4 class="text-center" id="edit_user_profile" style="color:black">
                    <a href="./edit_profile.php">Edit Profile</a>
                </h4>
            </div>
        </div>

        <div class="row p-3">
            <div class="col-3">
                <h6 class="text-center">CURRENT</h6>
                <p class="text-center">Connections</p>
            </div>
            <div class="col-6">
                View your current connections.
            </div>
            <div class="col-3">
            <button type="button" class="btn btn-primary btn-lg">
                CONNECT
            </button>
            </div>
        </div>

        <div class="row p-3">
            <div class="col-3">
                <h6 class="text-center">PENDING</h6>
                <p class="text-center">Connections</p>
            </div>
            <div class="col-6">
                View your pending connections.
            </div>
            <div class="col-3">
                <button type="button" class="btn btn-primary btn-lg">BROWSE</button>
            </div>
        </div>

        <div class="row p-3">
            <div class="col-3">
                <h6 class="text-center">NEW</h6>
                <p class="text-center">Connections</p>
            </div>
            <div class="col-6">
                Search for new connections.
            </div>
            <div class="col-3">
            <button type="button" class="btn btn-primary btn-lg">
               <a href="search_for_connections.php">EXPLORE</a>
            </button>
            </div>
        </div>

        <div class="row p-3">
            <div class="col-3">
                <h6 class="text-center">SHARE</h6>
                <p class="text-center">projects</p>
            </div>
            <div class="col-6">
                Share projects for code review.
            </div>
            <div class="col-3">
            <button type="button" class="btn btn-primary btn-lg">CREATE</button>
            </div>
        </div>
    </div>
    

    <?php include "../res/modules/footer.php"; ?>

    <?php include '../res/modules/postscript.php'; ?>

</body>

</html>
