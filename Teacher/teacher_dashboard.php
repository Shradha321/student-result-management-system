<?php
include("header.php");
include("dbcon.php");
?>
<table class="table table-bordered">
	<tr>
		<th colspan="10" class="text-center text-warning bg-dark">Display User Data</th>
	</tr>
	<tr>
		<th>ID</th>
		<th>NAME</th>
		<th>EMAIL</th>
		<th>PHONE</th>
		<th>ADDRESS</th>
		<th>COURSE</th>
		<th>DEPARTMENT</th>
		<th>ROLE</th>
		<th>PASSWORD</th>
		<th>action</th>
	</tr>
	<?php
	$data="SELECT*FROM user where role='Student'";
	$result=mysqli_query($con,$data); 
	while ($a= mysqli_fetch_array($result))
	 {
	 ?>
	<tr>
		<td><?php  echo $a['id']; ?></td>
		<td><?php echo $a['name'];  ?></td>
		<td><?php echo $a['email']; ?></td>
		<td><?php echo $a['phone']; ?></td>
		<td><?php echo $a['address']; ?></td>
		<td><?php echo $a['course']; ?></td>
		<td><?php echo $a['dept']; ?></td>
		<td><?php echo $a['role']; ?></td>
		<td><?php echo $a['password']; ?></td>
		<td>
		<a href="edit.php?id=<?php echo $a['id']?>" class="btn btn-success">Edit</a>
		<a href="delete.php?id=<?php echo$a['id']?>" class="btn btn-danger">Delete</a>
		</td>
	</tr>
	<?php 
	}
 	?>
</table>









<?php include("footer.php");  ?>