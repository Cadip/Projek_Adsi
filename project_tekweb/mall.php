<?php	
	session_start();
	include('koneksi.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>MovieTickets</title>

	<link rel="icon" href="./img/film.jpg" sizes="20x20" type="image/png">

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Slick -->
	<link type="text/css" rel="stylesheet" href="css/slick.css" />
	<link type="text/css" rel="stylesheet" href="css/slick-theme.css" />

	<!-- nouislider -->
	<link type="text/css" rel="stylesheet" href="css/nouislider.min.css" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />

	<style>
	img {
	border-radius: 50%;
	}
	body {
  		overflow-x: hidden; /* Hide horizontal scrollbar */
		font-family: Arial, Helvetica, sans-serif;
		/* font-size: 10px; */
	}

	table, th, td  {
	/* border: 2px solid black; */
	/* border-collapse: collapse; */
	}

	/* The Modal (background) */
	.modal {
	display: none; /* Hidden by default */
	position: fixed; /* Stay in place */
	z-index: 1; /* Sit on top */
	padding-top: 100px; /* Location of the box */
	left: 0;
	top: 0;
	width: 100%; /* Full width */
	height: 100%; /* Full height */
	overflow: auto; /* Enable scroll if needed */
	background-color: rgb(0,0,0); /* Fallback color */
	background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
	}

	/* Modal Content */
	.modal-content {
	position: relative;
	background-color: #fefefe;
	margin: auto;
	padding: 0;
	border: 1px solid #888;
	width: 80%;
	box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
	-webkit-animation-name: animatetop;
	-webkit-animation-duration: 0.4s;
	animation-name: animatetop;
	animation-duration: 0.4s
	}

	/* Add Animation */
	@-webkit-keyframes animatetop {
	from {top:-300px; opacity:0} 
	to {top:0; opacity:1}
	}

	@keyframes animatetop {
	from {top:-300px; opacity:0}
	to {top:0; opacity:1}
	}

	/* The Close Button */
	.close {
	color: red;
	float: right;
	font-size: 28px;
	font-weight: bold;
	}

	.close:hover,
	.close:focus {
	color: red;
	text-decoration: none;
	cursor: pointer;
	}

	.modal-header {
	padding: 2px 16px;
	background-color: grey;
	color: white;
	}

	.modal-body {padding: 2px 16px;}

	.modal-footer {
	padding: 2px 16px;
	background-color: grey;
	color: white;
	}
	</style>

</head>

	<body>
		<!-- HEADER -->
		<header>
			<!-- MAIN HEADER -->
			<div id="header">
				<div class="row">
					<div class="col-lg-8">
						<div class="row">
							<h2 style="color:white;padding-left: 50px">Welcome, <?php echo " " . $_SESSION['username'] ?> !</h2>
						</div>
					</div>
					<div class="col-lg-3" style="text-align:right;">
						<div class="col-lg-12" style="margin-top:20px;">
							<div class="row">
								<a href="logout.php" style="color:red;">LOG OUT</a>
							</div>
						</div>	
					</div>
					<div class="col-lg-1" style="text-align:right;padding-right:50px;">
						<a href="edit_account.php"><img src="./img/user.png" alt="Avatar" style="width:50px"></a>				
					</div>
				</div>
			</div>
			<!-- /MAIN HEADER -->
		</header>
		<!-- /HEADER -->

		<!-- SECTION -->
		<table style="width:90%;margin-left:70px;margin-top:50px;margin-bottom:50px;font-size:15px">
            <tr>
				<th style="text-align:center;padding:10px;background-color:black;color:white;">Mall</th>
				<th style="text-align:center;padding:10px;background-color:black;color:white;">Jam Buka</th>
				<th style="text-align:center;padding:10px;background-color:black;color:white;"></th>
			</tr>
			<tr >
				<td style="padding:10px;">Pakuwon City Mall Surabaya</td>
				<td style="padding:10px;">08.30 - 22.00 WIB</td>
				<td style="padding:10px;text-align:center"><a href="blank.php"><button name="view" class="btn btn-primary">Lihat</button></a></td>
			</tr>
			<tr>
				<td style="padding:10px;">Galaxy Mall Surabaya</td>
				<td style="padding:10px;">09.00 - 22.30 WIB</td>
				<td style="padding:10px;text-align:center"><button name="view" class="btn btn-primary">Lihat</button></td>
			</tr>
			<tr>
				<td style="padding:10px;">Royal Plaza Surabaya</td>
				<td style="padding:10px;">09.00 - 22.30 WIB</td>
				<td style="padding:10px;text-align:center"><button name="view" class="btn btn-primary">Lihat</button></td>
			</tr>
			<tr>
				<td style="padding:10px;">Lenmarc Mall Surabaya</td>
				<td style="padding:10px;">09.00 - 22.30 WIB</td>
				<td style="padding:10px;text-align:center"><button name="view" class="btn btn-primary">Lihat</button></td>
			</tr>
			<tr>
				<td style="padding:10px;">Tunjungan Plaza</td>
				<td style="padding:10px;">09.00 - 22.30 WIB</td>
				<td style="padding:10px;text-align:center"><button name="view" class="btn btn-primary">Lihat</button></td>
			</tr>
			<tr>
				<td style="padding:10px;">Ciputra World Surabaya</td>
				<td style="padding:10px;">09.00 - 22.30 WIB</td>
				<td style="padding:10px;text-align:center"><button name="view" class="btn btn-primary">Lihat</button></td>
			</tr>
		</table>
			
		<!-- /SECTION -->

		<!-- FOOTER -->
		<footer id="footer">
			<!-- top footer -->
			<div class="section">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">About Us</h3>
								<p>Best App For Movie Lovers In Indonesia! Movie Entertainment Platform For Cinema.</p>
								<ul class="footer-links">
									<li><a href="#"><i class="fa fa-map-marker"></i>Jalan Kejawan Putih Mutiara No. 2 Kelurahan Kejawan Putih Tambak, Kecamatan Mulyorejo Kota Surabaya, Jawa Timur 60112</a></li>
									<li><a href="#"><i class="fa fa-phone"></i>+62 812-3220-2006</a></li>
									<li><a href="#"><i class="fa fa-envelope-o"></i>movietickets@gmail.com</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Categories</h3>
								<ul class="footer-links">
									<li><a href="#">Movie</a></li>
                                    <li><a href="#">Snack</a></li>
                                    <li><a href="#">3D Movie</a></li>
								</ul>
							</div>
						</div>

						<div class="clearfix visible-xs"></div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Information</h3>
								<ul class="footer-links">
									<li><a href="#">About Us</a></li>
									<li><a href="#">Contact Us</a></li>
									<li><a href="#">Privacy Policy</a></li>
									<li><a href="#">Orders and Returns</a></li>
									<li><a href="#">Terms & Conditions</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Service</h3>
								<ul class="footer-links">
									<li><a href="#">My Account</a></li>
									<li><a href="#">FAQ</a></li>
									<li><a href="#">Download Apps</a></li>
									<li><a href="#">Help</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /top footer -->

			<!-- bottom footer -->
			<div id="bottom-footer" class="section">
				<div class="container">
					<div class="row" style="text-align:center;">
						<h3 style="color:white;">FOLLOW US!</h3>
					</div>
					<!-- row -->
					<div class="row">
						<div class="col-md-12 text-center">
							<ul class="footer-payments">
								<li><a href="#"><i class="fa fa-instagram" style="color:white;"></i></a></li>
								<li><a href="#"><i class="fa fa-youtube" style="color:white;"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter" style="color:white;"></i></a></li>
								<li><a href="#"><i class="fa fa-facebook" style="color:white;"></i></a></li>
							</ul>
						</div>
					</div>
					<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /bottom footer -->
		</footer>
		<!-- /FOOTER -->

		<!-- jQuery Plugins -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>

	</body>
</html>