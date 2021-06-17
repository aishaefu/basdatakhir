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
							<a href="upresep.php"><button class="blogin">Buat Resep</button></a>
              <a href="profil.php"> <img class="profil" src="img/profil.png" alt=""> </a>
						</ul>
				</div>

			</div>
		</header>

		<div class="side">
			<a href="profil.php"><button class="p_myaccount" type="button">Akun Saya</button></a>
			<br>
			<a href="myrecipe.php"><button class="p_myrecipes" type="button">Resep Saya</button></a>
			<br>
			<a href="myfav.php"><button class="p_myfav" type="button">Favorit Saya</button></a>
			<br>
			<a href="logout.php"><button class="logout" type="button">Keluar</button></a>
		</div>

		<div class="userprofil">
			<img class="foto" src="img/upload.png" alt="">
			<div class="profile_name">
				<h1>username</h1>
				<br>
				<h3>Nama Lengkap User</h3>
			</div>
			<p>Bagian ini merupakan Bio milik user.</p>
		</div>

		<footer>
			<a href="edit.php"><button class="ebutton" type="button">Ubah Data</button></a>
			<a href="hapus.php"><button class="dbutton" type="button">Hapus Akun</button> </a>
		</footer>

	</body>
</html>
