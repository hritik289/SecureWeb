<?php
$c = $_POST['Name'];
$a = $_POST['email'];
$b = $_POST['Password'];
$conn = mysqli_connect("localhost","root", "", "project");
if($conn){
	echo "<br>";
}
else{
	die("Connection Unsuccessful");
}
$q1 = "Select * from user where email = '$a'";
$check = mysqli_query($conn,$q1);
if(mysqli_num_rows($check)>0){
	echo "<html>";
	echo "<body>";
	echo '<div class="alert alert-danger" >';
	echo "<h2>";
	echo "An account with this email already exists.";
	echo "</h2>";
	echo '<h5>Please <a href="login.php">Login</a> or go back to <a href="signup.html">Sign up</a></h5>';
	echo"</div>";
	echo "</body>";
	echo "</html>";
}
else{
	echo "<html>";
	echo "<body>";
	echo '<div class="alert alert-success" >';
	echo "<h2>";
	echo "A new account has been created successfully.";
	echo "</h2>";
	echo '<h5><a href="login.php">Please click here to proceed</a></h5>';
	echo"</div>";
	echo "</body>";
	echo "</html>";

$query = $conn->prepare("INSERT into user(username,email,password) values(?,?,?)");
$query->bind_param("sss",$c,$a,$b);
$query->execute();
}
mysqli_close($conn);
?>

<html>
	<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
		<style type="text/css">
		*{
			margin:0 20px;
		}
		.alert{
			border-radius:10px;
			margin: 20px auto;
			text-align:center;
			height:15vh;
		}
		body{
			background:#FA7072;
		}
		</style>
	</head>
	<body>
	</body>
</html>
