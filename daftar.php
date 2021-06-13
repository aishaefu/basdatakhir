<!DOCTYPE html>
<html>
	<head>
		<title>Daftar | Snackie</title>
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
							<a href="login.php"><button class="blogin">Masuk</button></a>
							<a href="daftar.php"><button class="bdaftar">Daftar</button></a>
						</ul>
				</div>

			</div>
		</header>

		<div class="body">
			<div class="welcome_word">
				<h3>Mari Berbagi Resep !</h3>
			</div>

			<div class="login_form">
				<form action="" method="post">
					<input class="form" type="text" placeholder="Username">
					<br>
					<input class="form" type="text" placeholder="Email">
					<br>
					<input class="form" type="password" placeholder="Password">
					<br>
					<input class="form" type="password" placeholder="Confirm Password">
					<br>
					<a href="edit.php"><button class="send">Daftar</button></a>
				</form>

				<br>
				<h>Sudah punya akun? <a href="login.php">Yuk masuk!</a> </h>
			</div>

		</div>

		<div class="about">
			<h6><a href="about.php">tentang snackie</a></h6>
		</div>

	</body>
</html>
