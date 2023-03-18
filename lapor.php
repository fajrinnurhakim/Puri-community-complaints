<?php 
include 'koneksi.php';

if (isset($_POST['tambah'])) {
	if (simpan ($_POST) > 0) {
		echo "
			<script>
				alert('data berhasil di tambahkan');
				document.location.href = 'daftar_pengaduan.php';
			</script>
		";
	}else{
		echo "
			<script>
				alert('data gagal di tambahkan');
				document.location.href = 'daftar_pengaduan.php';
			</script>
		";
	}
}
 ?>	

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Purwokerto Informasi : lapor</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="shortcut icon" href="image/puri.png">
</head>
<body>
		<!-- KOTAK HEADER -->
		
		<!-- KOTAK HEADER -->
		<!-- MENU NAVIGASI-->
		<div class="menu">
			<div class="dropdown">
   				<button class="dropbtn">Others
      				<i class="fa fa-caret-down"></i>
    			</button>
    				<div class="dropdown-content">
      				<a href="daftar_pengaduan.php">daftar pengaduan</a>
    				</div>
  				</div>
			<img class="judul" src="image/puri.png">
			<a href="kontak.php">Kontak</a>
			<a class="dipakai" href="#">Lapor</a>
			<a href="info.php">Info</a>
			<a href="index.php">Home</a>
		</div>
		<!-- MENU NAVIGASI -->
		<!-- ISI KONTEN HOME -->
		<div class="konten_home">
		<form action="" method="POST">
		<table align="center" width="25%" border="0">
			<tr>
				<th colspan="2">Input Pengaduan</th>
			</tr>
			<tr>
				<td >Nama Pelapor</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
			<tr>
				<td >Kategori Laporan</td>
				<td><input type="text" name="kategori"></td>
			</tr>
			<tr>
				<td>Deskripsi Permasalahan</td>
				<td><textarea rows="5" cols="30" name="permasalahan"></textarea></td>
			</tr>
			<tr>
				<td>Lokasi</td>
				<td><textarea rows="5" cols="30" name="lokasi"></textarea></td>
			</tr>
			<tr>
				<td>Tanggal</td>
				<td><input type="date" name="tanggal"></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" name="tambah" value="tambah"></td>
			</tr>
		</table>
	</form>
		</div>
		<!-- ISI KONTEN HOME -->
		<!-- FOOTER -->
		<div class="footer">
			<p>Copyright@ Puri</p>
		</div>
		<!-- FOOTER -->
</body>
</html>