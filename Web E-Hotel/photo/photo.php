<?php
    $rooms = [  ["foto" => "imgPhoto/room1.jpg", "teks" => "Deluxe Queen Bed"],
                ["foto" => "imgPhoto/room2.jpg", "teks" => "Deluxe Twin Bed"],
                ["foto" => "imgPhoto/room3.jpg", "teks" => "Single Deluxe"],
                ["foto" => "imgPhoto/room4.jpg", "teks" => "Executive Suite"],
                ["foto" => "imgPhoto/room5.jpg", "teks" => "Family Premium"],
                ["foto" => "imgPhoto/room6.jpg", "teks" => "Family Standard"],
                ["foto" => "imgPhoto/room7.jpg", "teks" => "Deluxe King Bed"],
                ["foto" => "imgPhoto/room8.jpg", "teks" => "Family Premium"],
                ["foto" => "imgPhoto/room9.jpg", "teks" => "Family Premium"],
                ["foto" => "imgPhoto/room10.jpg", "teks" => "Family Standard"],
                ["foto" => "imgPhoto/room11.jpg", "teks" => "Presidental Suite"],
                ["foto" => "imgPhoto/room12.jpg", "teks" => "Deluxe Single"],
                ["foto" => "imgPhoto/room13.jpg", "teks" => "Executive Suite"],
                ["foto" => "imgPhoto/room14.jpg", "teks" => "Executive Suite"],
                ["foto" => "imgPhoto/room15.jpg", "teks" => "Presidental Suite"],
                ["foto" => "imgPhoto/room16.jpg", "teks" => "Deluxe Double"],
                ["foto" => "imgPhoto/room17.jpg", "teks" => "Family Premium"],
                ["foto" => "imgPhoto/room18.jpg", "teks" => "Presidental Suite"],
                ["foto" => "imgPhoto/room19.jpg", "teks" => "Deluxe Single"],
                ["foto" => "imgPhoto/room20.jpg", "teks" => "Executive Suite"],
                ["foto" => "imgPhoto/room21.jpg", "teks" => "Family Room"],
                ["foto" => "imgPhoto/room22.jpg", "teks" => "Presidental Suite"]
    ];
    $dinings = [["foto" => "imgphoto/dining1.jpg", "teks" => "Rooftop Afternoon Tea"],
                ["foto" => "imgphoto/dining2.jpg", "teks" => "Ballroom - Wedding Setup"],
                ["foto" => "imgphoto/dining3.jpg", "teks" => "Dining Room"],
                ["foto" => "imgphoto/dining4.jpg", "teks" => "Ballroom - Wedding Setup"],
                ["foto" => "imgphoto/dining5.jpg", "teks" => "Ballroom - Wedding Setup"],
                ["foto" => "imgphoto/dining6.jpg", "teks" => "Ballroom - Auditorium"],
                ["foto" => "imgphoto/dining7.jpg", "teks" => "Cafe"]
    ];
    $entertaiments = [  ["foto" => "imgphoto/enter1.jpg", "teks" => "Fitness Center"],
                        ["foto" => "imgphoto/enter2.jpg", "teks" => "Fitness Center"],
                        ["foto" => "imgphoto/enter3.jpg", "teks" => "Fitness Center"],
                        ["foto" => "imgphoto/enter4.jpg", "teks" => "Swimming Pool"],
                        ["foto" => "imgphoto/enter5.jpg", "teks" => "Spa"],
                        ["foto" => "imgphoto/enter6.jpg", "teks" => "Swimming Pool"],
                        ["foto" => "imgphoto/enter7.jpg", "teks" => "Spa"],
                        ["foto" => "imgphoto/enter8.jpg", "teks" => "Swimming Pool"],
                        ["foto" => "imgphoto/enter9.jpg", "teks" => "Sauna"],
                        ["foto" => "imgphoto/enter10.jpg", "teks" => "Sauna"],
                        ["foto" => "imgphoto/enter11.jpg", "teks" => "Massage"],
                        ["foto" => "imgphoto/enter12.jpg", "teks" => "Massage"],
                        ["foto" => "imgphoto/enter13.jpg", "teks" => "Bar"],
                        ["foto" => "imgphoto/enter14.jpg", "teks" => "Casino"],
                        ["foto" => "imgphoto/enter15.jpg", "teks" => "Bar"]
    ];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Pacifico&display=swap" rel="stylesheet">

    <title>Photos</title>
    <link rel="stylesheet" href="../required.css">
    <link rel="stylesheet" href="photoStyle.css">
    <link rel="icon" href="../logo.png" type="image/x-icon">
</head>
<body>
    <div class="container">
        <nav>
            <div class="logo">
                <h4>E-Hotel</h4>
            </div>

            <ul>
                <li><a href="../index.php" class="home">Home</a></li>
                <li><a href="#" class="photo">Photos</a></li>
                <li><a href="../room/room.php" class="room">Rooms</a>
                    <ul class="dropbar">
                        <li><a href="../room/room.php#deluxe">Deluxe Room</a></li>
                        <li><a href="../room/room.php#family">Family Room</a></li>
                        <li><a href="../room/room.php#suite">Suite Room</a></li>
                    </ul>
                </li>
                <li><a href="../about/about.php" class="about">About</a></li>
            </ul>

        </nav>
    </div>

    <div class="hero">
        <div class="deschero">
            <h2>PHOTOS</h2>
            <hr>
            <p>Photos Of Our Hotel</p>
        </div>
    </div>

    <div class="body1">
        <div class="container1">
            <a href="#room" class="clip clip1">
                <div class="content">
                    <h2>Rooms</h2>
                </div>
            </a>
            <a href="#dining" class="clip clip2">
                <div class="content">
                    <h2>Dining</h2>
                </div>
            </a>
            <a href="#enter" class="clip clip3">
                <div class="content">
                    <h2>Entertaiment</h2>
                </div>
            </a>
        </div>
    </div>


    <div class="body2">
        <h1 id="room">ROOMS</h1>
        <div class="set">
            <?php foreach ($rooms as $room) : ?>
                <div class="foto">
                    <img src="<?= $room["foto"]; ?>" alt="Room">
                    <span><?= $room["teks"]; ?></span>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <div class="body2">
        <h1 id="dining">DINING</h1>
        <div class="set">
            <?php foreach ($dinings as $dining) : ?>
                <div class="foto">
                    <img src="<?= $dining["foto"]; ?>" alt="Dining">
                    <span><?= $dining["teks"]; ?></span>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <div class="body2">
        <h1 id="enter">ENTERTAIMENT</h1>
        <div class="set">
            <?php foreach ($entertaiments as $entertaiment) : ?>
                <div class="foto">
                    <img src="<?= $entertaiment["foto"]; ?>" alt="Entertaiment">
                    <span><?= $entertaiment["teks"]; ?></span>
                </div>
            <?php endforeach; ?>
        </div>
    </div>




    <!-- <br><br><br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br><br><br> -->

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
                    <li><a href="#"><img src="../imgIndex/fb1.png" alt="" class="fb"></a></li>
                    <li><a href="#"><img src="../imgIndex/ig1.png" alt="" class="ig"></a></li>
                    <li><a href="#"><img src="../imgIndex/tweet1.png" alt="" class="tweet"></a></li>
                </ul>
            </div>
        </div>

        <div class="bawah">
            <p>2020 E-Hotel. All Rights Reserved.</p>
        </div>
    </div>
</body>
</html>