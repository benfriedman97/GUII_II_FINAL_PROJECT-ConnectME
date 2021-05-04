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
    
       
        
        

        
    </style>
</head>
<body>
    
    <?php include "../res/modules/navbar.php"; ?>

    
    <div class="container">
    <div class="row flex-lg-nowrap">
    <div class="col">
        <div class="row">
        <div class="col mb-3">
            <div class="card">
            <div class="card-body">
                <div class="e-profile">
                <div class="row">
                    <div class="col-12 col-sm-auto mb-3">
                    <div class="mx-auto" style="width: 140px;">
                        <div class="d-flex justify-content-center align-items-center rounded" style="height: 140px; background-color: rgb(233, 236, 239);">
                        <span style="color: rgb(166, 168, 170); font: bold 8pt Arial;">140x140</span>
                        </div>
                    </div>
                    </div>
                    <div class="col d-flex flex-column flex-sm-row justify-content-between mb-3">
                    <div class="text-center text-sm-left mb-2 mb-sm-0">
                        <h4 class="pt-sm-2 pb-1 mb-0 text-nowrap"><?php echo $_SESSION['current-user-first-name'] . ' ' . $_SESSION['current-user-last-name']; ?></h4>
                        <p class="mb-0"><?php echo $_SESSION['current-user-email']; ?></p>
                        
                        <div class="mt-2">
                        <button class="btn btn-primary" type="button">
                            <i class="fa fa-fw fa-camera"></i>
                            <span>Change Photo</span>
                        </button>
                        </div>
                    </div>
                    </div>
                </div>
                <ul class="nav nav-tabs">
                    <li class="nav-item"><a href="" class="active nav-link">Settings</a></li>
                </ul>
                <div class="tab-content pt-3">
                    <div class="tab-pane active">
                    <form class="form" novalidate="">
                        <div class="row">
                        <div class="col">
                            <div class="row">
                            <div class="col">
                                <div class="form-group">
                                <label>First Name</label>
                                <input class="form-control" type="text" name="name" placeholder=<?php echo $_SESSION['current-user-first-name']; ?> value=<?php echo $_SESSION['current-user-first-name']; ?>>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                <label>Last Name</label>
                                <input class="form-control" type="text" name="name" placeholder=<?php echo $_SESSION['current-user-last-name']; ?> value=<?php echo $_SESSION['current-user-last-name']; ?>>
                                </div>
                            </div>
                            
                            </div>
                            <div class="row">
                            <div class="col">
                                <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" type="text" placeholder=<?php echo $_SESSION['current-user-email']; ?>>
                                </div>
                            </div>
                            </div>
                            <div class="row">
                            <div class="col mb-3">
                                <div class="form-group">
                                <label>Programming Languages/Areas of Interest</label>
                                <textarea class="form-control" rows="5"></textarea>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                        <div class="row">
                        <div class="col-12 col-sm-6 mb-3">
                            <div class="mb-2"><b>Change Password</b></div>
                            <div class="row">
                            <div class="col">
                                <div class="form-group">
                                <label>Current Password</label>
                                <input class="form-control" type="password">
                                </div>
                            </div>
                            </div>
                            <div class="row">
                            <div class="col">
                                <div class="form-group">
                                <label>New Password</label>
                                <input class="form-control" type="password">
                                </div>
                            </div>
                            </div>
                            <div class="row">
                            <div class="col">
                                <div class="form-group">
                                <label>Confirm <span class="d-none d-xl-inline">Password</span></label>
                                <input class="form-control" type="password"></div>
                            </div>
                            </div>
                        </div>

                            

                        </div>
                        <div class="row">
                        <div class="col d-flex justify-content-end">
                            <button class="btn btn-primary" type="submit">Save Changes</button>
                        </div>
                        </div>
                    </form>

                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>

        
        </div>

    </div>
    </div>
    </div>

        
    

    <?php include "../res/modules/footer.php"; ?>
    <?php include '../res/modules/postscript.php'; ?>
</body>
</html>
