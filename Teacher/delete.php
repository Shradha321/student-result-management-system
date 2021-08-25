<?php
include("dbcon.php");
echo$id=$_GET['id'];
$data="DELETE FROM user where id=$id";
$result=mysqli_query($con,$data);
if($result)
{
	header("location:teacher_dashboard.php");
}

  ?>