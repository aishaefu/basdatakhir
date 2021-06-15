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
							<form action="masuk.php" method="post">
							<input class="topform" type="text" placeholder="Username" name="username" id="username">
							<input class="topform" type="password" placeholder="Password" name="password" id="password">
              <!-- <input class="search" type="text" placeholder="Cari Resep">
							<a href="search.php"><img class="isearch" src="img/isearch.png" alt=""></a> -->
							<button class="blogin" value="login" type="submit" name="login">Masuk</button>
							<!-- <a href="daftar.php"><button class="bdaftar">Daftar</button></a> -->
							</form>
						</ul>
				</div>

			</div>
		</header>

		<div class="body">
			<div class="welcome_word">
				<h1>Mari Berbagi Resep !</h1>
			</div>

			<div class="login_form">
				<form action="daftar.php" method="post">
					<input class="form" type="text" placeholder="Username" name="username1">
					<br>
					<input class="form" type="text" placeholder="Email" name="email">
					<br>
					<input class="form" type="password" placeholder="Password" name="password1">
					<br>
					<input class="form" type="password" placeholder="Confirm Password" name="password2">
					<br>
					<button class="send" type="submit" name="daftar">Daftar</button>

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
