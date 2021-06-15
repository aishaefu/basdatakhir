<!DOCTYPE html>
<html>
	<head>
		<title>Resep | Snackie</title>
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

		<div class="isi_resep">
			<h2>Judul Resep</h2>
			<br>
			<img src="img/recipe.jpg" alt="">
			<br>
			<p>Bagian ini merupakan isi resepnya</p>
		</div>

		<div class="feedback">
			<a href="#"><button class="fav" type="button">Favorit</button></a>
			<label class="bcomment" for="komen">Comment</label>
		</div>

		<div class="comment">
			<textarea class="textarea" name="name" id="komen">Berikan tanggapanmu di sini</textarea>
			<br>
			<a href="#"><button class="rsend" type="button" name="button">Kirim</button></a>
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
