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
    
        #search_results {
            max-height: 90vh;
            overflow-y:scroll;
            text-align:center;
        }
    </style>


        
    

</head>
<body>
    
    <?php include "../res/modules/navbar.php"; ?>

    
    <!-- main body -->
    <div class="container-fluid">
        <div class="row" id="search_header">
            <h1>Search For Connections</h1>
            <p>Enter a programming language or CS area of interest into the search bar</p>
        </div>
        <div class="row">
            <div class="container" style="text-align:center">
                <form method="post" action="">
                    <label>Search</label>
                    <input type="text" name="search">

                    <label for="account type">Account Type</label>
                    <select name="account_type" id="account_type">
                        <option value="Student">Student</option>
                        <option value="Mentor">Mentor</option>
                    </select>

                    <input type="submit" name="submit_search">

                </form>
            </div>
        </div>
            
    </div>
    



    <?php 
        
        if (isset($_POST["submit_search"])) {
            $userdb_connection = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
            if ($userdb_connection->connect_error) {
                die("Connection failed:" . $userdb->connect_error);
            }
            $str = $_POST["search"];
            if (empty($str)) {
                echo '<p style="text-align:center">Something must be entered in the search bar</p>';
            }
            else {
                $current_user_id = $_SESSION['current-user-id'];
            ?>
            <script>console.log("hello");</script>
            <?php
            
            $sql = "SELECT * FROM user_information WHERE interests LIKE '%{$str}%' AND user_id != '$current_user_id'";
            $result = $userdb_connection->query($sql);
            if ($result->num_rows > 0) {
                echo '<form method="post" id="search_results_form">';
                    echo '<div class="container">';
                        echo '<ul class="list-group" id="search_results">';
                        while ($row = $result->fetch_array()) {
                            echo '<li class="list-group-item">';
                                    echo '<div class="card">';
                                        echo '<div class="card-body">';
                                            echo '<h5 class="card-title">' . $row['first_name'] . ' ' . $row['last_name'] . '</h5>';
                                            echo '<p>' . $row['account_type'] . '</p>';
                                            if ($row['account_type'] == 'Student') {
                                                echo '<p>University: ';
                                            } else {
                                                echo '<p>Organization: ';
                                            }
                                            echo $row['univ_or_comp'] . '</p>';
                                            echo '<p>Interests: ' . $row['interests'] . '</p>';
                                            echo '<p>Email: ' . $row['email'] . '</p>';     
                                            echo '<button type="submit" class="btn btn-primary" id="' . $row['user_id'] . '">Connect with ' . $row['first_name'] . '</button>';
                                        echo '</div>';
                                    echo '</div>';
                                echo '</li>';
                        }
                        echo '</ul>';
                    echo '</div>';
                echo '</form>';
            }
            }
            
        }
    ?>



<?php include "../res/modules/footer.php"; ?>

<!-- doesn't work, from attempt to create new connection -->
<!--
<script type="text/javascript">
    $(document).on('click', 'button', function(e){
        e.preventDefault();
        var targetID = $(e.target).attr('id');
        console.log(targetID);
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.open("GET", "add_connection.php?q=" + targetID, true);
        xmlhttp.send();
        
    });
</script>
-->
<?php include '../res/modules/postscript.php'; ?>
</body>
</html>
