<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['user'];
    $DOB = $_POST['Date'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $number= $_POST['number'];
    $email = $_POST['email'];
    $skill = $_POST['skill'];
    $username1 = $_POST['username'];
    $password2 = $_POST['password'];
  
  // Connecting to the Database
  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "cricket_1";

  // Create a connection
  $conn = mysqli_connect($servername, $username, $password, $database);
  // Die if connection was not successful
  if (!$conn){
      die("Sorry we failed to connect: ". mysqli_connect_error());
  }
  else{ 
    // Submit these to a database
    // Sql query to be executed 
    
     $sql = "INSERT INTO `player_info` ( `p_name`, `DOB`, `age`, `address`, `ph_no`, `email_id`, `skill`, `username`, `password`)
     VALUES ('$name', '$DOB', '$age', '$address', '$number', '$email', '$skill', '$username1', '$password2');";
    $result = mysqli_query($conn, $sql);

    if($result){
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Success!</strong> Your entry has been submitted successfully!
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
      </button>
    </div>';
    }
    else{
        // echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>Error!</strong> We are facing some technical issue and your entry ws not submitted successfully! We regret the inconvinience caused!
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
      </button>
    </div>';
    }

  }

}


?>
<!DOCTYPE html>
<html>

<head>
    <title>Register!</title>


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
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
                    <li><a href="#">LOGIN</a></li>
                    <li><a href="#">ABOUT US</a></li>
                    <li><a href="#">SEARCH</a></li>
                    <li><a href="#">DISPLAY</a></li>
                    <!--mahit nahi ata kahi hyabadal-->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                            aria-expanded="false"><i class="glyphicon glyphicon-cog"></i></a>
                        <ul class="dropdown-menu" role="menu">
                            <li class="divider"></li>
                            <li><a href="../Profile/profile.php"><i class="glyphicon glyphicon-user"></i>&nbsp;
                                    Profile</a></li>
                            <li class="divider"></li>
                            <li><a href="../Profile/logout.php"><i class="glyphicon glyphicon-log-out"></i>&nbsp;
                                    Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT1RzLoyCGcOuJP2l82TUIVy1tfFl6Z7Epo6A&usqp=CAU" alt="Smiley face" height="500" width="300" style="float:right"> -->


    <div class="container">
        <div class="row">
            <div class=" col-lg-6">
                
                <h2>Registration Form</h2>


                <form action="" name="myForm"  method="post">
                    <br>
                    <br>
                    <br>

                    <div class="form-group" id="user">
                        <label>Player Name</label>
                        <input type="text" name="user" class="form-control" placeholder="Enter Name" required>
                        <b><span class="formerror"></span></b>

                    </div>

                    <div class="form-group" id="Date">
                        <label>Date of birth</label>
                        <input type="date" name="Date" class="form-control" placeholder="Select Date Of Birth" required>
                        <b><span class="formerror"></span></b>
                    </div>

                    <div class="form-group" id="age">
                        <label>Age</label>
                        <input type="Age" name="age" class="form-control" placeholder="Enter Age" required>
                        <b><span class="formerror"></span></b>
                    </div>

                    <div class="form-group" id="address">
                        <label>Address</label>
                        <input type="Address" name="address" class="form-control" placeholder="Enter Address" required>
                        <b><span class="formerror"></span></b>
                    </div>

                    <div class="form-group" id="number">
                        <label>Phone Number</label>
                        <input type="text" min="1111111111" max="9999999999" name="number" class="form-control" placeholder="Enter Number" required>
                        <b><span class="formerror"></span></b>
                    </div>

                    <div class="form-group" id="email">
                        <label>Email-ID</label>
                        <input type="Email" name="email" class="form-control" placeholder="Example abc@gmail.com"
                            required>
                        <b><span class="formerror"></span></b>
                    </div>

                    <div class="form-group" id="skill">

                        <p>Please select your skill:</p>
                        <input type="radio" id="batsman" name="skill" value="batsman" class="form-control" required>
                        <b><span class="formerror"></span></b>
                        <label for="batsman">batsman</label><br>
                        <input type="radio" id="bowler" name="skill" value="bowler" class="form-control" required>
                        <b><span class="formerror"></span></b>
                        <label for="Bowler">bowler</label><br>
                        <input type="radio" id="allrounder" name="skill" value="All-Rounder" class="form-control"
                            required>
                        <b><span class="formerror"></span></b>
                        <label for="All-Rounder">All-Rounder</label>


                    </div>

                    <div class="form-group" id="username">
                        <label>Username</label>
                        <input type="Username" name="uname" class="form-control" placeholder="Enter Username"
                            required>
                        <b><span class="formerror"></span></b>

                    </div>

                    <div class="form-group" id="password">
                        <label>Password</label>
                        <input  type="Password" minlength=6 name="pass" class="form-control" placeholder="Enter Password"
                            required>
                        <b><span class="formerror"></span></b>
                    </div>

                    <div>
                         <input type="submit" class="but" name="submit" value="Submit"> 
                     </div> 
                    

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



    <div class="copyright">
        <p>©2020 | All right reserved by RAKA Team</p>

    </div>


</body>





</html>