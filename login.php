<?php
session_start();
include("usercon.php");
if (isset($_POST['submit']))
 {
  echo $name=$_POST['name'];
  echo  $pass=$_POST['password'];
   $a = "SELECT * FROM user WHERE name='$name' && password='$pass'";
  $query = mysqli_query($con,$a);

  $total = mysqli_num_rows($query);
//  echo $total;
  $data = mysqli_fetch_array($query);

//echo $data['role'];
  if ($total==1)
   {

  $role = $data['role'];
  if ($role=='Teacher')
  {
    $_SESSION['id']= $data['id'];
      header('location:Teacher/teacher_dashboard.php'); 
  }
  elseif ($role == 'Student')
   {
    $_SESSION['id']= $data['id'];
     header('location:Student/student_dashboard.php'); 
  }
 else
 {
  
  header('location:loginform.php');
 }
  
}
}

?>

