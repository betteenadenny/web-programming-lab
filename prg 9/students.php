<?php
include("connection.php");
$r=mysqli_query($conn,"SELECT * FROM student");
?>
<html>
<body>
<table border="2">
	<tr>
		<th>KTU ID</th>
		<th>NAME</th>
		<th>series 1</th>
		<th>series 2</th>
		<th>assignment 1</th>
		<th>assignment 2</th>
		<th>attendance</th>
	</tr>
<?php	
while($c=mysqli_fetch_assoc($r))
{
	?><tr>
		<td><?php echo($c['ktu id']);?></td>
		<td><?php echo($c['name']);?></td>
		<td><?php echo($c['series 1']);?></td>
		<td><?php echo($c['series 2']);?></td>
		<td><?php echo($c['assi1']);?></td>
		<td><?php echo($c['assi2']);?></td>
		<td><?php echo($c['attendance']);?></td>
		<br>
<?php
}
?>
</table>
</body>
</html>
