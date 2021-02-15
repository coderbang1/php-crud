<?php 
$con=mysqli_connect('localhost','root','12345','mange');
$id= $_GET['id'];
$res=mysqli_query($con, "delete from employee where id='$id'");
header("location:index.php");
die();

?>