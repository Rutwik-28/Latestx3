<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['user'];
    $DOB = $_POST['Date'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $number= $_POST['number'];
    $email = $_POST['email'];
    $skill1 = $_POST['skill'];
    $username1 = $_POST['uname'];
    $password2 = $_POST['pass'];
  
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
     VALUES ('$name', '$DOB', '$age', '$address', '$number', '$email', '$skill1', '$username1', '$password2');";
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

    <!-- <link rel="stylesheet" href="css/registration.css"> -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/registration.css">
    
    <style>
    * {
    margin: 0;
    padding: 0;
}
    .regform {
    margin-top: 10px;
    width: 800px;
    background-color: rgba(0, 181, 204, 1);
    margin: auto;
    color: #FFFFFF;
    padding: 10px 20px 10px 0px;
    text-align: center;
    border-radius: 15px 15px 15px 15px;
}
body {

    
    margin-top: 40px;
    background-position: center;
    background-size: cover;
    font-family: sans-serif;
    }

    .main {
        background-color: rgba(12, 117, 136, 0.6);
        width: 800px;
        margin: auto;
        border-radius: 15px 15px 15px 15px;
    }

    button {
    background-color: #3BAF9F;
    display: block;
    margin: 20px 20px 20px 20px;
    text-align: right;
    border-radius: 12px;
    border: 2px solid #366473;
    padding: 14px 355px;
    outline: none;
    color: white;
    cursor: pointer;
    transition: 0.25px;
}
.radio {
    display: inline-block;
    padding-right: 70px;
    font-size: 25px;
    margin-left: 25px;
    margin-top: 15px;
    color: white;
}

.radio input {
    width: 20px;
    height: 20px;
    border-radius: 50%;
    cursor: pointer;
    outline: none;
}

    button:hover {
        background-color: #5390F5;
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

    <div class="regform">
        <h1>Registration Form</h1>
        <img src="img/OIP (1).jpg" alt="user" class="avatar">
    </div>

    <div class="main bg-dark" >
      
             <h2>Registration Form</h2>


            <form action=""class="form-group " name="myForm" method="post">


                <div class="form-group " id="name">
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
                        <input type="text" minlength=10 maxlength=10 name="number" class="form-control" placeholder="Enter Number" required>
                        <b><span class="formerror"></span></b>
                    </div>

                    <div class="form-group" id="email">
                        <label>Email-ID</label>
                        <input type="Email" name="email" class="form-control" placeholder="Example abc@gmail.com"
                            required>
                        <b><span class="formerror"></span></b>
                    </div>

                    <div class="form-group" id="skill">

                        

                        <h2 class="name">Select Type</h2>
                            <select class="form-control" name="skill" required id="skill">
                                <option disabled="disabled" selected="selected">--Choose option--</option>
                                <option>Batsman</option>
                                <option>Bowler</option>
                                <option>All-Rounder</option>
                            </select>


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
                         <button type="submit"  class="but" name="submit" value="Submit">Register</button>
                     </div> 
                </div>
            </form>
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