<?php
$a = $_POST['name'];
$b = $_POST['email'];
$c = $_POST['dayvisited'];
$d = $_POST['list'];
$e = $_POST['SQL1'];
$f = $_POST['Weak'];
$g = $_POST['Cross1'];
$h = $_POST['comments'];

$conn = mysqli_connect("localhost","root", "", "project");
if($conn){
	echo "<br>";
}
else{
	die("Connection Unsuccessful");
}
$q1 = "Select * from report where email = '$b'";
$check = mysqli_query($conn,$q1);
if(mysqli_num_rows($check)>0){
	echo "<html>";
	echo "<body>";
	echo '<div class="alert alert-danger" >';
	echo "<h2>";
	echo "You have already submitted the report for this client";
	echo "</h2>";
	echo '<h5>Please go back to <a href="home.php">Home</a></h5>';
	echo"</div>";
	echo "</body>";
	echo "</html>";
}
else{
	echo "<html>";
	echo "<body>";
	echo '<div class="alert alert-success" >';
	echo "<h2>";
	echo "The Report is generated and Sent to Client";
	echo "</h2>";
	echo '<h5><a href="home.php">Please click here to proceed</a></h5>';
	echo"</div>";
	echo "</body>";
	echo "</html>";

$query = $conn->prepare("INSERT into report(name,email,dayvisited,list,SQL1,Weak,Cross1,comments) values(?,?,?,?,?,?,?,?)");
$query->bind_param("ssssssss",$a,$b,$c,$d,$e,$f,$g,$h);
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
