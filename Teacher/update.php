<?php 
include("dbcon.php");
$id=$_POST['id'];
$a=$_POST['name'];
$b=$_POST['email'];
$c=$_POST['phone'];
$d=$_POST['address'];
$e=$_POST['course'];
$f=$_POST['dept'];
$g=$_POST['role'];
$h=$_POST['password'];
$data="UPDATE user SET name='$a',email='$b',phone='$c',address='$d',course='$e',dept='$f',role='$g',password='$h' WHERE id=$id";
$result=mysqli_query($con,$data);
if ($result)
 {
	header("location:teacher_dashboard.php");
}


  ?>