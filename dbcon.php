<?php
$server='localhost';
$user='root';
$password='';
$db='users';
$con=mysqli_connect($server,$user,$password,$db);
if($con){
  ?>
  <script>
    alert(" Database connected successfully");

  </script>
  <?php
}else{
  ?><script>
    alert("Error");
  </script>
  <?php
}


 ?>
