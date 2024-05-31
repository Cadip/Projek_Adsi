<?php
session_start();
include('koneksi.php');

if (empty($_SESSION['username'])){
	header('location:sign-in.php');
	exit;
}

if (isset($_POST['order'])) {
	$first = $_POST['first'];
	$last = $_POST['last'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	$country = $_POST['country'];
	$zip = $_POST['zip'];
	$tel = $_POST['tel'];
	$id = $_SESSION['id'];

	if (empty($_POST['first']) || empty($_POST['last']) || empty($_POST['email']) || empty($_POST['address']) || empty($_POST['country']) || empty($_POST['zip']) || empty($_POST['tel'])) {
		$warning = 'Billing Address harus lengkap!';
	} else{
		if (empty($_POST['checkbox'])){
			$warning = 'Harap setujui syarat dan ketentuan';
		} elseif (empty($_POST['payment'])) {
			$warning = 'Harap pilih metode pembayaran';
		} else {
			$sql = "INSERT INTO billing (first_name, last_name, email, address, country, zip_code, phone_number, id_user) VALUES ('$first', '$last', '$email', '$address', '$country', '$zip', '$tel', '$id')";
			$conn->exec($sql);
			$list = $_SESSION['list'];
			$totalHarga = $_SESSION['total'];
			$id = $_SESSION['id'];
			$query = "INSERT INTO history(nama, harga, id_user) VALUES ('$list', '$totalHarga', '$id')";
			$conn->exec($query);
			$query = "DELETE FROM wishlist WHERE id_user = '$id'";
			$conn->exec($query);
			header("Location: purchased.php");
		}
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Bland</title>

	<link rel="icon" href="./img/logo.png" sizes="20x20" type="image/png">

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

</head>

	<body>
		<!-- HEADER -->
		<header>
			<!-- TOP HEADER -->
			<div id="top-header">
				<div class="container">
					<ul class="header-links pull-right">
						<li><a href="edit_account.php"><i class="fa fa-gear"></i> Setting</a></li>
						<li><a href="profile.php"><i class="fa fa-user-o"></i> <?php echo " " . $_SESSION['username'] ?> </a></li>
						<li><a href="logout.php"><i class="fa fa-sign-out"></i>Log Out</a></li>
					</ul>
				</div>
			</div>
			<!-- /TOP HEADER -->

			<!-- MAIN HEADER -->
		<div id="header">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- LOGO -->
					<div class="col-md-2">
						<div class="header-logo">
							<a href="#" class="logo">
								<img src="./img/logo.png" alt="">
							</a>
						</div>
					</div>
					<!-- /LOGO -->
			

					<div class="col-md-6">
						
					</div>
				

					<!-- ACCOUNT -->
					<div class="col-md-4 clearfix">
					
					</div>
					<!-- /ACCOUNT -->
				</div>
				<!-- row -->
			</div>
			<!-- container -->
		</div>
		<!-- /MAIN HEADER -->
	</header>
	<!-- /HEADER -->

		<!-- NAVIGATION -->
		<nav id="navigation">
			<!-- container -->
			<div class="container">
				<!-- responsive-nav -->
				<div id="responsive-nav">
					<!-- NAV -->
					<ul class="main-nav nav navbar-nav">
						<li class="active"><a href="home.php">Home</a></li>
					</ul>
					<!-- /NAV -->
				</div>
				<!-- /responsive-nav -->
			</div>
			<!-- /container -->
		</nav>
		<!-- /NAVIGATION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<form action="checkout.php" method="POST">
						<div class="col-md-7">
							<!-- Billing Details -->
							<div class="billing-details">
								<div class="section-title">
									<h3 class="title">Billing address</h3>
								</div>
								<input class="form-control" type="text" name="first" placeholder="First Name"><br>
								<input class="form-control" type="text" name="last" placeholder="Last Name"><br>
								<input class="form-control" type="text" name="email" placeholder="Email"><br>
								<input class="form-control" type="text" name="address" placeholder="Address"><br>
								<input class="form-control" type="text" name="country" placeholder="Country"><br>							
								<input class="form-control" type="text" name="zip" placeholder="ZIP Code"><br>						
								<input class="form-control" type="text" name="tel" placeholder="Telephone"><br>							
							</div>
							<!-- /Billing Details -->
						</div>

						<!-- Order Details -->
						<div class="col-md-5 order-details">
							<div class="section-title text-center">
								<h3 class="title">Your Order</h3>
							</div>
							<div class="order-summary">
								<div class="order-col">
									<div><strong>PRODUCT</strong></div>
									<div><strong>TOTAL</strong></div>
								</div>
								<div class="order-products">
									<?php
										$totalHarga = 0;
										$list = "";
										$id = $_SESSION['id'];
										$query = "SELECT * FROM wishlist WHERE id_user = '$id'";
										$sqmt = $conn->query($query);
										while ($row = $sqmt->fetch()) {
											echo "<div class='order-col'>";
											echo "<div>".$row['nama']."</div>";
											echo "<div>$".$row['harga'].".00</div>";
											echo "</div>";
											$totalHarga += $row['harga'];
											$list = $list . $row['nama'] . "<br>";
										}
										$_SESSION['list'] = $list;
										$_SESSION['total'] = $totalHarga;
									?>
								</div> 
								<div class="order-col">
									<div>Shiping</div>
									<div><strong>FREE</strong></div>
								</div>
								<div class="order-col">
									<div><strong>PRICE</strong></div>
									<div><strong class="order-total">$<?php echo $_SESSION['total'] ?>.00</strong></div>
								</div>
							</div>
							<div class="payment-method">
								<div class="input-radio">
									<input class="form-control" type="radio" name="payment" id="payment-1">
									<label for="payment-1">
										<span></span>
										Cash on Delivery
									</label>
									<div class="caption">
										<p>Bayar langsung di tempat.</p>
									</div>
								</div>
							</div>
							<div class="input-checkbox">
								<input class="form-control" type="checkbox" name="checkbox" id="terms">
								<label for="terms">
									<span></span>
									I've read and accept the <a href="#">terms & conditions</a>
								</label>
							</div><br>
							<?php
								if (isset($warning)) {
								?>
									<div class="alert alert-danger" role="alert">
										<b><?php echo $warning; ?></b>
									</div>
								<?php
								}
							?>
							<button type="submit" class="btn btn-danger" name="order">Place Order</button>
						</div>
						<!-- /Order Details -->
					</form>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
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
								<p>Universitas Kristen Petra adalah tempat di mana pemimpin-pemimpin sosial global dibentuk dan ditempa berlandaskan nilai-nilai kristiani. Kami mengundangmu untuk menimba ilmu di universitas yang peduli dan global, untuk belajar di bawah staf pengajar yang teruji dan bergabung dengan para mahasiswa dengan visi yang sama—membawa dampak bagi dunia.</p>
								<ul class="footer-links">
									<li><a href="#"><i class="fa fa-map-marker"></i>Jl. Siwalankerto No.121-131, Siwalankerto, Kec. Wonocolo, Kota SBY, Jawa Timur 60236</a></li>
									<li><a href="#"><i class="fa fa-phone"></i>+021-95-51-84</a></li>
									<li><a href="#"><i class="fa fa-envelope-o"></i>adiganteng@gmail.com</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Categories</h3>
								<ul class="footer-links">
									<li><a href="#">Hot deals</a></li>
									<li><a href="#">Laptops</a></li>
									<li><a href="#">Smartphones</a></li>
									<li><a href="#">Cameras</a></li>
									<li><a href="#">Accessories</a></li>
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
									<li><a href="#">View Cart</a></li>
									<li><a href="#">Track My Order</a></li>
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
					<!-- row -->
					<div class="row">
						<div class="col-md-12 text-center">
							<ul class="footer-payments">
								<li><a href="#"><i class="fa fa-cc-visa"></i></a></li>
								<li><a href="#"><i class="fa fa-credit-card"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-paypal"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-mastercard"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-discover"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-amex"></i></a></li>
							</ul>
							<span class="copyright">
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							</span>
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