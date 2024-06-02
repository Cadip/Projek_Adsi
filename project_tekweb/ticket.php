<?php
	session_start();
	include('koneksi.php');

    // Pastikan query SQL untuk mengambil data yang diperlukan
    $query = "SELECT * FROM detail_pembayaran WHERE username='" . $_SESSION['username'] . "'";
	$stmt = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>MovieTickets</title>

	<link rel="icon" href="./img/film.jpg" sizes="20x20" type="image/png">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />
	<link type="text/css" rel="stylesheet" href="css/slick.css" />
	<link type="text/css" rel="stylesheet" href="css/slick-theme.css" />
	<link type="text/css" rel="stylesheet" href="css/nouislider.min.css" />
	<link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
	<link type="text/css" rel="stylesheet" href="css/style.css" />

	<style>
    body{
        overflow-x: hidden;
        background-color: #151023;
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
        padding:10px;
        width: 50%;
    }

    .footer {
        position: fixed;
        left: 0;
        bottom: 0;
        width: 100%;
    }

    th {
        border: 2px solid;
        color: white;
        text-align: center;
        padding: 10px;
        font-weight: bold;
        font-size: 20px
    }

    table, td {
        border: 2px solid;
        color: white;
        padding: 20px;
    }

    table {
        width: 80%;
        margin: auto;
        
        border-collapse: collapse;
        text-align: left;
    }
    </style>
    
</head>

<body>
    <!-- HEADER -->
    <div class="row">
        <div class="row" style="text-align: center; padding: 20px;">
            <h1 style="color: white">Ticket</h1>
        </div>
    </div>

    <!-- MAIN -->
    <div class="row">
        <div class="row">
            <?php
                while ($row = $stmt->fetch()) {
                    echo '<div class="container" style="background-color: #352858; border-radius: 15px; margin-top: 20px">';
                    echo '<div class="col-lg-9" style="padding: 10px; padding-left: 50px">';
                    echo '<h3 style="color: white;">' . htmlspecialchars($row['film']) . '</h3>';
                    echo '<h4 style="font-weight: bold; color: white;">' . 'Time:' . ' ' . htmlspecialchars($row['jam']) . '</h4>';
                    echo '<h4 style="font-weight: bold; color: white;">' . 'Seat:' . ' ' . htmlspecialchars($row['kodeKursi']) . '</h4>';
                    echo '</div>';
                    echo '<div class="col-lg-3" style="text-align: center; padding: 10px">';
                    echo '<div class="row">';
                    echo '<h3 style="color: white">STUDIO</h3>';
                    echo '</div>';
                    echo '<div class="row">';
                    echo '<h3 style="color: white">' . htmlspecialchars($row['studio']) . '</h3>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                }
            ?>
        </div>
    </div>
    
    <!-- FOOTER -->
    <div class="footer">
        <div class="row" style="background-color: #009CDF; text-align: center; border-radius: 15px;">
            <div class="row">
                <div class="col-md-12 text-center">
                    <ul class="footer-payments">
                        <div class="col-lg-3">
                            <li><a href="homepage.php"><i class="fa fa-home" style="color:white;"></i></a></li>
                        </div>
                        <div class="col-lg-3">
                            <li><a href="ticket.php"><i class="fa fa-ticket" style="color:white;"></i></a></li>
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
