<?php
	require 'config.php';
		$sql="SELECT * FROM report WHERE email='hritikdubey28092000@gmail.com'";
		$result=mysqli_query($conn,$sql);
		$row=mysqli_fetch_array($result);

		$rname=$row['name'];
		$remail=$row['email'];
		$rdayvisited=$row['dayvisited'];
		$rlist=$row['list'];
		$rSQL1=$row['SQL1'];
		$rWeak=$row['Weak'];
		$rCross1=$row['Cross1'];
		$rcomments=$row['comments'];
		
?>


<html>
	<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">	
	<style type="text/css">
		*{
			margin:0 20px;
		}
		.alert{
			border-radius:10px;
			margin: 20px auto;
			text-align:center;
			height:200vh;
		}
		body{
			background:#FA7072;
		}
		th, td {
  padding-top: 10px;
  padding-bottom: 20px;
  padding-left: 30px;
  padding-right: 40px;
}
table {
  border-spacing: 30px;
  tr:nth-child(even) {
  background-color: #FA7072;
  border: 1px solid red;
}
}

		</style>
	</head>
	<body>
<div class="alert alert-danger" >
<h1>Vunerability Assessment & Penetration Testing Report</h1>
<table width="900px";  border-spacing= "30px"; border=" 1px solid red">

				<tr>
					<th> Name : </th>
					<td><?= $rname; ?></td>
				</tr>
				<tr>
					<th>Email : </th>
					<td><?= $remail; ?></td>
				</tr>
				<br><br>
				<tr>
					<th>Date of Testing : </th>
					<td><?= $rdayvisited; ?></td>
				</tr>
				<tr>
					<th>List of attacks performed : </th>
					<td> <?= $rlist; ?>  </td>
				</tr>
				<tr>
					<th colspan="2">Vulnerability Scans Result </th>
				</tr>
				<tr>
				
				    <th>SQL Injection: </th>
					<td> <?= $rSQL1; ?>  </td>
				</tr>
				<tr>
				    <th>Weak credentials/Brute Force: </th>
					<td> <?= $rWeak; ?>  </td>
				</tr>
				    <th>Cross Site Scripting: </th>
					<td> <?= $rCross1; ?>  </td>
				</tr>
				<tr>
				    <th>Comments for improving the website: </th>
					<td> <?= $rcomments; ?>  </td>
				</tr>
				
			</table>

</div>
</body>
</html>