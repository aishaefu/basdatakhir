<?php 
//koneksi ke database
$db = mysqli_connect("localhost", "root", "", "phpdasar");

function query($query) {
    global $db;
    $result = mysqli_query($db, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data) {
    global $db;
    //ambil data dari tiap elemen dalam form
    //htmlspecialchars() supaya ituu ga ke hack intinya :'D
    $name = htmlspecialchars($data["name"]);
    $nim = htmlspecialchars($data["nim"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    
    //upload gambar
    $gambar = upload();
    if( !$gambar ) {
        return false;
    }

    //query insert data
    $query = "INSERT INTO mahasiswa VALUES (
        '', '$name', '$nim', '$email', '$jurusan', '$gambar')";
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

function upload() {
    $namafile = $_FILES['gambar']['name'];
    $ukuranfile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpname = $_FILES['gambar']['tmp_name'];

    //cek apakah tidak ada gambar yang di upload
    if( $error === 4 ) {
        echo "<script>
                alert('Choose file first!');
        </script>";
        return false;
    }

    //cek apakah yang di-upload adalah gambar
    $ekstensigambarvalid = ['jpg', 'png', 'jpeg'];
    $ekstensigambar = explode('.', $namafile);
    $ekstensigambar = strtolower(end($ekstensigambar));
    if( !in_array($ekstensigambar, $ekstensigambarvalid) ) {
        echo "<script>
                alert('File chosen is not an image!');
            </script>";
        return false;
    }

    //cek jika ukurannya terlalu besar
    if( $ukuranfile > 5000000 ) {
        echo "<script>
                alert('Image size is too big!');
            </script>";
        return false;
    }

    //lolos pengecekan, gambar siap di-upload
    //generate nama baru
    $namafilebaru = uniqid();
    $namafilebaru .= '.';
    $namafilebaru .= $ekstensigambar;
    move_uploaded_file($tmpname, 'img/' . $namafilebaru);

    return $namafilebaru;
}

function hapus($id) {
    global $db;
    mysqli_query($db, "DELETE FROM mahasiswa WHERE id = $id");

    return mysqli_affected_rows($db);
}

function ubah($data) {
    global $db;

    $id = $data["id"];
    //ambil data dari tiap elemen dalam form
    //htmlspecialchars() supaya ituu ga ke hack intinya :'D
    $name = htmlspecialchars($data["name"]);
    $nim = htmlspecialchars($data["nim"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    //ambil gambar lama
    $gambarlama = htmlspecialchars($data["gambarlama"]);
    //cek apakah user pilih gambar baru atau tidak
    if( $_FILES['gambar']['error'] === 4 ) {
        $gambar = $gambarlama;
    } else {
        $gambar = upload();
    }
    

    //query insert data
    $query = "UPDATE mahasiswa SET
                name = '$name',
                nim = '$nim',
                email = '$email',
                jurusan = '$jurusan',
                gambar = '$gambar'
            WHERE id = $id
        ";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

function cari($keyword) {
    $query = "SELECT * FROM mahasiswa WHERE
                name LIKE '%$keyword%' OR
                nim LIKE '%$keyword%' OR
                email LIKE '%$keyword%' OR
                jurusan LIKE '%$keyword%' OR
                gambar LIKE '%$keyword%'
                ";
    return query($query);
}
//% untuk mencari nama dengan fleksibel

function registrasi($data) {
    global $db;

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($db, $data["password"]);
    $password2 = mysqli_real_escape_string($db, $data["password2"]);
    //untuk memungkinkan user masukkin pass ada tanda kutip & tanda kutip
    //dimasukkan ke db scr aman

    //username udah ada/belom
    $result = mysqli_query($db, "SELECT username FROM user WHERE
    username = '$username'");
    if( mysqli_fetch_assoc($result) ) {
        echo "<script>
                alert('Username has already registered!');
            </script>";
        return false;
    }

    //cek konfirmasi pass
    if( $password !== $password2 ) {
        echo "<script>
                alert('Confirmation password doesnt match!');
            </script>";
        return false;
    }
    return 1;
}

?>