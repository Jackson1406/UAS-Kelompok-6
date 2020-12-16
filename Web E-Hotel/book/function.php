<?php
    session_start();
    require 'PHPMailer/PHPMailerAutoload.php';
    $conn = mysqli_connect("localhost", "root", "", "ehotel");
    $today=date('Y-m-d'); 
    $a=time()+86400;
    $tommorow=date('Y-m-d', $a);
    
    function masukan ($data) {
        global $conn;
        $code = rand(100000, 999999);
        $nama = $data["name"];
        $nomor = $data["numbers"];
        $jenis = $data["type"];
        $banyak = $data["quantity"];
        $email = htmlspecialchars($data["email"]);
        $conEmail = htmlspecialchars($data["conEmail"]);
        $in = $data["checkIn"];
        $out = $data["checkOut"];


        $cek = strtotime("$out") - strtotime("$in");
        $hasil = floor($cek/86400);
        if ($hasil < 1) {
            echo "<script>alert('Tanggal check out harus lebih dari tanggal check in!');</script>";
            return false;
        } 
        
        $cari = mysqli_query($conn, "SELECT * FROM harga WHERE jenis = '$jenis' ");
        $hrg = mysqli_fetch_assoc($cari);
        $harga = $hrg["harga"] * $hasil * $banyak;
        // $a = $hrg;
        // var_dump($a);

        //die;


        $insert = "INSERT INTO reservation VALUES
                    ('', '$nama', '$nomor', '$code', '$jenis', '$banyak', '$email', '$in', '$out', '$harga') ";

        mysqli_query($conn, $insert);
        
        $_SESSION["berhasil"] = true;

        $msg = "<p>Dear Mr/Ms $nama,</p>
                <p>Thanks for making a reservation at <b>E-Hotel</b>.</p>
                <p>Here, we sent you a copy  of your reservation code <b>'$code'</b>, please show us your code when you check-in at our hotel.</p>
                <p>You have made a reservation at E-Hotel of $banyak $jenis room for $hasil nights from $in to $out for Rp.$harga.</p>
                <p>If you have any question, you can e-mail us or visit our social media. Thanks for trusting us, see you soon at E-Hotel.</p>";
        


        //sending mail
            $mail = new PHPMailer;

            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'ehotel888@gmail.com';
            $mail->Password = 'rahasianegara';
            $mail->SMTPSecure = 'ssl';
            $mail->Port = 465;

            $mail->setFrom('ehotel888@gmail.com');
            $mail->addAddress($email);

            $mail->isHTML(true);

            $mail->Subject = 'Ehotel Reservation';
            $mail->Body    = $msg;

            if($mail->send()) {
                echo 'Message has been sent';
                return mysqli_affected_rows($conn);
            } else {
                echo 'Message could not be sent.';
                echo 'Mailer Error: ' . $mail->ErrorInfo;
            }

        
    }


    function query($query) {
        global $conn;
        $result = mysqli_query($conn, $query);
        $data = [];
        while ($datas = mysqli_fetch_assoc($result)) {
            $data[] = $datas;
        }
        return $data;
    }
    
    
    function update($data) {
        global $conn;
        $id = $data["id"];
        $jenis = htmlspecialchars($data["jenis"]);
        $harga = htmlspecialchars($data["harga"]);
        $gambarLama = ($data["gambarLama"]);

        // $gambar = upload();
        // if ( !$gambar ) {
        //     echo "<script>alert('gambar upload salah');</script>";
        //     var_dump($gambar);
        //     return false;
        // }

        if ( $_FILES["gambar"]["error"] === 4) {
            $gambar = $gambarLama;
        } else {
            $gambar = upload();
        }

        $update = "UPDATE harga SET
                    jenis = '$jenis',
                    harga = '$harga',
                    gambar = '$gambar'
                    WHERE id = $id ";

        mysqli_query($conn, $update);

        return mysqli_affected_rows($conn);
    }


    function upload() {
        $namaFile = $_FILES['gambar']['name'];
        $sizeFile = $_FILES['gambar']['size'];
        $error = $_FILES['gambar']['error'];
        $tmpName = $_FILES['gambar']['tmp_name'];

        $valid = ['jpg', 'jpeg'];
        $ekstensiGambar = explode('.', $namaFile);
        $ekstensiGambar = strtolower(end($ekstensiGambar));
      
        if( !in_array($ekstensiGambar, $valid) ) {
            echo "<script>alert('yang diupload bukan gambar');</script>";
            return false;
        }

        if ( $sizeFile > 1000000) {
            echo "<script>alert('gagal, ukuran terlalu besar');</script>";
            return false;
        }

        move_uploaded_file($tmpName, '../room/imgRoom/' . $namaFile);

        return $namaFile;
    }


    function contact($data) {
        global $conn;
        $nama = $data["name"];
        $email = $data["email"];
        $msg = $data["text"];

        $insert = "INSERT INTO contact VALUES
                    ('', '$nama', '$email', '$msg') ";

        mysqli_query($conn, $insert);
        return mysqli_affected_rows($conn);
    }

    function delete($id) {
        global $conn;
        mysqli_query($conn, "DELETE FROM contact WHERE id = $id");
        return mysqli_affected_rows($conn);
    }

?>