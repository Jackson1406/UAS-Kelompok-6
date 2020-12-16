<?php 
    require '../book/function.php';

    $id = $_GET["id"];

    if ( delete($id) > 0) {
        echo "
            <script>
                alert('Berhasil dihapus');
                document.location.href = 'admin.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Gagal dihapus');
                document.location.href = 'admin.php';
            </script>
        "; }

?>