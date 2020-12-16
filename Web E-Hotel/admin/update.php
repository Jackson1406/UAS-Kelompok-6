<?php 
    require '../book/function.php';
    
    if ( !isset($_SESSION["login"])) {
        header("location: login.php");
        exit;
    }

    $id = $_GET["id"];
    $hasil = query("SELECT * FROM harga WHERE id = $id")[0];
    //var_dump($hasil["harga"]);

    if (isset($_POST["submit"]) ) {
        
        if (update($_POST) > 0 ) {
            echo "<script>alert('berhasil');</script>";
            header("location: admin.php");
            exit;
        } else {
            echo "<script>alert('Tidak ada perubahan');</script>";
            header("location: admin.php");
        }
        
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link rel="stylesheet" href="adminStyle.css">
</head>
<body>
    <div class="bg_update">
        <div class="cont_update">
            <h1>UPDATE</h1>
            <form action="" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $hasil["id"]?>">
                <input type="hidden" name="gambarLama" value="<?=$hasil["gambar"]; ?>">
                    <div class="batch jenis">
                        <label for="jenis">Jenis Kamar : </label>
                        <input type="text" name="jenis" id="jenis" value="<?= $hasil["jenis"]; ?>" require autocomplete="off">
                    </div>
                    <div class="batch harga">
                        <label for="harga">Harga : </label>
                        <input type="number" name="harga" id="harga" value="<?= $hasil["harga"]; ?>" require autocomplete="off">
                    </div>
                    <div class="batch gambar">
                        <label for="gambar">Gambar : </label>
                        <img src="../room/imgRoom/<?=$hasil["gambar"]; ?>" width="100">
                        <input type="file" name="gambar" id="gambar">
                    </div>
                <button type="submit" name="submit">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>