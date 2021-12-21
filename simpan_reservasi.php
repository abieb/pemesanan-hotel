<?php
include('../config/koneksi.php');

$bulan = $_POST['bulan'];
$kode_tamu = $_POST['kode_tamu'];
$tgl_inap = $_POST['tgl_inap'];
$tgl_keluar = $_POST['tgl_keluar'];
$no_kamar = $_POST['no_kamar'];
$jenis_kamar = $_POST['jenis_kamar'];

$redirect = "?menu=tambah_reservasi";

//crud
if (isset($_POST['bsimpan'])) {
	// $aksi->simpan($field);
	$query = "INSERT INTO tabel_inap SET bulan='$bulan',kode_tamu='$kode_tamu',tgl_inap='$tgl_inap',tgl_keluar='$tgl_keluar',no_kamar='$no_kamar',jenis_kamar='$jenis_kamar'";
	mysqli_query($koneksi, $query);
	header("location:reservasi.php");
	// alert("Data berhasil disimpan", $redirect);
}
?>