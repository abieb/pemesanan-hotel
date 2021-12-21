<br>
<br>
<br>
<br>
<br>
<!DOCTYPE html>
<html>

<head>
	<title>PEMESANAN HOTEL</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
</head>

<body style="background:url('../images/gambar.jpeg');">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="navbar navbar-fixed-top navbar-inverse inverse">
					<a href="?menu=home" class="navbar-brand" style="margin-top: -10px;">

					</a>
					<ul class="nav navbar-nav">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" id="kelola">
								<div class="glyphicon glyphicon-edit"></div>&nbsp;
								<strong>DATA TAMU</strong>&nbsp;
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu" aria-labelledby="kelola">
								<li>
									<a href="?menu=tamu"><strong>DAFTAR TAMU</strong></a>
								</li>

							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" id="transaksi">
								<div class="glyphicon glyphicon-refresh"></div>&nbsp;
								<strong>PEMESANAN</strong>&nbsp;
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu" aria-labelledby="transaksi">
								<li>
									<a href="?menu=tambah_reservasi"><strong>
											<Table>TAMBAH PEMESANAN</Table>
										</strong></a>
								</li>
								<li>
									<a href="?menu=reservasi"><strong>DAFTAR PEMESANAN</strong></a>
								</li>

							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" id="laporan">
								<div class="glyphicon glyphicon-duplicate"></div>&nbsp;
								<strong>LAPORAN</strong>&nbsp;
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu" aria-labelledby="laporan">
								<li>
									<a href="?menu=laporan"><strong>LAPORAN PEMESANAN HOTEL</strong></a>
								</li>


							</ul>
						</li>
					</ul>


				</div>
			</div>
		</div>
	</div>
	<?php
	switch (@$_GET['menu']) {
		case 'home':
			include 'home.php';
			break;
		case 'tamu':
			include 'tamu.php';
			break;
		case 'tambah_reservasi':
			include 'tambah_reservasi.php';
			break;
		case 'reservasi':
			include 'reservasi.php';
			break;
			// case 'agen':include'agen.php'; break;
			// case 'penggunaan':include'penggunaan.php'; break;
			// case 'tagihan':include'tagihan.php'; break;
		case 'laporan':
			include 'laporan.php';
			break;
			// case 'print':include 'print.php'; break;
			// default:$aksi->redirect("?menu=home");break;
	}
	?>

	<br><br>
	<!-- <footer class="container-fluid bg-4 text-center" style="background-color: #fffefe">
		<p>
		  	<strong>Copyright&nbsp;&copy;&nbsp;2018 <a target="_blank" href="https://www.instagram.com/rmdnzdn/">ZIDUN</a>.</strong>&nbsp;
		  	<br>
		  	<strong>All rights reserved for UJIKOM GEN-13 RPL PAKET 3.</strong>
		</p>
	</footer> -->

	<script type="text/javascript" src="../js/jquery.min.js"></script>
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../js/jquery-ui.min.js"></script>
</body>

</html>