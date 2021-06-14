<?php

$conn=mysqli_connect("localhost", "root","","snackie");

// ambil data dari tabel mahasiswa / query database
$result = mysqli_query($conn, "SELECT * FROM user");

if(isset($_POST["login"])){
  $username=$_POST["username"];
  $password=$_POST["password"];

  $result=mysqli_query($conn,"SELECT * FROM user WHERE username = '$username'");
//cek user
  if(mysqli_num_rows($result)===1){
    //cek password
    $row = mysqli_fetch_assoc($result);
    if($password == $row["Password"]){
			header("Location:resep.php");
			exit;
    } $error = true;
  } else {
		header("Location:daftar.php");
	}
}

?>
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
					<input class="form" type="text" placeholder="username" name="username" id="username">
					<br>
					<input class="form" type="password" placeholder="password" name="password" id="password">
					<br>
					<button type="submit" name="login">Masuk</button>
				</form>
				<?php if(isset($error)): ?>
					<p style="color:red">Password yang Anda masukan salah</p>
				<?php endif; ?>
				<br>
				<h>Belum punya akun? <a href="daftar.php">Yuk daftar!</a> </h>
			</div>

		</div>

		<div class="about">
			<h6><a href="about.php">tentang snackie</a></h6>
		</div>

	</body>
</html>

