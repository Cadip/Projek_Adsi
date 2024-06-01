<?php	
	session_start();
	include('koneksi.php');

    if (isset($_POST['dune'])) {
        header("Location: dune.php");
        exit();
    } else if (isset($_POST['kungfu-panda'])) {
        header("Location: kungfupanda.php");
        exit();
    } else if (isset($_POST['solo-leveling'])) {
        header("Location: sololeveling.php");
        exit();
    } else if (isset($_POST['gangnam-zombie'])) {
        header("Location: gangnamzombie.php");
        exit();
    } else if (isset($_POST['fast-charlie'])) {
        header("Location: fastcharlie.php");
        exit();
    } else if (isset($_POST['civil-war'])) {
        header("Location: civilwar.php");
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
        <div class="row">
            <div class="row" style="background-color: #151023; padding-top: 5%">
                <div class="row">
                    <div class="row">
                        <h1 style="color: white; text-align: center; font-size: 60px">Choose Movie</h1>
                    </div>
                </div>
            </div>
        </div>

        <!-- NOW PLAYING -->
        <div class="row" style="background-color: #151023">
            <div class="row">
                <h3 style="color: white; text-align: center; padding-top: 30px">NOW PLAYING</h3>
            </div>  
            <div class="row">
                <div class="col-lg-4">
                    <div class="container" style="padding-top: 30px; padding-bottom: 30px; text-align: center;">
                        <div class="col-lg-12">
                            <div class="card" style="border-radius: 15px; padding-bottom: 20px; background-color: #009CDF">
                                <img src="./img/solev.png" alt="Avatar" style="width:30%; padding-top: 20px">
                                <h4 style="color: white; padding-top: 20px">Solo Leveling</h4> 
                                <form action="homepage.php" method="POST">
                                    <button class="btn btn-primary mt-3" type="submit" name="solo-leveling" style="border-radius: 15px; color: blue; background-color: white; font-weight:bold;">Buy Ticket</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="container" style="padding-top: 30px; padding-bottom: 30px; text-align: center;">
                        <div class="col-lg-12">
                            <div class="card" style="border-radius: 15px; padding-bottom: 20px; background-color: #009CDF">
                                <img src="./img/panda.png" alt="Avatar" style="width:30%; padding-top: 20px">
                                <h4 style="color: white; padding-top: 20px">Kungfu Panda 4</h4> 
                                <form action="homepage.php" method="POST">
                                    <button class="btn btn-primary mt-3" type="submit" name="kungfu-panda" style="border-radius: 15px; color: blue; background-color: white; font-weight:bold;">Buy Ticket</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="container" style="padding-top: 30px; padding-bottom: 30px; text-align: center;">
                        <div class="col-lg-12">
                            <div class="card" style="border-radius: 15px; padding-bottom: 20px; background-color: #009CDF">
                                <img src="./img/dune.png" alt="Avatar" style="width:30%; padding-top: 20px">
                                <h4 style="color: white; padding-top: 20px">Dune</h4> 
                                <form action="homepage.php" method="POST">
                                    <button class="btn btn-primary mt-3" type="submit" name="dune" style="border-radius: 15px; color: blue; background-color: white; font-weight:bold;">Buy Ticket</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>

        <!-- COMING SOON -->
        <div class="row" style="background-color: #151023">
            <div class="row">
                <h3 style="color: white; text-align: center; padding-top: 20px">COMING SOON</h3>
            </div> 
            <div class="row">
                <div class="col-lg-4">
                    <div class="container" style="padding-top: 30px; padding-bottom: 30px; text-align: center;">
                        <div class="col-lg-12">
                            <div class="card" style="border-radius: 15px; padding-bottom: 20px; background-color: #009CDF;">
                                <img src="./img/zombie.png" alt="Avatar" style="width:30%; padding-top: 20px">
                                <h4 style="color: white; padding-top: 20px">Gangnam Zombie</h4> 
                                <form action="homepage.php" method="POST">
                                    <button class="btn btn-primary mt-3" type="submit" name="gangnam-zombie" style="border-radius: 15px; color: blue; background-color: white; font-weight:bold;">View</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="container" style="padding-top: 30px; padding-bottom: 30px; text-align: center;">
                        <div class="col-lg-12">
                            <div class="card" style="border-radius: 15px; padding-bottom: 20px; background-color: #009CDF">
                                <img src="./img/charlie.png" alt="Avatar" style="width:30%; padding-top: 20px">
                                <h4 style="color: white; padding-top: 20px">Fast Charlie</h4> 
                                <form action="homepage.php" method="POST">
                                    <button class="btn btn-primary mt-3" type="submit" name="fast-charlie" style="border-radius: 15px; color: blue; background-color: white; font-weight:bold;">View</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="container" style="padding-top: 30px; padding-bottom: 30px; text-align: center;">
                        <div class="col-lg-12">
                            <div class="card" style="border-radius: 15px; padding-bottom: 20px; background-color: #009CDF">
                                <img src="./img/civil.png" alt="Avatar" style="width:30%; padding-top: 20px">
                                <h4 style="color: white; padding-top: 20px">Civil War</h4> 
                                <form action="homepage.php" method="POST">
                                    <button class="btn btn-primary mt-3" type="submit" name="civil-war" style="border-radius: 15px; color: blue; background-color: white; font-weight:bold;">View</button>
                                </form>
                            </div>
                        </div>
                    </div>
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
                                <li><a href="profile.php"><i class="fa fa-user" style="color: white;"></i></a></li>
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