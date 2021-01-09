<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>.:: Toko CPU Adil ::.</title>
    <link rel="stylesheet" href="./dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./dist/css/main.css">
    </head>
<body>
    <div id="app">
      <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
        <a class="navbar-brand" href="#">
          <img src="./dist/img/logo.png" alt="" width="50">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Beranda <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Kategori
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">PC Gaming</a>
                <a class="dropdown-item" href="#">PC Server</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Elektronik Lainnya</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Invoice Saya</a>
            </li>
          </ul>
          <div class="avatar">
            <img src="./dist/img/avatar.png" alt="" class="avatar_img" width="23">
            <a href="#" class="text-light"> Logout</a>
          </div>
        </div>
        </div>
      </nav>

      <!-- BODY -->
      <section class="m-3">
        <div class="container">
          <div class="banner"></div>
          <div class="pengertian">
            <h2>apa itu <b>Toko CPU</b>?</h2>
            <p class="blockquote text-muted">Sebagai langkah awal, konsep dari toko komputer yang saya impikan adalah sebuah toko sederhana dan menjual barang barang yang berkualitas dengan harga terjangkau. Karena tidak bisa dipungkiri, kebutuhan perangkat teknologi khususnya komputer dan smartphone saat ini sudah menjadi sebuah kebutuhan primer.</p>
          </div>
        </div>
      </section>
    </div>

    <!-- JUALAN -->
    <section id="produk" class="mt-5">
      <div class="container">
        <div class="row">
          <!-- PRODUK LIST -->
          <a href="#" class="col-md-4 produk_detail">
            <div class="img_produk" style="background-image: url(./dist/img/produk/contoh_produk.png);"></div>
            <div class="isi_produk">
              <h2 class="title_produk">Nocturne</h2>
              <p class="sub_produk mb-0">Core i7 • NVidia 2080 GTX • 8 Gb</p>
              <span class="badge badge-danger">SOLD OUT</span>
              <p class="harga_produk">Rp 3.980.000</p>
            </div>
          </a>
          <!-- PRODUK LIST -->
          <a href="#" class="col-md-4 produk_detail">
            <div class="img_produk" style="background-image: url(./dist/img/produk/contoh_produk.png);"></div>
            <div class="isi_produk">
              <h2 class="title_produk">Nocturne</h2>
              <p class="sub_produk mb-0">Core i7 • NVidia 2080 GTX • 8 Gb</p>
              <span class="badge badge-danger">SOLD OUT</span>
              <p class="harga_produk">Rp 3.980.000</p>
            </div>
          </a>
          <!-- PRODUK LIST -->
          <a href="#" class="col-md-4 produk_detail">
            <div class="img_produk" style="background-image: url(./dist/img/produk/contoh_produk.png);"></div>
            <div class="isi_produk">
              <h2 class="title_produk">Nocturne</h2>
              <p class="sub_produk mb-0">Core i7 • NVidia 2080 GTX • 8 Gb</p>
              <span class="badge badge-danger">SOLD OUT</span>
              <p class="harga_produk">Rp 3.980.000</p>
            </div>
          </a>
        </div>
      </div>
    </section>


    <!-- FOOTER -->
    <div id="footer" class="mt-5">
      <div class="container">
        <ul class="sosmed">
          <li><a href="https://facebook.com/ini.link" target="_blank">Facebook</a></li>
          <li><a href="https://instagram.com/ini_adil" target="_blank">Instagram</a></li>
          <li><a href="https://github.com/iniadil" target="_blank">Github</a></li>
        </ul>
        <p class="footer_content mt-3">
        Di Desain dan dibuat oleh <b>Muhammad Adil (1813000202)</b> <i>kelas SI B Malam Semester 5</i> untuk kebutuhan tugas UAS yang diberikan oleh <b>Bpk. Fhery Agustin, M.Kom</b> pada matapelajaran <i>SISTEM INFORMASI PEMASARAN</i>.
        </p>
      </div>
  </div>

    <script src="./dist/js/jquery-3.5.1.min.js"></script>
    <script src="./dist/js/bootstrap.min.js"></script>
</body>
</html>