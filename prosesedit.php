<?php
include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['simpan'])){

	// ambil data dari formulir
	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$jk = $_POST['jenis_kelamin'];
	$sekolah = $_POST['sekolah_asal'];

	// buat query update
	$query = pg_query("UPDATE calonsiswa
	SET nama='$nama', alamat='$alamat', jenis_kelamin='$jk', sekolah_asal='$sekolah'
	WHERE id=$id");

	// apakah query simpan berhasil?
	if( $query ) {
		// kalau berhasil alihkan ke halaman daftarsiswa.php
		header('Location: daftarsiswa.php');
	} else {
		// kalau gagal tampilkan pesan "gagal menyimpan..."
		die("Gagal menyimpan perubahan...");
	}

} else {
	die("Akses dilarang...");
}
?>
