<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="author" content="Hritik">
  <meta http-equiv="X-UA-Compatible" content="IE-edge">
  <meta name="viewport" content="width-device-width, initial-scale=1, shrink-to-fit=no">
  <title>Home Page-SecureWeb</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" href="boot2.css">
</head>
<body>

   <div class="jumbotron">
      <h1 class="display-3 text-white text-center font-weight-bold">
	  Web Application Security Services</h1>
      <!--<h3 class="lead  font-weight-bold">Think Offensively to Secure Defenses</h3> -->
      <hr class="my-2">
      <br><br>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
           
            <li class="nav-item">
              <a class="nav-link" href="" target="_blank">Info</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php">Logout</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="report2.php">Report</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
	</div>
<?php
  require 'config.php';
  $sql="SELECT * FROM product";
  $result=mysqli_query($conn,$sql);
?>
<div class="container">
  <div class="row">
    <?php
    while($row=mysqli_fetch_array($result)){
    ?>
    <div class="col-lg-4 mt-3 mb-3">
      <div class="card-deck">
        <div class="card border">
          <img src="<?= $row['product_image']; ?>" class="card-iamge-top" height="320">
          <h5 class="card-title">Package : <?= $row['product_name']; ?></h5>
         <a href="order.php?id=<?= $row['product_id']; ?>" class="btn btn-danger btn-block btn-lg">Buy Now</a>

        </div>
      </div>
    </div>

  <?php } ?>
  </div>
</div>
<!--  Page Footer -------------------------------------------------------->
<footer class="page-footer font-small blue pt-4">

  <!-- Footer Links -->
  <div class="container-fluid text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-6 mt-md-0 mt-3">

        <!-- Content -->
        <h5 class="text-uppercase">OUR TEAM</h5>
        <ul>
            <li>Hritik Dubey </li>
			<li>Suyash Gupta </li>
	       </ul>


      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none pb-3">

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3" >

        <!-- Links -->
        <h5 class="text-uppercase">OUR SERVICES</h5>

        <ul class="list-unstyled">
          <li>
            Illuminate Vulnerabilities
          </li>
          <li>
            Gain Assurance
          </li>
          <li>
            Boost Defense
          </li>
          <li>
            Penetration Testing
          </li>
        </ul>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">

        <!-- Links -->
        <h5 class="text-uppercase">CONTACT US</h5>

        <ul class="list-unstyled">
          <li>
            8573875453
          </li>
        </ul>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2021 Copyright:
     There is no Copyright
  </div>
  <!-- Copyright -->

</footer>


</body>
</html>
