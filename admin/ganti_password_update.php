<?php
    include '../koneksi.php';

    $password = $_POST['password'];

    mysqli_query($koneksi, "UPDATE admin SET password='$password'");

    echo "<script>alert('Password telah Diubah'); window.location.href='ganti_password.php'</script>";
?>