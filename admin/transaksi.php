<?php
include 'header.php';
include '../koneksi.php';

?>

<div class="container">
    <br><br><br>
    <div class="col-md-12">
        <div class="panel">
            <div class="panel-heading">
                <h4>Data Transaksi Laundry</h4>
                <a href="transaksi_tambah.php" class="btn btn-sm btn-info pull-right">Transaksi Baru</a>
            </div>
            <div class="panel-body">

                <table class="table table-bordered table-striped">
                    <td>
                        <tr>
                            <th width="1%">No</th>
                            <th>Invoice</th>
                            <th>Tanggal</th>
                            <th>Pelanggan</th>
                            <th>Berat (Kg)</th>
                            <th>Tgl. Selesai</th>
                            <th>Harga</th>
                            <th>Status</th>
                            <th widht="20%">OPSI</th>
                        </tr>
                    </td>
                    <?php
                        $no = 1;
                        $data = mysqli_query($koneksi, "select * from pelanggan , transaksi where transaksi.pelanggan_id = pelanggan.pelanggan_id order by transaksi_id desc");
                        while ($d=mysqli_fetch_array($data)){

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
                            <td>
                                <a href="transaksi_invoice.php?id=<?php echo $d['transaksi_id']; ?>" target="_blank" class="btn btn-sm btn-warning">Invoice</a>
                                <a href="transaksi_edit.php?id=<?php echo $d['transaksi_id']; ?>" class="btn btn-sm btn-info">Edit</a>
                                <a href="transaksi_hapus.php?id=<?php echo $d['transaksi_id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin membatalkan transaksi ini?')">Batalkan</a>
                            </td>
                        </tr>

                        <?php 
                         } 
                        ?>
                    
                </table>

            </div>
        </div>
    </div>
</div>