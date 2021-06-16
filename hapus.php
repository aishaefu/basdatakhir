<?php
$conn=mysqli_connect("localhost", "root","","snackie");
$result = mysqli_query($conn, "SELECT * FROM resep");
if( isset($_GET['id']) ){
  $id=$_GET["id"];
  $cek=mysqli_query($conn, "DELETE FROM resep WHERE id = $id");

  if ($cek==true){
    echo"<script>alert('resep berhasil dihapus!');document.location.href='index2.php'</script>";
  } else{
    echo "<script>alert('resep gagal dihapus');history.go(-1)</script>";
  }
}
 ?>
