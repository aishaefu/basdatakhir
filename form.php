<!DOCTYPE html>
<html>
	<head>
		<title>Login | Snackie</title>
		<link rel="stylesheet" href="style.css">

	</head>
	<body>
		<header>
			<div class="heading">
				<a href="index.php"><img src="img/logo.png" alt=""></a>

				<div class="right_header">
						<ul class="button_user">
							<input class="topform" type="text" placeholder="Username">
							<input class="topform" type="password" placeholder="Password">
              <!-- <input class="search" type="text" placeholder="Cari Resep">
							<a href="search.php"><img class="isearch" src="img/isearch.png" alt=""></a> -->
							<a href="index.php"><button class="blogin">Masuk</button></a>
							<!-- <a href="daftar.php"><button class="bdaftar">Daftar</button></a> -->
						</ul>
				</div>

			</div>
		</header>

		<div class="body">
			<div class="welcome_word">
				<h1>Mari Berbagi Resep !</h1>
			</div>

			<div class="login_form">
				<form action="edit.php" method="post">
					<input class="form" type="text" placeholder="Username">
					<br>
					<input class="form" type="text" placeholder="Email">
					<br>
					<input class="form" type="password" placeholder="Password">
					<br>
					<input class="form" type="password" placeholder="Confirm Password">
					<br>
					<a href="edit.php"><button class="send">Daftar</button></a>

					<!-- <input class="form" type="text" placeholder="Username">
					<br>
					<input class="form" type="password" placeholder="Password">
					<br>
					<a href="home.php"><button class="send">Masuk</button></a> -->
				</form>

				<!-- <br>
				<h>Belum punya akun? <a href="daftar.php">Yuk daftar!</a> </h> -->
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
