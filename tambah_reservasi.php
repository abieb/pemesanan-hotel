<?php
if (!isset($_GET['menu'])) {
	header('location:hal_utama.php?menu=tambah_reservasi');
}

?>
<!DOCTYPE html>
<html>

<head>
	<title>Reservasi</title>
</head>

<body>
	<div class="container" style="width: 25%;">
		<div class="row">
			<!-- <div class="col-md-10"> -->
			<!-- <div class="col-md-3"> -->
			<div class="panel panel-default">
				<div class="panel-heading">PEMESANAN HOTEL</div>
				<div class="panel-body">
					<form method="post" action="simpan_reservasi.php">
						<!-- <div class="col-md-12"> -->
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
							<label>Kode Tamu</label>
							<select name="kode_tamu" class="form-control" required>
								<option value="">--</option>
								<?php
								include('../config/koneksi.php');
								$a = mysqli_query($koneksi, "select * from tabel_tamu");
								while ($data = mysqli_fetch_array($a)) { ?>
									<option value="<?php echo $data['kode_tamu'] ?>"><?php echo $data['kode_tamu']; ?></option>
								<?php } ?>
							</select>
						</div>
						<div class="form-group">
							<label>Tanggal Inap</label>
							<input type="date" class="form-control" name="tgl_inap"></input>

						</div>
						<div class="form-group">
							<label>Tanggal Keluar</label>
							<input type="date" class="form-control" name="tgl_keluar"></input>

						</div>
						<div class="form-group">
							<label>No Kamar</label>
							<input type="input" class="form-control" name="no_kamar" id="no_kamar"></input>

						</div>
						<div class="form-group">
							<label>Jenis Kamar</label>
							<select name="jenis_kamar" class="form-control" required>
								<option value="">--</option>
								<option value="Single">Single</option>
								<option value="Double">Double</option>
								<option value="Suite">Suite</option>
								<option value="VIP">VIP</option>
							</select>
						</div>
						<div class="form-group">
							<input type="submit" name="bsimpan" id="bsimpan" class="btn btn-primary btn-lg btn-block" value="Simpan">
							<!-- <a href="?menu=pelanggan" class="btn btn-danger btn-lg btn-block">RESET</a> -->
						</div>
						<!-- </div> -->
					</form>
				</div>
				<div class="panel-footer">&nbsp;</div>
			</div>
			<!-- </div> -->

			<!-- </div> -->
		</div>
	</div>
</body>



</html>