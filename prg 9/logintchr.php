<html>
	<body>
		<center>
		<form method="post" action="logintchr.php">
			<label>USERNAME</label>
			<input type="text" name="user"><br><br>
			<label>PASWWORD</label>
			<input type="password" name="pword"><br><br>
			<input type="submit" value="login" name="a">
		</form>
	</center>
	</body>
<html>
<?php
include("connection.php");
SESSION_start();
if(isset($_POST['a']))
{

	$c=$_POST['user'];
	$_SESSION['user']=$c;
	$b=$_POST['pword'];
	$q="SELECT * FROM login WHERE username='$c' and password='$b'";
	$res=mysqli_query($conn,$q);
	//$row=mysqli_fetch_assoc($res);
	if(mysqli_num_rows($res>0))
	{
		header("Location:home.php");
	}
	else
	{
		echo ("login failed");
	}
}
?>