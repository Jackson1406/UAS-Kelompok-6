<?php
    require '../book/function.php';
    if (isset($_POST['submit'])) {
        if (contact($_POST) > 0 ) {
            echo "<script>alert('berhasil');</script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Pacifico&display=swap" rel="stylesheet">

    <title>About</title>
    <link rel="stylesheet" href="../required.css">
    <link rel="stylesheet" href="aboutStyle.css">
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
                <li><a href="#" class="about">About</a></li>
            </ul>

        </nav>
    </div>

    <div class="bod body1">
        <div class="content content1">
            <h1>VISSION</h1>
            <p>We aspire to be acknowledged regionally and accepted globally as one of the most efficiently managed hospitality groups wherein our staff at both managerial and service levels consistently strive to deliver the highest of service standards at all times and under all circumstances.</p>
        </div>
    </div>
    <div class="bod body2">
        <div class="content content2">
            <h1>MISSION</h1>
            <p>We are unswervingly committed in providing and delivering outstanding services and experiences to new and returning guests by exceeding their expectations of what we can offer, by recognizing and acknowledging our employees’ contributions and involvement, by ensuring fair and reasonable returns to our shareholders, and by being responsible, conscientious, trustworthy, and dependable corporate citizens.</p>
        </div>
    </div>
    <div class="bod body3">
        <div class="content content3">
            <h1>GOAL</h1>
            <p>Provide warm, sincere, and engaging service that ensures Guests feel valued
                Treat each and every Guest as a unique individual
                Anticipate our Guests’ needs with thoughtful and personal touches 
                Resolve Guest problems and never saying no without offering an alternative 
                Be ambassadors for our Brand, our Hotel, our Community and our Colleagues
                Our biggest goal is to find ways to make your life easier.</p>
        </div>
    </div>

    <div class="container2">
        <form class="body" action="" method="POST">
            <h1>CONTACT US</h1>
            <div class="block name">
                <label for="name">Name : </label>
                <input type="text" name="name" id="name" autocomplete="off" required>
            </div>
            <div class="block email">
                <label for="emial">E-Mail : </label>
                <input type="email" name="email" id="email" autocomplete="off" required>
            </div>
            <div class="block text">
                <label for="text">Message : </label>
                <textarea name="text" id="text" cols="30" rows="10" required></textarea>
            </div>
            <button type="submit" name="submit">SUBMIT</button>
        </form>
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