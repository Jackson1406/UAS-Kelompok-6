<?php 
    $conn = mysqli_connect("localhost", "root", "", "ehotel");
    //$ambil = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM harga WHERE id = 2"));
    //$hasil = mysqli_fetch_assoc($ambil);
    //var_dump($ambil["gambar"]);
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Pacifico&display=swap" rel="stylesheet">
    
    <title>Rooms</title>
    <link rel="stylesheet" href="../required.css">
    <link rel="stylesheet" href="roomStyle.css">
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
                <li><a href="../photo/photo.php">Photos</a></li>
                <li><a href="#" class="rooms">Rooms</a>
                    <ul class="dropbar">
                        <li><a href="room.php#deluxe">Deluxe Room</a></li>
                        <li><a href="room.php#family">Family Room</a></li>
                        <li><a href="room.php#suite">Suite Room</a></li>
                    </ul>
                </li>
                <li><a href="../about/about.php">About</a></li>
            </ul>

        </nav>
    </div>

    <div class="hero">
        <div class="deschero">
            <h2>ROOM TYPES</h2>
            <hr>
            <p>Treat Yourself to a luxurious Break</p>
        </div>
    </div>







<!--                                        deluxe                                       -->
    <div class="title">
        <h1 id="deluxe">DELUXE ROOM</h1>
        <hr>
    </div>

    <div class="bodypack">
        <div class="set">
        <?php $ambil = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM harga WHERE id = 1")); ?>
            <div class="foto">
                <a href="../book/booking.php">
                    <img src="imgRoom/<?= $ambil["gambar"]; ?>" alt="">
                    <span>BOOK NOW</span>
                </a>
            </div>
            <div class="desc">
                <div class="expl">
                    <h2><?= $ambil["jenis"]; ?></h2>
                    <ul>
                        <li>Rain Shower and Bathtub</li>
                        <li>Non Smoking</li>
                        <li>Single Bed</li>
                        <li>50 m2</li>
                    </ul>
                </div>
                <div class="price">Rp<?= $ambil["harga"]; ?>/night</div>
            </div>
        </div>

        <div class="set">
        <?php $ambil = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM harga WHERE id = 2")); ?>
            <div class="foto">
                <a href="../book/booking.php">
                    <img src="imgRoom/<?= $ambil["gambar"]; ?>" alt="">
                    <span>BOOK NOW</span>
                </a>
            </div>
            <div class="desc">
                <div class="expl">
                    <h2><?= $ambil["jenis"]; ?></h2>
                    <ul>
                        <li>Rain Shower and Bathtub</li>
                        <li>Non Smoking</li>
                        <li>1 king or 2 single bed</li>
                        <li>70 m2</li>
                    </ul>
                </div>
                <div class="price">Rp<?= $ambil["harga"]; ?>/night</div>
            </div>
        </div>
    </div>






<!--                                        family                                       -->
    <div class="title">
        <h1 id="family">FAMILY ROOM</h1>
        <hr>
    </div>

    <div class="bodypack">
        <div class="set">
        <?php $ambil = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM harga WHERE id = 3")); ?>
            <div class="foto">
                <a href="../book/booking.php">
                    <img src="imgRoom/<?= $ambil["gambar"]; ?>" alt="">
                    <span>BOOK NOW</span>
                </a>
            </div>
            <div class="desc">
                <div class="expl">
                    <h2><?= $ambil["jenis"]; ?></h2>
                    <ul>
                        <li>Rain Shower and Bathtub</li>
                        <li>Non Smoking</li>
                        <li>1 king bed, 2 single bed</li>

                        <li>Safety Deposit Box</li>
                        <li>130 m2</li>
                    </ul>
                </div>
                <div class="price">Rp<?= $ambil["harga"]; ?>/night</div>
            </div>
        </div>

        <div class="set">
        <?php $ambil = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM harga WHERE id = 4")); ?>
            <div class="foto">
                <a href="../book/booking.php">
                    <img src="imgRoom/<?= $ambil["gambar"]; ?>" alt="">
                    <span>BOOK NOW</span>
                </a>
            </div>
            <div class="desc">
                <div class="expl">
                    <h2><?= $ambil["jenis"]; ?></h2>
                    <ul>
                        <li>Rain Shower and Bathtub</li>
                        <li>Non Smoking</li>
                        <li>1 king bed, 1 queen bed, 2 single bed</li>
                        <li>Safety Deposit Box</li>
                        <li>200 m2</li>
                    </ul>
                </div>
                <div class="price">Rp<?= $ambil["harga"]; ?>/night</div>
            </div>
        </div>
    </div>






<!--                                        suite                                       -->
    <div class="title" id="suite">
        <h1>SUITE ROOM</h1>
        <hr>
    </div>

    <div class="bodypack">
        <div class="set">
        <?php $ambil = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM harga WHERE id = 5")); ?>
            <div class="foto">
                <a href="../book/booking.php">
                    <img src="imgRoom/<?= $ambil["gambar"]; ?>" alt="">
                    <span>BOOK NOW</span>
                </a>
            </div>
            <div class="desc">
                <div class="expl">
                    <h2><?= $ambil["jenis"]; ?></h2>
                    <ul>
                        <li>Rain Shower and Bathtub</li>
                        <li>Non Smoking</li>
                        <li>1 king or 2 single bed</li>
                        <li>Kitchenette and Dining Doom</li>
                        <li>Safety Deposit Box</li>
                        <li>100 m2</li>
                    </ul>
                </div>
                <div class="price">Rp<?= $ambil["harga"]; ?>/night</div>
            </div>
        </div>

        <div class="set">
        <?php $ambil = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM harga WHERE id = 6")); ?>
            <div class="foto">
                <a href="../book/booking.php">
                  <img src="imgRoom/<?= $ambil["gambar"]; ?>" alt="">
                 <span>BOOK NOW</span>
                </a>
            </div>
            <div class="desc">
                <div class="expl">
                    <h2><?= $ambil["jenis"]; ?></h2>
                    <ul>
                        <li>Rain Shower and Bathtub</li>
                        <li>Non Smoking</li>
                        <li>2 king bed, 3 queen bed</li>
                        <li>Kitchenette and Dining Room</li>
                        <li>Seperated Living Room</li>
                        <li>Safety Deposit Box</li>
                        <li>230 m2</li>
                    </ul>
                </div>
                <div class="price">Rp<?= $ambil["harga"]; ?>/night</div>
            </div>
        </div>
    </div>


    
    <br><br><br><br><br><br><br><br><br><br>
    <!-- <br><br><br><br><br><br><br><br><br><br>
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