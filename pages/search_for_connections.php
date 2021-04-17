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
        #search_header {
            text-align:center;
            margin-top: 50px;
            margin-bottom: 50px;
        }
    
    </style>
</head>
<body>
    
    <?php include "../res/modules/navbar.php"; ?>

    
    <!-- main body -->
    <div class="container-fluid">
        <div class="row" id="search_header">
            <h1>Search For Connections</h1>
        </div>

        <div class="row justify-content-center">
            <div class="input-group" style="width: 50%">
                <input type="search" class="form-control rounded" 
                placeholder="Enter a language or area of interest..." aria-label="Search"
                    aria-describedby="search-addon" />
                <button type="button" class="btn btn-outline-primary">search</button>
            </div>
        </div>

        <div id="search_results" style="text-align:center">
            THIS DIV WILL GENERATE CARDS FOR EACH USER
        </div>
            
    </div>
    


    <?php include "../res/modules/footer.php"; ?>
    <?php include '../res/modules/postscript.php'; ?>
</body>
</html>
