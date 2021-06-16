<?php
//konek database
$conn=mysqli_connect("localhost", "root","","snackie");

// ambil data dari tabel mahasiswa / query database
$result = mysqli_query($conn, "SELECT * FROM resep");
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
				<a href="index2.php"><img src="img/logo.png" alt=""></a>

				<div class="right_header">
						<ul class="button_user">
              <input class="search" type="text" placeholder="Cari Resep">
							<a href="search.php"><img class="isearch" src="img/isearch.png" alt=""></a>
							<label class="blogin" for="upresep">Buat Resep</label>
							<!-- <a href="upresep.php"><button class="blogin">Buat Resep</button></a> -->
              <a href="profil.php"> <img class="profil" src="img/profil.png" alt=""> </a>
						</ul>
				</div>

			</div>
		</header>

		<div class="body">
			<div class="welcome_word">
				<h1>
					<div class="welcome">
						Selamat datang,
					</div>
					<br>
					<div class="user">
						<span class="type-animation animating">user!</span>
					</div>
 				</h1>
			</div>
		</div>

		<div class="welcome_resep">
			<h1>Ayo tulis resepmu !</h1>
		</div>

		<div class="resep">
			<div class="resep_form">
				<form action="recipe.php" method="post">
					<input class="rform" type="text" id="upresep" placeholder="Judul Resep" name="judul">

					<label class="upresep"><input type="file" value="upload">Upload Foto</label>
					<br>
					<input class="rform" type="text" id="upresep" placeholder="username" name="username">
					</br>
					<br>
					<textarea class="rtextarea" type="text" placeholder="Tulis resepmu di sini" name="content"></textarea>
					<br>
					<a href="recipe.php"><button class="rsend" type="submit" name="unggah">Unggah</button></a>
				</form>
			</div>
		</div>

			<div class="rtitle">
			<h1>Resep Saya</h1>
			<!-- <h1><span class="type-animation animating">Resep Saya</span></h1> -->
		</div>
		<div class="tabelresep">
			<div class="tbody">
	      <div class="container">
	        <ul class="responsive-table">
	          <li class="table-header">
	            <div class="col col-1">No.</div>
	            <div class="col col-2">Judul Resep</div>
	            <div class="col col-3">Langkah Pembuatan</div>
	            <div class="col col-4"></div>
	          </li>
<?php $i=1; ?>
<?php while($row=mysqli_fetch_assoc($result)): ?>
	          <li class="table-row">
	            <div class="col col-1" data-label="No"><?php echo $i; ?></div>
	            <div class="col col-2" data-label="Judul Resep"><?php echo $row["Name"]; ?></div>
	            <div class="col col-3" data-label="Waktu"><?php echo $row["Content"]; ?></div>
	            <div class="col col-4" data-label="Aksi">
	              <div class="td">
	                <a href="" class="td btn-5">Edit</a>
	                <a href="hapus.php?id=<?php echo $row["ID"] ?> " class="td btn-6">Delete</a>
	              </div>
	            </div>
	          </li>
<?php $i++ ?>
<?php endwhile; ?>
	        </ul>
	      </div>
	    </div>
		</div>


		<div class="about">
			<h2>tentang snackie</h2>
		</div>

		<div class="ibody_about">
			<p>Snackie adalah sebuah web untuk berbagi resep makanan ringan.
				<br>
				Pengguna dapat login untuk bisa membagikan, memilih resep favorit,
				serta berinteraksi dengan pengguna lainnya.
			</p>
		</div>

	</body>
</html>
