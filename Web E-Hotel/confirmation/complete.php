<?php


session_start();
if (!isset($_SESSION["berhasil"])) {
    header("location: ../book/booking.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Pacifico&display=swap" rel="stylesheet">

    <title>Verified</title>
    <link rel="stylesheet" href="../required.css">
    <link rel="stylesheet" href="completeStyle.css">
    <link rel="icon" href="../logo.png" type="image/x-icon">
</head>
<body>
    <div class="container">
        <nav>
            <div class="logo">
                <h4>E-Hotel</h4>
            </div>

            <ul>
                <li><a href="hapus.php" class="home">Home</a></li>
                <li><a href="hapus.php" class="photo">Photos</a></li>
                <li><a href="hapus.php" class="">Rooms</a>
                    <ul class="dropbar">
                        <li><a href="hapus.php">Deluxe Room</a></li>
                        <li><a href="hapus.php">Family Room</a></li>
                        <li><a href="hapus.php">Suite Room</a></li>
                    </ul>
                </li>
                <li><a href="hapus.php" class="about">About</a></li>
            </ul>

        </nav>
    </div>


    <div class="body1">
        <img src="verified.png" alt="Verified">
        <h1>YOUR RESERVATION COMPLETE</h1>
        <p>We've sent the reservation code to your e-mail. Please check if you've recieve the code.</p>
        <br><br>
        <p>If you have any problem please contact us</p>
        <br><br><br>
        <a href="hapus.php">< Back to home page</a>
        <br><br><br>
    </div>


    <div class="footer">
        <div class="atas">
            <div class="street">
                <h3>E-Hotel</h3>
                <span>Country , Road , street</span>
                <span>+812 5566 8888 | ehotel@gmail.con</span>
            </div>

            <h4>E-Hotel</h4>

            <div class="connect">
                <span>Connect With Us</span>
                <ul>
                    <li><a href="#"><img src="../imgIndex/fb1.png" alt="fb" class="fb"></a></li>
                    <li><a href="#"><img src="../imgIndex/ig1.png" alt="ig" class="ig"></a></li>
                    <li><a href="#"><img src="../imgIndex/tweet1.png" alt="tt" class="tweet"></a></li>
                </ul>
            </div>
        </div>

        <div class="bawah">
            <p>2020 E-Hotel. All Rights Reserved.</p>
        </div>
    </div>
</body>
</html>