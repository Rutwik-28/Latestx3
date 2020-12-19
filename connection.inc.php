<?php
// session_start();
// $con=mysqli_connect("localhost","root","","cricket_1");
// define('SERVER_PATH',$_SERVER['DOCUMENT_ROOT'].'/php/ecom/');
// define('SITE_PATH','http://127.0.0.1/php/ecom/');

// define('PRODUCT_IMAGE_SERVER_PATH',SERVER_PATH.'media/product/');
// define('PRODUCT_IMAGE_SITE_PATH',SITE_PATH.'media/product/');
// if($con){
//     echo "Connection hotay";
// }
$servername = "localhost";
      $username = "root";
      $password = "";
      $database = "cricket_1";

      // Create a connection
      $conn = mysqli_connect($servername, $username, $password, $database);
      // Die if connection was not successful
      if (!$conn){
          die("Sorry we failed to connect: ". mysqli_connect_error());
      }else{
          echo"Connection Success";
      }
?>