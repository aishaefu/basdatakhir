<!DOCTYPE html>
<html>
	<head>
		<title>User | Snackie</title>
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
              <a href="profil.php"> <img class="profil" src="img/profil.png" alt=""> </a>
						</ul>
				</div>

			</div>
		</header>

		<div class="side">
			<a href="profil.php"><button class="p_myaccount" type="button">Akun Saya</button></a>
			<br>
			<a href="myrecipes.php"><button class="p_myrecipes" type="button">Resep Saya</button></a>
			<br>
			<a href="myfav.php"><button class="p_myfav" type="button">Favorit Saya</button></a>
			<br>
			<a href="form.php"><button class="logout" type="button">Keluar</button></a>
		</div>

		<div class="userprofil">
			<img class="foto" src="img/upload.png" alt="">
			<br>

			<form action="profil.php" method="post">
				<label class="upload"><input type="file" value="upload">Unggah Foto</label>
				<a href="hapus.php"><button class="delete" type="button" >Hapus Foto</button></a>

				<br>
				<input class="formedit" type="text" placeholder="Username">
				<br>
				<input class="formedit" type="text" placeholder="Nama">
				<br>
				<input class="formedit" type="text" placeholder="Email">
				<br>
				<textarea class="textarea" type="text" placeholder="Bio"></textarea>

				<a href="profil.php"><button class="send">Simpan</button></a>
			</form>
		</div>

		<footer>
			<a href="edit.php"><button class="ebutton" type="button">Ubah Data</button></a>
			<a href="hapus.php"><button class="dbutton" type="button">Hapus Akun</button> </a>
		</footer>

	</body>
</html>
