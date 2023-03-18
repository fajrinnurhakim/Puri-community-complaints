<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="shortcut icon" href="image/puri.png">
</head>
<body>

 
	<div class="kotak_login">
		<p class="tulisan_login">Silahkan Login Sebagai Admin Untuk Melihat Daftar Pengaduan</p>
		<br>
		<form action="cek_login.php" method="post">
			<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Username .." required="required">
 
			<label>Password</label>
			<input type="password" name="password" class="form_login" placeholder="Password .." required="required">
 
			<input type="submit" class="tombol_login" value="LOGIN">
 
			<br/>
			<br/>
			<center>
				<a class="link" href="index.php">KEMBALI</a>
			</center>
		</form>
		
	</div>
 
 
</body>
</html>