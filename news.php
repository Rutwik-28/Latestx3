
 <?php
    include('connection.inc.php');
     $query1 =mysqli_query($conn,"select * from news order by id desc limit 1,2 ");
      while($row=mysqli_fetch_array($query1)){
         $category=$row['category'];
         $date=$row['date'];
         $title=$row['title'];
        //  $thumbnail=$row['thumbnail'];

      

    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Welcome | Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <style>
              
.card-img-top {
  width: 100%;
  height: 15vw;
  object-fit: cover;
}

        </style>
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <script src="script.js"></script>
    <!-- <script src="jquery.validate.min.js"></script> -->
</head>

<body>

    <section>
        <br>
        <br>
        <br>
        <br>
        <br>
    </section>

    <div class="card-group">
        <div class="card">
          <img class="card-img-top" src="img/logo1.png" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title"><?php eho $row'[title]' ?></h5>
            <p class="card-text"><?php eho $row'[]' ?></p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="img/logo1.png" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="img/logo1.png" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>


</body>
<div class="copyright">
    <p>©2020 | All right reserved by RAKA Team</p>

</div>
<div>
    <button href="Admin-Page-master\admin\login.php">admin login</button>
</div>
</body>

</html>