<?php
    include '../koneksi.php';

    $pelanggan = $_POST['pelanggan'];
    $berat = $_POST['berat'];
    $tgl_selesai = $_POST['tgl_selesai'];
    $tgl_hari_ini = date('y-m-d');
    $status = 0;

    $h = mysqli_query($koneksi , "select harga_per_kilo from harga");
    $harga_per_kilo = mysqli_fetch_assoc($h);
    $harga = $berat * $harga_per_kilo['harga_per_kilo'];

    mysqli_query($koneksi , "insert into transaksi values('' , '$tgl_hari_ini' , '$pelanggan' , '$harga' , '$berat' , '$tgl_selesai' , '$status')");

    $id_terakhir = mysqli_insert_id($koneksi);
    $pakaian_jenis = $_POST['pakaian_jenis'];
    $pakaian_jumblah = $_POST['pakaian_jumblah'];
    
    for ($x=0; $x < count($pakaian_jenis); $x++) {
        if ($pakaian_jenis[$x] !=""){
            mysqli_query($koneksi , "insert into pakaian values('' , '$id_terakhir' , '$pakaian_jenis[$x]' , '$pakaian_jumblah[$x]')");
        }
    }

    echo "<script>alert('Data Berhasil Di Simpan?'); window.location.href='transaksi.php'</script>";
?>