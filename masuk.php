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
			header("Location:index.php");
			exit;
    } else {
      echo "<script>alert('gagal masuk');history.go(-1)</script>";
    }
  } else {
		echo "<script>alert('user belum terdaftar');history.go(-1)</script>";
	}
}

?>
