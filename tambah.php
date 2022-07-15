<?php
session_start();
if(!isset($_SESSION["login"])) {
	echo "<script>alert('Login jika ingin menambah data!');
document.location.href = 'login.php'</script>";
}
require 'proses/config.php';
if(isset($_POST["submit"])) {
	if(tambah($_POST) > 0) { 
		echo "<script>alert('berhasil ditambahkan');
		document.location.href = 'anggota.php'</script>";
	} else {
		echo "<script>alert('gagal ditambahkan');
		document.location.href = 'anggota.php'</script>";
	}
}
?>
<!DOCTYPE html>
<html lang="en" class="webmadewell">
<head>
  <meta charset="UTF-8">
  <title>Our Story</title>
  <link rel="stylesheet" href="./style.css">

</head>
<body>
	
<!-- partial:index.partial.html -->
<div class="sample-header">
  <div class="sample-header-section">
    <h1>B E B A N K E L U A R G A</h1>
    <h2>Sebuah Kisah Yang Baru Saja Bermula </h2>
  </div>
</div>
<div class="sample-section-wrap">
  <div class="sample-section">
  	<div class="navbar">
		<b>Beban Keluarga</b>
	    <ul>
	        <li><a href="index.php"><b>Home</b></a></li>
	        <li><a href="galeri.php"><b>Galeri</b></a></li>
	        <li><a href="anggota.php"><b>Anggota</b></a></li>
	        <li><a href="login.php"><b>Login</b></a></li>
	        <li><a href="logout.php"><b>Logout</b></a></li>

	    </ul>
	</div>
	<div class="formu">
		<div class="anjay">
			<h2>Tambah Anggota</h2>
				<form action="" method="post">
							<label for="nama">Nama : </label>
							<input type="text" name="nama" id="nama" required>
							<label for="hobi">Hobi : </label>
							<input type="text" name="hobi" id="hobi" required>
							<br>
							<button type="submit" name="submit">Tambah Anggota</button>
				</form>	
		</div>
		
	</div>
    	
  </div>
</html>

</div>
<!-- partial -->
  <script src='https://code.jquery.com/jquery-latest.min.js'></script><script  src="./javascript.js"></script>

</body>