<?php
    //$conn = mysqli_connect("localhost", "root", "", "ehotel");
    require 'function.php';

    if (isset($_POST["submit"]) ) {

        if (masukan($_POST) > 0 ) {
            echo "<script>alert('booking berhasil');</script>";
            header("location: ../confirmation/complete.php");
            exit;
        } 
    } 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Pacifico&display=swap" rel="stylesheet">

    <title>Form Booking</title>
    <link rel="stylesheet" href="../required.css">
    <link rel="stylesheet" href="bookingStyle.css">
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
                <li><a href="../photo/photo.php" class="photo">Photos</a></li>
                <li><a href="../room/room.php" class="">Rooms</a>
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

    <h1>RESERVATION</h1>
    <div class="container1">
        <div class="container2">
            <form action="" method="POST" class="body1" onsubmit="return check()">
                <div class="check">
                    <div class="block in">
                        <label for="checkIn">Check-In Date</label>
                        <input type="date" name="checkIn" id="checkIn" min="<?= $today;?>" value="<?= $today;?>">
                    </div>
                    <div class="block out">
                        <label for="checkOut">Check-Out Date</label>
                        <input type="date" name="checkOut" id="checkOut" min="<?= $tommorow;?>" value="<?= $tommorow;?>">
                    </div>
                </div>

                <div class="block name">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" placeholder="Your Name" autocomplete="off" min="2" >
                    <span id="message1"></span>
                </div>

                <div class="block numbers">
                    <label for="numbers">Phone Numbers</label>
                    <input type="text" name="numbers" id="numbers" placeholder="Your Phone Number" autocomplete="off" >
                    <span id="message2"></span>
                </div>

                <div class="drop">
                    <div class="block roomType">
                        <label for="type">Room Type</label>
                        <select name="type" id="type">
                            <optgroup label="Deluxe Room">
                                <option value="Single Deluxe">Single Deluxe</option>
                                <option value="Double Deluxe">Double Deluxe</option>
                            </optgroup>
                            <optgroup label="family Room">
                                <option value="Family Standard">Family Standrad</option>
                                <option value="Family Premium">Family Premium</option>
                            </optgroup>
                            <optgroup label="Suite Room">
                                <option value="Executive Suite">Executive Suite</option>
                                <option value="Presidental Suite">Presidental Suite</option>
                            </optgroup>
                        </select>
                    </div>

                    <div class="block quantity">
                        <label for="quantity">Rooms</label>
                        <select name="quantity" id="quantity" size="1">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select>
                    </div>
                </div>

                <div class="block email">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="Your Email" autocomplete="off" >
                    <span id="message3"></span>
                </div>
                <div class="block cEmail">
                    <label for="conEmail">Confirm Email</label>
                    <input type="email" name="conEmail" id="conEmail" placeholder="Your Email" autocomplete="off" >
                    <span id="message4"></span>
                </div>
                <button type="submit" name="submit">Submit</button>
            </form>



        </div>
    </div>

<!-- 
    <br><br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br><br> -->


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

    
    

    <script>
        function check() {
            var nama = document.getElementById("name").value;
            var nomor = document.getElementById("numbers").value;
            var email = document.getElementById("email").value;
            var email2 = document.getElementById("conEmail").value;
            var waktu = document.getElementById("checkIn").value;
            
            if (nama == "") {
                document.getElementById("message1").innerHTML=" ** please fill your name";
                    return false;
            } else {
                document.getElementById("message1").innerHTML="";
            }

            if (nomor == "") {
                document.getElementById("message2").innerHTML=" ** please fill your number";
                    return false;
            } else {
                document.getElementById("message2").innerHTML="";
            }

            if (email == "") {
                document.getElementById("message3").innerHTML=" ** please fill your email";
                    return false;
            } else {
                document.getElementById("message3").innerHTML="";
            }

            if (email2 == "") {
                document.getElementById("message4").innerHTML=" ** please fill your email";
                    return false;
            } else {
                document.getElementById("message4").innerHTML="";
            }
            if (email2 !== email) {
                document.getElementById("message4").innerHTML=" ** your email doesn't match";
                    return false;
            } else {
                document.getElementById("message4").innerHTML="";
            }
        }
    </script>

</body>
</html>