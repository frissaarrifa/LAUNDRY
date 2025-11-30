<?php
    include '../koneksi.php';

    $harga = $_POST['harga'];

    mysqli_query($koneksi, "update harga set harga_per_kilo='$harga'");

    echo "<script>alert('Harga telah Diubah'); window.location.href='harga.php'</script>";


?>