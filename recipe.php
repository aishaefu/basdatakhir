<?php
session_start();
require 'functions.php';

if(!isset($_SESSION["login"])){
	header("Location:form.php");
	exit;
}
$conn=mysqli_connect("localhost", "root","","snackie");
// ambil data query database
$result = mysqli_query($conn, "SELECT * FROM resep");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['unggah'])){

	// ambil data dari formulir
	$judul = htmlspecialchars($_POST['judul']);
	$username = htmlspecialchars($_POST['username']);
	$content = htmlspecialchars($_POST['content']);

 //cek password1 dan $password2
		$query="INSERT INTO resep (ID, Name, Owner, Content)
		VALUES ('','$judul','$username', '$content')";
		mysqli_query($conn,$query);
		if(mysqli_affected_rows($conn)>0) {
			header('Location: index2.php?status=sukses');
		} else {
			echo "<script>alert('gagal menambahkan resep');history.go(-1)</script>";
		}
	}
?>
