<?php
    include '../koneksi.php';

        $transaksi_id = $_GET['id'];

        $query_pakaian = mysqli_query($koneksi, "DELETE FROM pakaian WHERE transaksi_id = '$transaksi_id'");

        $query_transaksi = mysqli_query($koneksi, "DELETE FROM transaksi WHERE transaksi_id = '$transaksi_id'");

            echo "<script>
                alert('Data transaksi dan pakaian berhasil dihapus!');
                window.location='transaksi.php';
            </script>";
    

?>