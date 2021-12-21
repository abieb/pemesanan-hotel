<?php
if (!isset($_GET['menu'])) {
  header('location:index.php?menu=laporan');
}

?>
<!DOCTYPE html>
<html>

<head>
  <title>PEMESANAN</title>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="panel panel-default">
        <div class="panel-heading">LAPORAN PEMESANAN HOTEL</div>
        <div class="panel-body">
          <!-- <form method="post" action="?menu=print.php">
            <div class="form-group">
              <label>Pilih Bulan</label><br>
              <select name="bulan" class="form-control">
                <option value="">--</option>
                <option value="Januari">Januari</option>
                <option value="Februari">Februari</option>
                <option value="Maret">Maret</option>
                <option value="April">April</option>
                <option value="Mei">Mei</option>
                <option value="Juni">Juni</option>
                <option value="Juli">Juli</option>
                <option value="Agustus">Agustus</option>
                <option value="September">September</option>
                <option value="Oktober">Oktober</option>
                <option value="November">November</option>
                <option value="Desember">Desember</option>
              </select>
            </div>
            <div class="form-group">
              <input type="submit" name="bsimpan" id="bsimpan" class="btn btn-primary btn-lg btn-block" value="Cetak Laporan">
            </div>
          </form> -->

          <table class="table table-bordered table-striped table-hover">
            <thead>
              <th style="text-align: center;">No.</th>
              <th style="text-align: center;">Kode Tamu</th>
              <th style="text-align: center;">Nama Tamu</th>
              <th style="text-align: center;">Tanggal Inap</th>
              <th style="text-align: center;">Tanggal Keluar</th>
              <th style="text-align: center;">No Kamar</th>
              <th style="text-align: center;">Jenis Kamar</th>
              <th style="text-align: center;">Tarif/Malam</th>
              <th style="text-align: center;">Lama Inap</th>
              <th style="text-align: center;">Total Bayar</th>
            </thead>
            <tbody>
              <?php
              $no = 1;
              include('../config/koneksi.php');
              $data = mysqli_query($koneksi, 'select * from tabel_tamu join tabel_inap on tabel_tamu.kode_tamu = tabel_inap.kode_tamu');
              while ($r = mysqli_fetch_array($data)) {
                if ($r['jenis_kamar'] == 'Single') {
                  $tarif = '150000';
                } else if ($r['jenis_kamar'] == 'Double') {
                  $tarif = '250000';
                } else if ($r['jenis_kamar'] == 'Suite') {
                  $tarif = '425000';
                } else if ($r['jenis_kamar'] == 'VIP') {
                  $tarif = '550000';
                }

                $selisih = ((abs(strtotime($r['tgl_keluar']) - strtotime($r['tgl_inap']))) / (60 * 60 * 24));
                $total = $tarif * $selisih;

              ?>




                <tr>
                  <td><?php echo $no++; ?>.</td>
                  <td><?php echo $r['kode_tamu'] ?></td>
                  <td><?php echo $r['nama_tamu'] ?></td>
                  <td><?php echo $r['tgl_inap'] ?></td>
                  <td><?php echo $r['tgl_keluar'] ?></td>
                  <td><?php echo $r['no_kamar'] ?></td>
                  <td><?php echo $r['jenis_kamar'] ?></td>
                  <td><?php echo $tarif ?></td>
                  <td><?php echo $selisih ?></td>
                  <td><?php echo $total ?></td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
        <div class="panel-footer">&nbsp;</div>
      </div>
    </div>
  </div>
</body>



</html>