<?php
    session_start();
    include('koneksi.php');

    if (empty($_SESSION['username'])){
        header('location:sign-in.php');
        exit;
    }

	$query1 = "SELECT * FROM item WHERE id_item='4'";
	$stmt = $conn->query($query1);
	$row1 = $stmt->fetch();

	$query2 = "SELECT * FROM item WHERE id_item='5'";
	$stmt = $conn->query($query2);
	$row2 = $stmt->fetch();

	$query3 = "SELECT * FROM item WHERE id_item='6'";
	$stmt = $conn->query($query3);
	$row3 = $stmt->fetch();

	if (isset($_POST['b1'])) {
		$nama = $row1['item_name'];
		$harga = $row1['item_price'];	
		$id = $_SESSION['id'];
		$sql = "INSERT INTO wishlist (nama, harga, id_user) VALUES ('$nama', '$harga', '$id')";
		$conn->exec($sql);
		header("Location: Laptop.php");
	} 

	if (isset($_POST['b2'])) {
		$nama = $row2['item_name'];
		$harga = $row2['item_price'];	
		$id = $_SESSION['id'];
		$sql = "INSERT INTO wishlist (nama, harga, id_user) VALUES ('$nama', '$harga', '$id')";
		$conn->exec($sql);
		header("Location: Laptop.php");
	} 

	if (isset($_POST['b3'])) {
		$nama = $row3['item_name'];
		$harga = $row3['item_price'];	
		$id = $_SESSION['id'];
		$sql = "INSERT INTO wishlist (nama, harga, id_user) VALUES ('$nama', '$harga', '$id')";
		$conn->exec($sql);
		header("Location: Laptop.php");
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
					<li><a href="profile.php"><i class="fa fa-user-o"></i> <?php echo " " . $_SESSION['username']?> </a></li>
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
						<div class="header-ctn">

							<!-- History -->
							<div>
								<a href="history.php">
									<i class="fa fa-undo"></i>
									<span>History</span>
								</a>
							</div>
							<!-- /History -->

							<!-- Cart -->
							<div>
								<a href="checkout.php">
									<i class="fa fa-shopping-cart"></i>
									<span>Cart</span>
								</a>
							</div>
							<!-- /Cart -->

							<!-- Menu Toogle -->
							<div class="menu-toggle">
								<a href="#">
									<i class="fa fa-bars"></i>
									<span>Menu</span>
								</a>
							</div>
							<!-- /Menu Toogle -->
						</div>
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
					<li><a href="home.php">Home</a></li>
					<li><a href="Smartphones.php">Smartphones</a></li>
					<li class="active"><a href="Laptop.php">Laptop</a></li>
					<li><a href="Audio.php">Audio</a></li>
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

				<!-- section title -->
				<div class="col-md-12">
					<div class="section-title">
						<h3 class="title">Laptops </h3>
					</div>
				</div>
				<!-- /section title -->

				<!-- Products tab & slick -->
				<div class="col-md-12">
					<div class="row">
						<div class="products-tabs">
							<!-- tab -->
							<form action="Laptop.php" method="POST">
								<div id="tab1" class="tab-pane active">
									<div class="products-slick" data-nav="#slick-nav-1">

										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="./img/barang4.png" alt="">
												<div class="product-label">
												</div>
											</div>
											<div class="product-body">
												<h3 class="product-name"><a href="#"><?php echo $row1['item_name']; ?></a></h3>
												<h4 class="product-price">$<?php echo $row1['item_price']; ?></h4>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn" name="b1"><i class="fa fa-shopping-cart"></i> add to cart</button>
											</div>
										</div>
										<!-- /product -->

										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="./img/barang5.png" alt="">
												<div class="product-label">
												</div>
											</div>
											<div class="product-body">
												<h3 class="product-name"><a href="#"><?php echo $row2['item_name']; ?></a></h3>
												<h4 class="product-price">$<?php echo $row2['item_price']; ?></h4>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn" name="b2"><i class="fa fa-shopping-cart"></i> add to cart</button>
											</div>
										</div>
										<!-- /product -->

										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="./img/barang6.png" alt="">
											</div>
											<div class="product-body">
												<h3 class="product-name"><a href="#"><?php echo $row3['item_name']; ?></a></h3>
												<h4 class="product-price">$<?php echo $row3['item_price']; ?></h4>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn" name="b3"><i class="fa fa-shopping-cart"></i> add to cart</button>
											</div>
										</div>
										<!-- /product -->

										
									</div>
									<div id="slick-nav-1" class="products-slick-nav"></div>
								</div>
							</form>
							<!-- /tab -->
						</div>
					</div>
				</div>
				<!-- Products tab & slick -->
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
							Copyright &copy;<script>
								document.write(new Date().getFullYear());
							</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">KELOMPOK 4</a>
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