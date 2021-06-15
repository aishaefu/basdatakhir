<?php
$conn=mysqli_connect("localhost", "root","","snackie");
// ambil data query database
$result = mysqli_query($conn, "SELECT * FROM user");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){

	// ambil data dari formulir
	$username = htmlspecialchars($_POST['username1']);
	$email = htmlspecialchars($_POST['email']);
	$password1 = htmlspecialchars($_POST['password1']);
	$password2 = htmlspecialchars($_POST['password2']);

 //cek password1 dan $password2
	if($password1 !== $password2){
		echo "<script>alert('konfirmasi password salah!');history.go(-1)</script>";
	} else {
		$query="INSERT INTO user (ID, Name, Email, Password, Username)
		VALUES ('','$username','$email', '$password1','$username')";
		mysqli_query($conn,$query);
		if(mysqli_affected_rows($conn)>0) {
			header('Location: index.php?status=sukses');
		} else {
			echo "<script>alert('gagal membuat akun');history.go(-1)</script>";
		}
	}
}
?>
