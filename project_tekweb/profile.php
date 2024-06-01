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
        <!-- MAIN -->
        <div class="row" style="background-color: #151023; text-align: center; padding-top: 220px; padding-bottom: 250px">
            <div class="row">
                <div class="row" style="padding-bottom: 20px">
                    <a href="#" ><i class="fa fa-warning" style="color:red; font-size: 100px"></i></a>
                </div>
                
                <div>
                    <button class="btn btn-danger" name="logout" type="submit" style="border-radius: 15px; color: white; background-color: red; font-weight:bold; font-size: 30px"><a href="logout.php" style="color: white">LOG OUT</a></button>
                </div>
            </div>
        </div>
        
        <!-- FOOTER -->
        <div class="row">
            <div class="row" style="background-color: #009CDF; text-align: center; border-radius: 15px;">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <ul class="footer-payments">
                            <div class="col-lg-3">
                                <li><a href="homepage.php"><i class="fa fa-home" style="color:white;"></i></a></li>
                            </div>
                            <div class="col-lg-3">
                                <li><a href="#"><i class="fa fa-ticket" style="color:white;"></i></a></li>
                            </div>
                            <div class="col-lg-3">
                                <li><a href="#"><i class="fa-solid fa-cookie" style="color: white"></i></a></li>
                            </div>
                            <div class="col-lg-3">
                                <li><a href="#"><i class="fa fa-user" style="color: white;"></i></a></li>
                            </div>
                        </ul>
                    </div>
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