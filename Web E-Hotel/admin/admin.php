<?php 

    require '../book/function.php';
    if ( !isset($_SESSION["login"])) {
        header("location: login.php");
        exit;
    }
    
    $hasil = query("SELECT * FROM harga");
    $feeds = query("SELECT * FROM contact");
    //var_dump($hasil["gambar"])
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="adminStyle.css">
    
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Pacifico&display=swap" rel="stylesheet">
</head>
<body>
    <div class="bg_admin">
        <div class="navbar">
            <h4>E-Hotel</h4>
            <h1>ADMIN</h1>
            <a href="hapus.php">Logout</a>
        </div>
        
        
        
        <br><br>
        <table border="1" cellpadding="10" cellspacing="0" class="table1">
            <tr>
                <th>No.</th>
                <th>Gambar</th>
                <th>Jenis Kamar</th>
                <th>Harga</th>
                <!-- <th>tanggal update</th> -->
                <th>action</th>
            </tr>

            <?php $i = 1;?>
            <?php foreach ($hasil as $data) :?>
            <tr>
                <td><?= $i; ?></td>
                <td><img src="../room/imgRoom/<?= $data["gambar"]; ?>" width="100"></td>
                <td><?= $data["jenis"]; ?></td>
                <td><?= $data["harga"]; ?></td>
                <!-- <td><?= $data["tanggal update"]; ?></td> -->
                <td><a href="update.php?id=<?= $data["id"]; ?>">update</a></td>
            </tr>
            <?php $i++;?>
            <?php endforeach; ?>

        </table>

        <br><br><br><br><br>

        <table border="1" cellpadding="10" cellspacing="0" class="table2">
            <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Feedback</th>
                <th>Action</th>
            </tr>

            <?php $i = 1;?>
            <?php foreach ($feeds as $feed) :?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $feed["nama"]; ?></td>
                <td><?= $feed["email"]; ?></td>
                <td><?= $feed["msg"]; ?></td>
                <td><a href="delete.php?id=<?= $feed["id"]; ?>" onclick="return confirm('yakin?');">Hapus</a></td>
            </tr>
            <?php $i++;?>
            <?php endforeach; ?>

        </table>
    <br><br>
    </div>
    
</body>
</html>