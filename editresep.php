<?php
require 'functions.php';

$id=$_GET["id"];
$resep=query("SELECT * FROM resep WHERE id=$id")[0];

if(isset($_POST['ubah'])) {
	$id=$_POST["id"];
	$judul=$_POST["judul"];
	$content=$_POST["content"];

	$update=	mysqli_query($conn,"UPDATE resep SET Name='$judul', Content='$content' WHERE id=$id");

	if($update) {
		header('Location: index2.php?status=dirubah');
	} else {
		echo "<script>alert('gagal merubah resep');history.go(-1)</script>";
	}
}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Ubah Resep | Snackie</title>
		<link rel="stylesheet" href="style.css">

	</head>
	<body>
		<header>
			<div class="heading">
				<a href="index.php"><img src="img/logo.png" alt=""></a>

				<div class="right_header">
						<ul class="button_user">
              <input class="search" type="text" placeholder="Cari Resep">
							<a href="search.php"><img class="isearch" src="img/isearch.png" alt=""></a>
							<a href="upresep.php"><button class="blogin">Buat Resep</button></a>
              <a href="profil.php"> <img class="profil" src="img/profil.png" alt=""> </a>
						</ul>
				</div>

			</div>
		</header>

		<div class="resep">
			<h1>Koreksi resep</h1>

			<div class="resep_form">
				<form action="" method="post">
					<input type="hidden" name="id" value="<?php echo $resep["ID"] ?>">
					<input class="rform" type="text" placeholder="Judul Resep" name="judul" value="<?php echo $resep["Name"] ?>">

					<label class="upresep"><input type="file" value="upload">Unggah Foto</label>

					<br>
					<input class="rtextarea" type="text" placeholder="Tulis resepmu di sini" name="content" value="<?php echo $resep["Content"] ?>"></input>
					<br>
					<button class="rsend" type="submit" name="ubah">Ubah</button>
				</form>
			</div>
		</div>


		<div class="about">
			<h2>tentang snackie</h2>
		</div>

		<div class="body_about">
			<p>Snackie adalah sebuah web untuk berbagi resep makanan ringan.
				<br>
				Pengguna dapat login untuk bisa membagikan, memilih resep favorit,
				serta berinteraksi dengan pengguna lainnya.
			</p>
		</div>

	</body>
</html>
