<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<center><h1 class="text-warning bg-dark">REGISTRATION FORM</h1></center>
<form method="post" action="user_insert.php">
	<div class="form-floating mb-3">
  <input type="text" class="form-control" name="name" placeholder=" User Name" required>
  <label for="floatingInput">User Name</label>
	<br>
	<div class="form-floating mb-3">
  <input type="text" class="form-control" name="email" placeholder="UserEmail" required>
  <label for="floatingInput">User Email</label>
  <br>
	<div class="form-floating mb-3">
  <input type="text" class="form-control" name="phone" placeholder="Phone" required>
  <label for="floatingInput">Phone</label>
  <br>
	<div class="form-floating mb-3">
  <input type="text" class="form-control" name="address" placeholder="Address" required>
  <label for="floatingInput">Address</label>
  <br>
	User course:
	<select name="course" class="form-select">
			<option value="select">select</option>
			<option value="B.TECH">B.TECH</option>
			<option value="M.TECH">M.TECH</option>
			<option value="MBA">MBA</option>
			<option value="BBA">BBA</option>
	</select>
	<br>
	User dept:
	<select name="dept" class="form-select">
			<option value="select">select</option>
			<option value="CS">CS</option>
			<option value="IT">IT</option>
			<option value="EC">EC</option>
			<option value="ME">ME</option>
	</select>
	<br>
	User role:
	<select name="role" class="form-select">
			<option value="select">select</option>
			<option value="Teacher">Teacher</option>
			<option value="Student">Student</option>

	</select>
	<br><br>
	<div class="form-floating mb-3">
  <input type="text" class="form-control" name="password" placeholder="Password" required>
  <label for="floatingInput">Password</label>
  <br>
	<button type="submit" name="submit" value="submit" class="btn btn-info">Submit</button>
</form>
</div>
</body>
</html>