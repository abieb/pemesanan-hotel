<?php
if (!isset($_GET['menu'])) {
	header('location:index.php.?menu=reservasi');
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
			<div class="col-md-20">
				<div class="col-md-20">
					<div class="panel panel-default">
						<div class="panel-heading">DAFTAR PEMESANAN</div>
						<div class="panel-body">
							<!-- <div class="col-md-10"> -->
							<div class="table-responsive">
								<table class="table table-bordered table-striped table-hover">
									<thead>
										<!-- <th style="text-align: center;">No.</th> -->
										<th style="text-align: center;">ID Inap</th>
										<th style="text-align: center;">Kode Tamu</th>
										<th style="text-align: center;">Bulan</th>
										<th style="text-align: center;">Tanggal Inap</th>
										<th style="text-align: center;">Tanggal Keluar</th>
										<th style="text-align: center;">No Kamar</th>
										<th style="text-align: center;">Jenis Kamar</th>
										<!-- <th colspan="2"><center>AKSI</center></th> -->
									</thead>
									<tbody>
										<?php
										// $no = 1;
										include('../config/koneksi.php');
										$data = mysqli_query($koneksi, 'select * from tabel_inap');
										// $data = $aksi->tampil($table,$cari,"");
										while ($r = mysqli_fetch_array($data)) {
										?>
											<tr>

												<td><?php echo $r['id_inap'] ?></td>
												<td><?php echo $r['kode_tamu'] ?></td>
												<td><?php echo $r['bulan'] ?></td>
												<td><?php echo $r['tgl_inap'] ?></td>
												<td><?php echo $r['tgl_keluar'] ?></td>
												<td><?php echo $r['no_kamar'] ?></td>
												<td><?php echo $r['jenis_kamar'] ?></td>
											</tr>
										<?php } ?>
									</tbody>
								</table>
							</div>
							<!-- </div> -->
						</div>
						<div class="panel-footer">&nbsp;</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>