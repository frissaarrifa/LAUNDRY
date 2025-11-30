<?php
    include "../koneksi.php";

    $dari = $_GET['dari'];
    $sampai = $_GET['sampai'];
?>

<html>
    <head>
        <title>Laporan Laundry</title>
    </head>
    <body>
        <br><br><br><br>

        <h3 align="center">LAPORAN TRANSAKSI LAUNDRY</h3>
        <p align="center">Periode: <b><?php echo $dari; ?></b> sampai <b><?php echo $sampai; ?></b></p>

        <br><br>
        <table border="1" cellspacing="0" cellpadding="5" width="100%">
            <tr>
                <th>No</th>
                <th>Invoice</th>
                <th>Tanggal</th>
                <th>Pelanggan</th>
                <th>Berat (kg)</th>
                <th>Tgl Selesai</th>
                <th>Harga</th>
                <th>Status</th>
            </tr>

            <?php
                $no = 1;
                $query = mysqli_query($koneksi, "SELECT * FROM pelanggan, transaksi WHERE pelanggan.pelanggan_id = transaksi.pelanggan_id AND DATE(transaksi_tanggal) >= '$dari'AND DATE(transaksi_tanggal) <= '$sampai'ORDER BY transaksi_id DESC");

                while ($d = mysqli_fetch_array($query)) {
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td>INVOICE-<?php echo $d['transaksi_id']; ?></td>
                <td><?php echo $d['transaksi_tanggal']; ?></td>
                <td><?php echo $d['pelanggan_nama']; ?></td>
                <td><?php echo $d['transaksi_berat']; ?></td>
                <td><?php echo $d['transaksi_tgl_selesai']; ?></td>
                <td><?php echo "Rp." . number_format($d['transaksi_harga']); ?></td>
                <td>
                    <?php
                        if($d['transaksi_status'] == "0"){
                            echo "<div class='label label-warning'>PROSES</div>";
                        }else if($d['transaksi_status'] == "1"){
                            echo "<div class='label label-info'>DICUCI</div>";
                        }else if($d['transaksi_status'] == "2"){
                            echo "<div class='label label-success'>SELESAI</div>";
                        }
                    ?>
                </td>          
            </tr>

            <?php 
                } 
            ?>
        </table>

        <script type="text/javascript">
            window.print();
        </script>
            
    </body>
</html>