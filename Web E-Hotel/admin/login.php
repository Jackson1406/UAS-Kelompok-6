<?php 
    require '../book/function.php';

    if ( isset($_POST["login"])) {
        $username = $_POST["id"];
        $pass = $_POST["password"];
    
        $result = mysqli_query($conn, "SELECT * FROM adminhotel WHERE id = 1 ");
    
        if (mysqli_num_rows($result) === 1 ) {
            $a = mysqli_fetch_assoc($result);
            if ( $pass == $a["pass"] ) {
                $_SESSION["login"] = true;
                header('location: admin.php');
                exit;
            }
        }
    $error = true;
    }
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <link rel="stylesheet" href="adminStyle.css">
</head>
<body>
    <div class="bg_login">

        <?php if ( isset($error) ) : ?>
            <script>alert('Username/Password salah');</script>

        <?php endif; ?>

        <div class="cont_login">
            <h1>Admin Login</h1>
            <form action="" method="POST" class="form">
                    <div class="block id">
                        <label for="id">username : </label>
                        <input type="text" name="id" id="id" autocomplete="off" require>
                    </div>
                    <div class="block pass">
                        <label for="pass">password : </label>
                        <input type="password" name="password" id="pass">
                    </div>
                    <button type="submit" name="login">login</button>
            </form>
        </div>
    </div>
</body>
</html>