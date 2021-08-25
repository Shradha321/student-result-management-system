<?php 
include("dbcon.php");
$id=$_GET['id'];
$data="SELECT*FROM result WHERE id=$id";
$result=mysqli_query($con,$data);
$a=mysqli_fetch_array($result);
 ?>
 <!DOCTYPE html>
<html>
<head>
	<title>FORM</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
	<div class="container">
    <center><h1 class="text-warning bg-dark">FORM</h1></center>
	<form method="post" action="result_update.php">
    <input type="hidden" name="id" value="<?php echo$a['id']?>">
<div class="form-floating mb-3">
  <input type="text" class="form-control" name="sub1" placeholder="Subject1" required value="<?php echo$a['sub1']?>">
  <label for="floatingInput">Subject1</label>
</div>
<div class="form-floating mb-3">
  <input type="text" class="form-control" name="sub2" placeholder="Subject2" required value="<?php echo$a['sub2']?>">
  <label for="floatingInput">Subject2</label>
</div>
<div class="form-floating mb-3">
  <input type="text" class="form-control" name="sub3" placeholder="Subject3" required value="<?php echo $a['sub3']?>">
  <label for="floatingInput">Subject3</label>
</div>
<div class="form-floating mb-3">
  <input type="text" class="form-control" name="sub4" placeholder="Subject3" required value="<?php echo $a['sub4']?>">
  <label for="floatingInput">Subject3</label>
</div>
<div class="form-floating mb-3">
  <input type="text" class="form-control" name="sub5" placeholder="Subject5" required value="<?php echo$a['sub5']?>">
  <label for="floatingInput">Subject5</label>
</div>
<div class="form-floating mb-3">
  <input type="text" class="form-control" name="user_id" placeholder="user_id" required value="<?php echo$a['user_id']?>">
  <label for="floatingInput">User_id</label>
</div>
<button type="submit" name="submit" value="submit" class="btn btn-info">Submit</button> 
</form>
</div>
</body>
</html>