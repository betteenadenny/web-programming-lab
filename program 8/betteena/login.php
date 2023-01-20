<?php

session_start();

include 'con.php';

if(isset($_POST['submit'])){

	$username=$_POST['username'];
	$password=$_POST['password'];

	$q= "select * from loginform where username='$username'";
	$res=mysqli_query($con,$q);

	$row=mysqli_fetch_assoc($res);
	
	if(mysqli_num_rows($res)>0){
		if($row['password']==$password){
			$_SESSION['username']=$username;

			header("location:home.php");
			}
	}
	else{
		echo "Invalid username or password";
	}
}


?>

<html>
	<head></head>
	<body>
		<center>
		<h1>LOGIN PAGE</h1>
		<form action=" " method="post">
			<label>USERNAME</label>
			<input type = "text" name = "username" placeholder = "Enter your username"><br><br>
			<label>PASSWORD</label>
			<input type = "password" name= "password" placeholder = "Enter youe password"><br><br>
			<input type ='submit' name="submit" value = "Login">
		</form>
		</center>
	<body>
</html
