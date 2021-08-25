<?php 
include("dbcon.php");
$a=$_POST['sub1'];
$b=$_POST['sub2'];
$c=$_POST['sub3'];
$d=$_POST['sub4'];
$e=$_POST['sub5'];
$f=$_POST['user_id'];
$data="INSERT INTO result(sub1,sub2,sub3,sub4,sub5,user_id)value('$a','$b','$c','$d','$e','$f')";
$result=mysqli_query($con,$data);
header("location:result.php");
 ?>