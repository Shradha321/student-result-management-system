<?php 
include("usercon.php");
echo$a=$_POST['name'];
echo$b=$_POST['email'];
echo$c=$_POST['phone'];
echo$d=$_POST['address'];
echo$e=$_POST['course'];
echo$f=$_POST['dept'];
echo$g=$_POST['role'];
echo$h=$_POST['password'];
$data="INSERT INTO user(name,email,phone,address,course,dept,role,password)value('$a','$b','$c','$d','$e','$f','$g','$h')";
$result=mysqli_query($con,$data);
if ($result) 
{
   header('location:index.php');
}


 ?>