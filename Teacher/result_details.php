<?php
include("header.php");
include("dbcon.php");
?>
<table class="table table-bordered">
	<tr>
		<th colspan="8" class="text-center text-warning bg-dark">Result</th>
	</tr>
	<tr>
		<th>ID</th>
		<th>SUBJECT1</th>
		<th>SUBJECT2</th>
		<th>SUBJECT3</th>
		<th>SUBJECT4</th>
		<th>SUBJECT5</th>
		<th>USER_ID</th>
		<th>ACTION</th>
	</tr>
	<?php
	$data="SELECT*FROM result order by id desc";
	$result=mysqli_query($con,$data); 
	while ($a= mysqli_fetch_array($result))
	 {
	 ?>
	<tr>
		<td><?php  echo $a['id']; ?></td>
		<td><?php echo $a['sub1'];  ?></td>
		<td><?php echo $a['sub2']; ?></td>
		<td><?php echo $a['sub3']; ?></td>
		<td><?php echo $a['sub4']; ?></td>
		<td><?php echo $a['sub5']; ?></td>
		<td><?php echo $a['user_id']; ?></td>
		<td>
		<a href="result_edit.php?id=<?php echo $a['id']?>" class="btn btn-success">Edit</a>
		<a href="result_delete.php?id=<?php echo$a['id']?>" class="btn btn-danger">Delete</a>
		</td>
	</tr>
	<?php 
	}
 	?>
</table>









<?php include("footer.php");  ?>