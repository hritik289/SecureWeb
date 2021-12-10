<?php
	require 'config.php';
	if(isset($_GET['id'])){
		$id=$_GET['id'];
		$sql="SELECT * FROM product WHERE product_id='$id'";
		$result=mysqli_query($conn,$sql);
		$row=mysqli_fetch_array($result);

		$pname=$row['product_name'];
		$pprice=$row['product_price'];
		$pimage=$row['product_image'];
		$pdetail=$row['product_details'];
	}
	else{
		echo 'No product found!';
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="author" content="Hritik">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width-device-width, initial-scale=1, shrink-to-fit=no">
	<title>Complete Your Order</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="#">SecureWeb</a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="home.php">Home</a>
      </li>

    </ul>
  </div>
</nav>
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-10 mb-5">
			<h2 class="text-center p-2 text-primary">Fill the user requirement to complete your order</h2>
			<h3>Package Details : </h3>
			<table class="table table-bordered" width="500px">
				<tr>
					<th>Package Name : </th>
					<td><?= $pname; ?></td>
					<td rowspan="4" class="text-center"><img src="<?= $pimage; ?>" width="200"></td>
				</tr>
				<tr>
					<th>Package Price : </th>
					<td>Rs. <?= number_format($pprice); ?>/-</td>
				</tr>
				<tr>
					<th>Package Details : </th>
					<td> <?= $pdetail; ?>  </td>
				</tr>
				<tr>
					
				</tr>
			</table>
			<h4>Enter your Requirement for Analysis </h4>
			<form action="data.php" method="post" accept-charset="UTF-8">
				<input type="hidden" name="product_name" value="<?= $pname; ?>">
				<input type="hidden" name="product_price" value="<?= $pprice; ?>">
				<div class="form-group">
					<input type="text" name="name" class="form-control" placeholder="Enter your name" required>
				</div>
				<div class="form-group">
					<input type="text" name="email" class="form-control" placeholder="Enter your Address" required>
				</div>
				<div class="form-group">
					<input type="tel" name="phone" class="form-control" placeholder="Enter your phone number" required>
				</div>
				<div class="form-group">
					<input type="text" name="url" class="form-control" placeholder="Enter your Website URL" required>
				</div>
				<div class="form-group">
					<input type="text" name="ip" class="form-control" placeholder="Enter your IP Address" required>
				</div>
				<div class="form-group">
					<input type="text" name="info" class="form-control" placeholder="Describe your Website" required>
				</div>
				<div class="form-group">
					<input type="text" name="requirement" class="form-control" placeholder="Enter your user requirement" required>
				</div>
				<div class="form-group">
			<input type="submit" name="submit" class="btn btn-danger btn-lg" value="Submit"> 
				</div>
			</form>
			
			
		</form>
		</div>
	</div>
</div>
</body>
</html>
