<?php 
	session_start();
	if($_SESSION['level']==""){
		header("location:login.php?pesan=gagal");
	}

	include 'koneksi.php';

	$ambil = query("SELECT * FROM tb_lapor");
 ?>
	

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Purwokerto Informasi : daftar pengaduan</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="shortcut icon" href="image/puri.png">

</head>
<body>
	
		<!-- KOTAK HEADER -->
		
		<!-- KOTAK HEADER -->
		<!-- MENU NAVIGASI-->
		<div class="menu">
			<a href="logout.php">Logout</a>
			<div class="dropdown">
   				<button id="dipakai" class="dropbtn">Others
      				<i class="fa fa-caret-down"></i>
    			</button>
    				<div class="dropdown-content">
      				<a href="daftar_pengaduan.php">daftar pengaduan</a>
    				</div>
  				</div>
			<img class="judul" src="image/puri.png">
			<a href="kontak.php">Kontak</a>
			<a href="lapor.php">Lapor</a>
			<a href="info.php">Info</a>
			<a href="index.php">Home</a>
		</div>
		<!-- MENU NAVIGASI -->
		<!-- ISI KONTEN HOME -->
		<div class="konten_home">
				<form action="lapor.php" method="POST">
					<table border="1" width="70%" align="center">
						<tr>
							<th colspan="7">DAFTAR PENGADUAN</td>
						</tr>
						<tr >
							<td align="center">No</td>
							<td align="center">Nama Pelapor</td>
							<td align="center">Kategori Laporan</td>
							<td align="center">Deskripsi Permasalahan</td>
							<td align="center">Lokasi</td>
							<td align="center">Tanggal</td>
							<td align="center">Aksi</td>
						</tr>
						<?php $i = 1; ?>
						<?php foreach ($ambil as $row):?>

							<tr>
								<td align="center"><?php echo $i; ?></td>
								<td><?php echo $row["nama"]; ?></td>
								<td align="center"><?php echo $row["kategori"]; ?></td>
								<td align="center"><?php echo $row["permasalahan"]; ?></td>
								<td align="center"><?php echo $row["lokasi"]; ?></td>
								<td align="center"><?php echo $row["tanggal"]; ?></td>
								<td align="center">
									<a href="edit.php?id=<?php echo $row["id"]; ?>">Edit</a>
									<a href="hapus.php?id=<?php echo $row["id"]?>" onclick = "return confirm('anda yangkin menghapus data ini?');">Hapus</a>
								</td>
							</tr>
							<?php $i++; ?>
						<?php endforeach; ?>
						<tr>
							<td colspan="7" align="center"><input type="submit" name="Tambah" value="Tambah"></td>
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