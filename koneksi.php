<?php 
$koneksi = mysqli_connect("localhost","root","","puri");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}

//kita buat query data ke database
	function query($query){
		global $koneksi;
		$ambil = mysqli_query($koneksi, $query);
		$rows = [];
		while ($row = mysqli_fetch_assoc($ambil)) {
			$rows[] = $row;
		}
		return $rows;
	}

//kita buat fungsi tambah
	function simpan($data){
		global $koneksi;

		$nama = htmlspecialchars($data["nama"]);
		$kategori = htmlspecialchars($data["kategori"]);
		$permasalahan = htmlspecialchars($data["permasalahan"]);
		$lokasi = htmlspecialchars($data["lokasi"]);
		$tanggal = htmlspecialchars($data["tanggal"]);

		$query = "INSERT INTO tb_lapor
			values
		('','$nama','$kategori','$permasalahan','$lokasi','$tanggal')";

		mysqli_query($koneksi, $query);
		
		return mysqli_affected_rows($koneksi);
	}

//untuk edit data
	function ubah($data){
		global $koneksi;

		$id = $data["id"];
		$nama = htmlspecialchars($data["nama"]);
		$kategori = htmlspecialchars($data["kategori"]);
		$permasalahan = htmlspecialchars($data["permasalahan"]);
		$lokasi = htmlspecialchars($data["lokasi"]);
		$tanggal = htmlspecialchars($data["tanggal"]);

		$query = "UPDATE tb_lapor SET
		nama = '$nama',
		kategori = '$kategori',
		permasalahan = '$permasalahan',
		lokasi = '$lokasi',
		tanggal = '$tanggal'
		WHERE id = $id
		";

		mysqli_query($koneksi, $query);

		return mysqli_affected_rows($koneksi);

	}


//untuk hapus data
	function hapus($id){
		global $koneksi;

		mysqli_query($koneksi, "DELETE FROM tb_lapor where id = $id");

		return mysqli_affected_rows($koneksi);
	} 
?>