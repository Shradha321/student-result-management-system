<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
	<br><br><br><br><br><br>
	<div class="container">
		<center><div class="col-md-6">
    <center><h1 class="text-warning bg-dark">LOGIN FORM</h1></center>
	<form method="post" action="login.php">
	<div class="form-floating mb-3">
  <input type="text" class="form-control" name="name" placeholder="Name" required>
  <label for="floatingInput">Name</label>
</div>
<div class="form-floating mb-3">
  <input type="text" class="form-control" name="password" placeholder="Password" required>
  <label for="floatingInput">Password</label>
</div>
<button type="submit" name="submit" value="submit" class="btn btn-info">Submit</button>
</form>
</div>
</center>
</div>
</body>
</html>