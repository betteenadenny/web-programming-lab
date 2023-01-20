<?php

session_start();

echo "Hi ".$_SESSION['username'];

?>

<html>
	
	<form action="logout.php">
	<input type="submit" value="logout">
	</form>
	
</html>
