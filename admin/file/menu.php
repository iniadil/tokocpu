<!-- MENU -->
<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <a class="navbar-brand" href="./">
            <img src="../dist/img/logo.png" alt="" width="50">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="./">Admin <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Produk
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="?url=produk">Daftar Produk</a>
                        <a class="dropdown-item" href="?url=tambahproduk">Tambah Produk</a>
                        <a class="dropdown-item" href="?url=stok">Stok</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Pesanan
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Pesanan Selesai</a>
                        <a class="dropdown-item" href="#">Ongoing</a>
                        <a class="dropdown-item" href="#">Dibatalkan</a>
                    </div>
                </li>
            </ul>
            <div class="avatar">
                <img src="../dist/img/avatar.png" alt="" class="avatar_img" width="23">
                <a href="#" class="text-dark"> Logout</a>
            </div>
        </div>
    </div>
</nav>