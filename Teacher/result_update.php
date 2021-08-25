<?php 
include("dbcon.php");
$id=$_POST['id'];
$a=$_POST['sub1'];
$b=$_POST['sub2'];
$c=$_POST['sub3'];
$d=$_POST['sub4'];
$e=$_POST['sub5'];
$f=$_POST['user_id'];
$data="UPDATE result SET sub1='$a',sub2='$b',sub3='$c',sub4='$d',sub5='$e',user_id='$f' WHERE id=$id";
$result=mysqli_query($con,$data);
if ($result)
 {
	header("location:result_details.php");
}


  ?>