<?php	
	session_start();
	include('koneksi.php');

    if (isset($_POST['reserve'])) {
        header('Location: payment2.php');
        exit();
    }
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

    .btn{
        border: 5px solid #001440;
    }

    .dropbtn {
    background-color: #100080;
    color: white;
    padding: 10px;
    font-size: 12px;
    border-radius: 12px;
    cursor: pointer;
    }

    .dropdown {
    position: relative;
    display: inline-block;
    border-radius: 12px;
    background-color: #100080;
    }

    .dropdown-content {
    display: none;
    position: absolute;
    background-color: #100080;
    min-width: 90px;
    border-radius: 12px;
    font-size: 12px;
    }

    .dropdown-content a {
    color: white;
    padding: 8px;
    text-decoration: none;
    display: block;
    border-radius: 12px;
    }

    .dropdown-content a:hover {background-color: #3f3299}

    .dropdown:hover .dropdown-content {
    display: block;
    
    }

    .dropdown:hover .dropbtn {
    background-color: #3f3299;
    }
    </style>

</head>
	<body>
        <!-- MAIN -->
            <!-- HEADER -->
            <div class="row">
                <div class="row">
                    <ul class="footer-payments">
                        <div class="col-lg-3">
                            <li><a href="kungfupanda.php"><i class="fa fa-chevron-left" style="color:white;"></i></a></li>
                        </div>
                    </ul>
                </div>
            </div>

            <div class="row">
                <div class="row" style="text-align: center;">
                    <h1 style="color: white;">CHOOSE SEAT</h1>
                </div>
                <div class="container" style="background-color: #189bcc; border-radius: 12px; margin-top: 20px; width: 50%">
                    
                </div>
                <p style="color: white; text-align: center; padding-top: 20px">SCREEN</p>
            </div>
            <!-- HEADER -->

            <div class="row" style="text-align: center; ">
                <a href="#" ><img src="./img/kursi.png" alt="kursi" style="width: 400px"></a>
            </div>

            <div class="row" style="padding-top: 30px; text-align: center;">
                <div class="dropdown">
                    <select style="border-radius: 8px; background-color: #3f3299; color: white; text-align: center;">
                        <option value="#">Pick A Seat</option>
                        <option href="#">1</option>
                        <option href="#">2</option>
                        <option href="#">3</option>
                        <option href="#">4</option>
                        <option href="#">12</option>
                        <option href="#">13</option>
                        <option href="#">14</option>
                        <option href="#">15</option>
                    </select>
                </div>
            </div>
            
            <div class="row" style="text-align: center; padding-top: 30px;">
                <form action="seat2.php" method="POST">
                    <button class="btn btn-primary" name="reserve" type="submit" style="border-radius: 15px; color: white; background-color: #189bcc; font-weight:bold; width: 200px">Reservation</button>
                </form>
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