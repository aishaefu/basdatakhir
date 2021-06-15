<!DOCTYPE html>
<html>
  <head>
    <title>Snackie</title>
    <link rel="stylesheet" href="myrecipe.css" />
  </head>
  <body>
    <header>
      <div class="heading">
        <a href="index.php"><img src="img/logo.png" alt="" /></a>

        <div class="right_header">
          <ul class="button_user">
            <input class="search" type="text" placeholder="Cari Resep" />
            <a href="search.php"><img class="isearch" src="img/isearch.png" alt="" /></a>
            <a href="upresep.php"><button class="blogin">Buat Resep</button></a>
            <a href="profil.php"> <img class="profil" src="img/profil.png" alt="" /> </a>
          </ul>
        </div>
      </div>
    </header>
    <div class="side">
      <a href="profil.php"><button class="p_myaccount" type="button">Akun Saya</button></a>
      <br />
      <a href="myrecipes.php"><button class="p_myrecipes" type="button">Resep Saya</button></a>
      <br />
      <a href="myfav.php"><button class="p_myfav" type="button">Favorit Saya</button></a>
      <br />
      <a href="form.php"><button class="logout" type="button">Keluar</button></a>
    </div>

    <div class="userprofil">
      <div class="profile_name">
        <div class="text">
          <h1>Resep<span class="type-animation animating"> _Saya</span></h1>
        </div>
        <button class="btn btn-4">Buat Resep</button>
      </div>
    </div>

    <main class="tbody">
      <div class="container">
        <ul class="responsive-table">
          <li class="table-header">
            <div class="col col-1">No.</div>
            <div class="col col-2">Judul Resep</div>
            <div class="col col-3">Waktu Pembuatan</div>
            <div class="col col-4"></div>
          </li>
          <li class="table-row">
            <div class="col col-1" data-label="No">1</div>
            <div class="col col-2" data-label="Judul Resep"></div>
            <div class="col col-3" data-label="Waktu"></div>
            <div class="col col-4" data-label="Aksi">
              <div class="td">
                <a href="" class="td btn-5">Edit</a>
                <a href="" class="td btn-6">Delete</a>
              </div>
            </div>
          </li>
          <li class="table-row">
            <div class="col col-1" data-label="No">2</div>
            <div class="col col-2" data-label="Judul Resep"></div>
            <div class="col col-3" data-label="Waktu"></div>
            <div class="col col-4" data-label="Aksi">
              <div class="td">
                <a href="" class="td btn-5">Edit</a>
                <a href="" class="td btn-6">Delete</a>
              </div>
            </div>
          </li>
          <li class="table-row">
            <div class="col col-1" data-label="No">3</div>
            <div class="col col-2" data-label="Judul Resep"></div>
            <div class="col col-3" data-label="Waktu"></div>
            <div class="col col-4" data-label="Aksi">
              <div class="td">
                <a href="" class="td btn-5">Edit</a>
                <a href="" class="td btn-6">Delete</a>
              </div>
            </div>
          </li>
          <li class="table-row">
            <div class="col col-1" data-label="No">4</div>
            <div class="col col-2" data-label="Judul Resep"></div>
            <div class="col col-3" data-label="Waktu"></div>
            <div class="col col-4" data-label="Aksi">
              <div class="td">
                <a href="" class="td btn-5">Edit</a>
                <a href="" class="td btn-6">Delete</a>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </main>
  </body>
</html>
