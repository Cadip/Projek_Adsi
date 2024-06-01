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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />

	<style>
    body{
        overflow-x: hidden;
        overflow-y: hidden;
        background-color: #151023;
        margin: 40px;
        margin-left: 50px; 
    }

    .card {
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    width: 40%;
    }

    .card:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
    }

    .container {
    padding: 2px 16px;
    }
    </style>

</head>
	<body>
        <div class="row">
            <div class="row">
                <ul class="footer-payments">
                    <div class="col-lg-3">
                        <li><a href="seat3.php"><i class="fa fa-chevron-left" style="color:white;"></i></a></li>
                    </div>
                </ul>
            </div>
            <div class="row">
                <div class="row" style="text-align: center;">
                    <h1 style="color: white;">CHOOSE PAYMENT</h1>
                </div>
            </div>
        </div>
        

        <!-- MAIN -->
        <div class="row">
			<div class="row" style="padding-top: 30px; text-align: center">
				<form action="payment1.php" method="POST">
					<button class="btn btn-primary" name="wallet" type="submit" style="border-radius: 12px; color: white; background-color: #352858; font-weight:bold; font-size: 40px; width: 300px">WALLET</button>
				</form>
			</div>
		</div>
		<div class="row">
			<div class="row" style="padding-top: 30px; text-align: center">
				<form action="payment1.php" method="POST">
					<button class="btn btn-primary" name="qris" type="submit" style="border-radius: 12px; color: white; background-color: #352858; font-weight:bold; font-size: 40px;  width: 300px">QRIS</button>
				</form>
			</div>
		</div>
		<div class="row">
			<div class="row" style="padding-top: 30px; text-align: center">
				<form action="payment1.php" method="POST">
					<button class="btn btn-primary" name="bca" type="submit" style="border-radius: 12px; color: white; background-color: #352858; font-weight:bold; font-size: 40px;  width: 300px">BCA</button>
				</form>
			</div>
		</div>
        <!-- MAIN -->

        <!-- DESKRIPSI -->
		<div class="row">
			<div class="row">
				<div class="card">

				</div>
			</div>
		</div>

		<!-- jQuery Plugins -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>

	</body>
</html>