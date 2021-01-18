<?php
include'config.php';
$msg='';
// if(isset($_POST['submit'])){
// 	$username=($con,$_POST['username']);
// 	$password=($con,$_POST['password']);
// 	$sql="select * from player_info where username='$username' and password='$password'";
// 	$res=mysqli_query($con,$sql);
// 	$count=mysqli_num_rows($res);
// 	if($count>0){
// 		$_SESSION['PLAYER_LOGIN']='yes';
// 		$_SESSION['PLAYER_USERNAME']=$username;
// 		header('location:profile_page.php');
// 		die();
// 	}else{
// 		$msg="Please enter correct login details";	
// 	}
	
// }

?>

<!DOCTYPE html>
<html>

<head>
    <title>Login Page</title>


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="ionicons/css/ionicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">



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
                    <li><a href="login.pphp">LOGIN</a></li>
                    <li><a href="#">SEARCH</a></li>
                    <li><a href="#">DISPLAY</a></li>
               
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-lg-6">
              

                <form action="" method="post">

                    <h2>Login</h2>

                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="username" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <input type="Password" name="password" class="form-control">
                    </div>

                    <button type="submit" name="submit" class="btn btn-primary my-nav"><a href="profile_page.php"> Login </button>
                    <p>If new user?<button class="btn btn-primary my-nav"><a href="registration.php"> Register
                            </a></button></p>


                </form>

            </div>
        </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"
        integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>

    


</body>





</html>