<?php
session_start();
include('koneksi.php');

if (isset($_POST['store_session'])) {
	$query = "SELECT * FROM user WHERE username='" . $_POST['username'] . "'";
	$stmt = $conn->query($query);
	$row = $stmt->fetch();
	if ($_POST['password'] == "" || $_POST['username'] == "") {
		$warning = 'Username atau Password Salah!';
	} else if ($row['password'] == $_POST['password']) {
		$_SESSION['id'] = $row['id_user'];
		$_SESSION['username'] = $_POST['username'];
		$_SESSION['password'] = $_POST['password'];
		header('location: homepage.php');
	} else
		$warning = 'Username atau Password Salah!';
}

if (isset($_POST['create_account'])) {
	header("Location: sign-up.php");
	exit();
}
?>

<html>
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
			body{background-color: #151023;}
		</style>
	</head>

	<body>
		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container" style="width:30%; background-color: #009CDF; border-radius: 18px; padding: 30px">
				<!-- row -->
				<div class="row">
					<!-- section title -->
					<div class="col-md-12">
						<div class="login-section" style="text-align: center">
							<img src="img/aldo.png" alt="Avatar" class="avatar" style="width:150px;">
							<h2 style="color: white">Login</h2>
							<form action="sign-in.php" method="POST">
								<h5 style="text-align: left; color: white">Username</h5>
								<input class="form-control" type="text" name="username" placeholder="username" style="border-radius: 15px;"><br>
								<h5 style="text-align: left; color: white">Password</h5>
								<input class="form-control" type="password" name="password" placeholder="password" style="border-radius: 15px;"><br>
								<button class="btn btn-danger" type="submit" name="store_session" style="border-radius: 15px; background-color: red;">Login</button><br><br>
								<a href="sign-up.php" style="color: white; padding-left: 30px">Didn't have an account? click here to sign up</a>
							</form>
							<?php
								if (isset($warning)) {
								?>
									<div class="alert alert-danger" role="alert">
										<b><?php echo $warning; ?></b>
									</div>
								<?php
								}
							?>
						</div>
					</div>
					<!-- /section title -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- jQuery Plugins -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>
	</body>	
</html>