<?php	
	session_start();
	include('koneksi.php');

    $query1 = "SELECT SUM(score) AS total, COUNT(score) AS jumlah FROM rating WHERE film='Solo Leveling'";
	$stmt = $conn->query($query1);
	$rating = $stmt->fetch();

    if (isset($_POST['jam1'])) {
        $_SESSION['jam'] = $_POST['jam1'];
        header("Location: seat1.php");
        exit();
    }elseif (isset($_POST['jam2'])) {
        $_SESSION['jam'] = $_POST['jam2'];
        header("Location: seat1.php");
        exit();
    }
    elseif (isset($_POST['jam3'])) {
        $_SESSION['jam'] = $_POST['jam3'];
        header("Location: seat1.php");
        exit();
    }
    elseif (isset($_POST['jam4'])) {
        $_SESSION['jam'] = $_POST['jam4'];
        header("Location: seat1.php");
        exit();
    }
    elseif (isset($_POST['jam5'])) {
        $_SESSION['jam'] = $_POST['jam5'];
        header("Location: seat1.php");
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
    </style>

</head>

	<body>
        <!-- MAIN -->
            <div class="row">
                <div class="row">
                    <ul class="footer-payments">
                        <div class="col-lg-3">
                            <li><a href="homepage.php"><i class="fa fa-chevron-left" style="color:white;"></i></a></li>
                        </div>
                    </ul>
                </div>
                <div class="row" style="text-align: center;">
                    <h1 style="color: white;">Solo Leveling</h1>
                </div>
            
                <div class="row" style="padding-top: 20px">
                    <div class="row">
                        <div class="col-lg-6" style="text-align: right">
                            <a href="#" style="color: white"><i class="fa fa-star" style="color: #006693"></i></a>
                        </div>
                        <div class="col-lg-6" style="text-align: left;">
                            <a href="#" style="color: white">
                                <?php
                                    if ($rating['jumlah']!=NULL) {
                                        echo $rating['total']/$rating['jumlah'];
                                    }else {
                                        echo '0';
                                    }
                                ?>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="row" style="text-align: center; padding-top: 50px">
                    <div class="container" style="background-color: #2c2738; border-radius: 12px; width: 50%">
                        <p style="color: #e7e7e9; margin: 10px">Sung Jinwoo, is known as the weakest hunter in the world. 
                        However, his fate changes dramatically after he encounters a double dungeon, where he is fatally injured. 
                        At the brink of death, a mysterious quest window appears, offering him a chance to level up. 
                        Jinwoo accepts the quest and begins to grow stronger at a rapid pace, gaining powers that surpass even the strongest hunters. 
                        His journey becomes one of uncovering the secrets behind his abilities and the origins of the dungeons.</p>
                    </div>
                </div>

                <div class="row" style="text-align: center; padding-top: 50px">
                    <h3 style="color: white">SELECT TIME</h3>
                </div>

                <div class="row" style="padding-top: 3%">
                    <div class="row">
                        <form action="sololeveling.php" method="POST">
                            <ul style="padding-left: 20%">
                                <li class="col-lg-2">
                                    <button class="btn btn-primary" name="jam1" type="submit" style="border-radius: 15px; color: white; background-color: #001440; font-weight:bold;">16:00</button>
                                </li>
                                <li class="col-lg-2">
                                    <button class="btn btn-primary" name="jam2" type="submit" style="border-radius: 15px; color: white; background-color: #001440; font-weight:bold;">17:00</button>
                                </li>
                                <li class="col-lg-2">
                                    <button class="btn btn-primary" name="jam3" type="submit" style="border-radius: 15px; color: white; background-color: #001440; font-weight:bold;">18:00</button>
                                </li>
                                <li class="col-lg-2">
                                    <button class="btn btn-primary" name="jam4" type="submit" style="border-radius: 15px; color: white; background-color: #001440; font-weight:bold;">19:00</button>
                                </li>
                                <li class="col-lg-2">
                                    <button class="btn btn-primary" name="jam5" type="submit" style="border-radius: 15px; color: white; background-color: #001440; font-weight:bold;">20:00</button>
                                </li>
                            </ul>
                        </form>
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