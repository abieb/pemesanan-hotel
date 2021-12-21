<?php
if (!isset($_GET['menu'])) {
	header('location:hal_utama.php?menu=tamu');
}

?>
<!DOCTYPE html>
<html>

<head>
	<title>TAMU</title>
</head>

<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="col-md-12">
					<div class="panel panel-default">
						<div class="panel-heading">DAFTAR TAMU </div>
						<div class="panel-body">
							<div class="col-md-12">
								<div class="table-responsive">
									<table class="table table-bordered table-striped table-hover">
										<thead>
											<th style="text-align: center;">No.</th>
											<th style="text-align: center;">Kode Tamu</th>
											<th style="text-align: center;">Nama Tamu</th>
											<th style="text-align: center;">Alamat</th>
											<th style="text-align: center;">No Telepon</th>
										</thead>
										<tbody>
											<?php
											$no = 1;
											include('../config/koneksi.php');
											$data = mysqli_query($koneksi, 'select * from tabel_tamu');
											while ($r = mysqli_fetch_array($data)) {
											?>
												<tr>
													<td><?php echo $no++; ?>.</td>
													<td><?php echo $r['kode_tamu'] ?></td>
													<td><?php echo $r['nama_tamu'] ?></td>
													<td><?php echo $r['alamat'] ?></td>
													<td><?php echo $r['no_telp'] ?></td>
												</tr>
											<?php } ?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
						<div class="panel-footer">&nbsp;</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>