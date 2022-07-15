<?php
require 'proses/config.php';
$anggota = query("SELECT * FROM anggota");
?>
<!DOCTYPE html>
<html lang="en" class="webmadewell">
<head>
  <meta charset="UTF-8">
  <title>Our Story</title>
  <link rel="stylesheet" href="./style.css">
  <link rel="stylesheet" type="text/css" href="./style_anggota.css">

</head>
<body>
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
		<div class="tambah">
			<a href="tambah.php"><span>Tambah Data</span></a>
		</div>
		<br><br>
		<div class="table">
			<table>
				<tr>
					<th>No.</th>
					<th>Nama</th>
					<th>Hobi</th>
					<th>Aksi</th>
				</tr>
					<?php $i = 1; ?>
					<?php foreach($anggota as $rows) : ?>
				<tr>
						<td><?= $i ?></td>
						<td><?= $rows["nama"] ?></td>
						<td><?= $rows["hobi"] ?></td>
						<td>
							<a href="ubah.php?id=<?= $rows["id"]?>">Ubah</a> | <a href="hapus.php?id=<?= $rows["id"]?>" onclick="return confirm('hapus data?');">Hapus</a>
						</td>
				</tr>
					<?php $i++; ?>
					<?php endforeach; ?>
			</table>
		</div> 	
  </div>
</div>
<!-- partial -->
  <script src='https://code.jquery.com/jquery-latest.min.js'></script><script  src="./javascript.js"></script>

</body>

</html>