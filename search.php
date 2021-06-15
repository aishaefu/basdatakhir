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
        <section>
            <form method="get" action="">
                <div class="box">
                    <h2>Hasil Pencarian</h2>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                        Ullam aut perspiciatis inventore! Commodi praesentium doloribus ratione, 
                        voluptas laudantium at dignissimos!</p>
                </div>
            </form>
        </section>
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
