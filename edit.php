<?php 

include 'koneksi.php';

$id=$_GET["id"];

$data= query("SELECT * FROM tb_lapor WHERE id = $id")[0];



if (isset($_POST["edit"])) {

	if (ubah($_POST) > 0) {
		echo "

		<script>
			alert('data berhasil di edit');
			document.location.href = 'daftar_pengaduan.php';
		</script>

		";
	}
	else {
		echo "
		<script>
			alert('data gagal di edit');
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
	<title>Purwokerto Informasi : edit</title>
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
			<form action="" method="POST">
				<table align="center">
					<tr>
						<input type="hidden" name="id" value="<?php echo $data["id"] ?>">
					</tr>
					<tr>
						<td colspan="2" align="center"><h3>SILAHKAN EDIT DATA</h3><hr></td>
					</tr>
					<tr>
						<td>Nama Pelapor</td>
						<td><input type="text" name="nama" required="" value="<?php echo $data["nama"] ?>"></td>
					</tr>
					<tr>
						<td>Kategori Laporan</td>
						<td><input type="text" name="kategori" required="" value="<?php echo $data["kategori"] ?>"></td>
					</tr>
					<tr>
						<td>Deskripsi Permasalahan</td>
						<td><input type="text" name="permasalahan" required="" value="<?php echo $data["permasalahan"] ?>"></td>
					</tr>
					<tr>
						<td>Lokasi</td>
						<td><input type="text" name="lokasi" required="" value="<?php echo $data["lokasi"] ?>"></td>
					</tr>
					<tr>
						<td>Tanggal</td>
						<td><input type="text" name="tanggal" required="" value="<?php echo $data["tanggal"] ?>"></td>
					</tr>
					<tr>
						<td colspan="2" align="center"><hr><input type="submit" name="edit" value="EDIT"></td>
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