<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>

	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
</head>
<body>

<?php  

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	$connection = mysqli_connect('localhost', 'root', '','loginapp');
	if ($connection) {
		echo "We are connected";
	}else {
		die("Database connection fail");
	}
	
	$query = "INSERT INTO users (username,password)";
	$query .= "VALUES ('$username', '$password')";

	$result = mysqli_query($connection, $query);

	if (!$result) {
		die('Query FAILED' . mysqli_error());
	}



	// if ($username && $password) {
	// 	echo "Hello " . $username . " your password is " . $password;
	// }else
	// 	echo "This field can't be blank";
	
}


?>


	
<div class="container">	
	<div class="col-sm-6">
		<form action="login_create.php" method="post">
			<div class="form-group">
				<label for="username">Username</label>
				<input type="text" name="username" class="form-control">
			</div>
			<div class="form-group">
				<label for="password">Passsword</label>
				<input type="password" name ="password" class="form-control">
			</div>

			<input class="btn btn-primary" type="submit" name="submit" value="Submit">

		</form>	

	</div>

</div>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	
</body>
</html>
