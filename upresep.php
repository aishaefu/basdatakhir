<?php 
session_start();
if( !isset($_SESSION["login"]) ) {
    header("Location: form.php");
    exit;
}

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Buat Resep | Snackie</title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<header>
			<div class="heading">
				<a href="index2.php"><img src="img/logo.png" alt=""></a>
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
			<h1>Ayo tulis resepmu !</h1>
			<div class="resep_form">
				<form action="recipe.php" method="post">
					<input class="rform" type="text" placeholder="Judul Resep" name="judul">
					<label class="upresep"><input type="file" value="upload">Unggah Foto</label>
					<br>
					<input class="rform" type="text" id="upresep" placeholder="username" name="username">
					<br>
					<textarea class="rtextarea" type="text" placeholder="Tulis resepmu di sini" name="content"></textarea>
					<br>
					<a href="recipe.php"><button class="rsend" type="submit" name="unggah">Unggah</button></a>
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
