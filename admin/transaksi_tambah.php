<?php
    include 'header.php';
    include '../koneksi.php';
?>

<div class="container">
        <br><br><br>
        <div class="panel">
            <div class="panel-heading">
                <h4>Tambah Transaksi Baru</h4>
            </div>
            <div class="panel-body">
                <div class="col-md-8 col-md-offset-2">
                    <a href="transaksi.php" class="btn btn-sm btn-info pull-right">Kembali</a>
                    <br><br>
                    <form method="POST" action="transaksi_aksi.php">
                        <div class="form-group">
                            <label>Pelanggan</label>
                            <select class="form-control"name="pelanggan" required="required">
                                <option value="">- Pilih Pelanggan</option>

                                <?php
                                    $data = mysqli_query($koneksi , "select * from pelanggan");
                                    while ($d=mysqli_fetch_array($data)){
                                ?>
                                    <option value="<?php echo $d['pelanggan_id']; ?>"><?php echo $d['pelanggan_nama']; ?></option>
                                <?php
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Berat</label>
                            <input type="number" name="berat" class="form-control" placeholder="Masukkan Berat Cucian" required="required">
                        </div>
                        <div class="form-group">
                            <label>Tanggal Selesai</label>
                            <input type="date" name="tgl_selesai" class="form-control" required="required">
                        </div>
                        <br>
                        <table class="table table-bordered table-striped">
                            <tr>
                                <th>Jenis Pakaian</th>
                                <th widht="20%">Jumlah</th>
                            </tr>
                            <tr>
                                <td><input type="text" name="pakaian_jenis[]" class="form-control"></td>
                                <td><input type="number" name="pakaian_jumblah[]" class="form-control"></td>
                           </tr>
                           <tr>
                                <td><input type="text" name="pakaian_jenis[]" class="form-control"></td>
                                <td><input type="number" name="pakaian_jumblah[]" class="form-control"></td>
                           </tr>
                           <tr>
                                <td><input type="text" name="pakaian_jenis[]" class="form-control"></td>
                                <td><input type="number" name="pakaian_jumblah[]" class="form-control"></td>
                           </tr>
                           <tr>
                                <td><input type="text" name="pakaian_jenis[]" class="form-control"></td>
                                <td><input type="number" name="pakaian_jumblah[]" class="form-control"></td>
                           </tr>
                           <tr>
                                <td><input type="text" name="pakaian_jenis[]" class="form-control"></td>
                                <td><input type="number" name="pakaian_jumblah[]" class="form-control"></td>
                           </tr>
                           <tr>
                                <td><input type="text" name="pakaian_jenis[]" class="form-control"></td>
                                <td><input type="number" name="pakaian_jumblah[]" class="form-control"></td>
                           </tr>
                           <tr>
                                <td><input type="text" name="pakaian_jenis[]" class="form-control"></td>
                                <td><input type="number" name="pakaian_jumblah[]" class="form-control"></td>
                           </tr>
                           <tr>
                                <td><input type="text" name="pakaian_jenis[]" class="form-control"></td>
                                <td><input type="number" name="pakaian_jumblah[]" class="form-control"></td>
                           </tr>
                           <tr>
                                <td><input type="text" name="pakaian_jenis[]" class="form-control"></td>
                                <td><input type="number" name="pakaian_jumblah[]" class="form-control"></td>
                           </tr>
                           <tr>
                                <td><input type="text" name="pakaian_jenis[]" class="form-control"></td>
                                <td><input type="number" name="pakaian_jumblah[]" class="form-control"></td>
                           </tr>
                           
                          
                        </table>
                        <input type="submit" class="btn btn-primary" value="Simpan">

                    </form>
                </div>
            </div>
        </div>

</div>