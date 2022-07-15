<?php
session_start();
if(!isset($_SESSION["login"])) {
	echo "<script>alert('Login jika ingin menghapus data!');
document.location.href = 'login.php'</script>";
	exit;
}
require 'proses/config.php';
$id = $_GET['id'];
if(hapus($id) > 0) {
	echo "<script>
	alert('berhasil dihapus');
	document.location.href = 'anggota.php';
	</script>";
} else {
	echo "<script>alert('gagal dihapus');
	document.location.href = 'anggota.php';</script>";
}
?>