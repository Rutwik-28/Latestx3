<?php
include'config.php';

$sql = "SELECT * FROM `player_info` WHERE p_id='5'";
$result = mysqli_query($conn, $sql);
($row=mysqli_fetch_assoc($result));

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    
    <link rel ="stylesheet" href="css/profile.css">
    <link rel ="stylesheet" href="text/css/style.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>




    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <style>
        body{
            background-color: grey;
        }
    </style>



</head>
<body>
        <!----------- NAVBAR DIV -------------->

        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="homepage.php"><img src="img/cricketlogo.png" alt=""></a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse-man">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">LOGIN</a></li>
                    <li><a href="#">ABOUT US</a></li>
                    <li><a href="#">SEARCH</a></li>
                    <li><a href="#">DISPLAY</a></li>
                   
                </ul>
            </div>
        </div>
    </nav>
    <!-- PROFILE PAGE -->
    <div class="wrapper">
        <div class="left">
            <img src="img/default.png" alt="user" width="200">
            <h4><b><?php echo $row['p_name']?></b></h4>
            <p><h5><b><?php echo $row['skill']?></b></h5></p>
        </div>
        <div class="right">

            <div class="info">
                <h4><b><u>CONTACT INFO:</u></b></h4>
                <div class="info_data">
                    <div class="data">
                        <h4><b>Email id</b></h4>
                        <p><b><?php echo $row['email_id']?></b></p>
                    </div>
                    <div class="data">
                        <h4><b>Phone_no</b></h4>
                        <p><b><?php echo $row['ph_no']?></b></p>
                    </div>
                </div>
            </div>

            <div class="projects">
                <h4><b><u>DETAILS:</u></b></h4>
                <div class="projects_data">
                    <div class="data">
                        <h4><b>Username</b></h4>
                        <p><b><?php echo $row['username']?></b></p>
                    </div>
                    <div class="data">
                        <h4><?php echo $row['address']?></h4>
                        <p><b>Mumbai</b></p>
                    </div>
                    <div class="data">
                        <h4><b>Skills</b></h4>
                        <p><b><?php echo $row['skill']?></b></p>
                    </div>
                </div>
            </div>

            <div class="social_media">
                <h4><b><u>ADDITIONAL:</u></b></h4>
                <p><b>-----</b></p>
            </div>

            <div class="container">
                <button class="button"><b>Update</b></button>
            </div>


        </div>

    </div>
</body>
</html>