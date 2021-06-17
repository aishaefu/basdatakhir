<?php

require 'functions.php'

?>


<!DOCTYPE html>
<html>
	<head>
		<title>Snackie</title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<header>
			<div class="heading">
				<a href="index.php"><img src="img/logo.png" alt=""></a>
				<div class="right_header">
					<ul class="button_guest">
                        <input class="search" type="text" placeholder="Cari Resep">
                            <a href="search.php"><img class="isearch" src="img/isearch.png" alt=""></a>
                        <a href="form.php"><button class="blogin">Masuk/Daftar</button></a>
                    </ul>
				</div>
			</div>
		</header>

        <!-- isi homepage -->
				<div class="body">
					<div class="box">
						<div class="welcomeword">
							<h2>Selamat datang di</h2>
							<h1>Snackie!</h1>
							<!-- <h1>
									<span class="type-animation animating">Selamat datang di Snackie!</span>
							</h1> -->
						</div>
					</div>
				</div>
        <!-- isi homepage -->

        <!-- footer -->
        <div class="about">
                    <h2>tentang snackie</h2>
                </div>
                <div class="body_about">
                    <p>Snackie adalah sebuah web untuk berbagi resep makanan ringan.
                        <br>
                        Pengguna dapat login untuk bisa membagikan, memilih resep favorit,
                        serta berinteraksi dengan pengguna lainnya.
                    </p>
        <!-- akhir footer -->
	</body>
</html>
