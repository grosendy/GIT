<?php 

if (isset($_POST['submit'])) {

$name = array ("Edwin", "Student", "Peter", "Gabriel", "Maria");
$minimun = 5;
$maximun = 10;
$username = $_POST['username'];
$password = $_POST['password'];

	if (strlen($username) < $minimun) {
		echo "Username has to be longer than five";
	}

	if (strlen($username) > $maximun) {
		echo "Username can't be longer than ten";
	}

	if (!in_array($username, $name)) {
		
		echo "Sorry you are not allowed";

	}else {
		echo "Welcome";

	}

// echo "Welcome " . $username;

}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<form action="form.php" method="post">
	
	<input type="text" placeholder="Enter username" name="username">
	<input type="password" placeholder="Enter password" name="password"> 
	<br>
	<input type="submit" name="submit">
 
</form>
	
</body>
</html>