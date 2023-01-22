<html>
<body>
<center>
	<form method="post" action="score.php">
	<label>KTU ID:</label>
	<input type="text" name="id"><br><br>
	<label>NAME:</label>
	<input type="text" name="name"><br><br>
	<label>SERIES 1:</label>
	<input type="text" name="s1"><br><br>
	<label>SERIES 2</label>
	<input type="text" name="s2"><br><br>
	<label>ASSIGNMENT 1:</label>
	<input type="text" name="a1"><br><br>
	<label>ASSIGNMENT 2:</label>
	<input type="text" name="a2"><br><br>
	<label>ATTENDANCE:</label>
	<input type="text" name="att"><br><br>
	<input type="submit" value="add"name="s">
	</form>
</center>
</body>
</html>
<?php
include("connection.php");
if(isset($_POST['s']))
{
$i=$_POST['id'];
$n=$_POST['name'];
$so=$_POST['s1'];
$ss=$_POST['s2'];
$ao=$_POST['a1'];
$as=$_POST['a2'];
$att=$_POST['att'];
$k=mysqli_query($conn,"INSERT INTO `student`(`ktu id`, `name`, `series 1`, `series 2`, `assi1`, `assi2`, `attendance`) VALUES ('$i','$n','$so','$ss','$ao','$as','$att')");
if($k)
{
echo("inserted successfully");
}
}



?>