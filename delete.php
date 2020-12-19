<?php
 include('connection.inc.php');
 $id=$_GET['del'];
 $query=mysqli_query($conn,"delete  from news where id='$id'");
  if ($query) {
  	 echo "<script> alert('category deleted !')</script> ";
  	//    echo "<script >window.location='http://localhost/news/category.php' ;</script>";

  }else{
  	echo "Please Try again";
  }


?>

