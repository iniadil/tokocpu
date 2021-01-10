<?php

    if (!isset($_GET['data'])) {
        alertWithRedirect('gagal mencoba server','?url=produk');
    }

    $data = $_GET['data'];
    $query = $koneksi->query("SELECT * FROM tbproduk INNER JOIN tbprodukdetail ON tbproduk.id_produk = tbprodukdetail.id_produk WHERE tbproduk.id_produk = '$data' ORDER BY tbproduk.id DESC");
    $row = $query->fetch_assoc();
    $kode_produk = $row['id_produk'];

    // IF SUBMIT
    if (isset($_POST['submit'])) {
        $id_detail = $row['id_produkdetail'];
        $nama_produk = $_POST['nama_produk'];
        $brand = $_POST['brand'];
        $harga = $_POST['harga'];
        $processor = $_POST['processor'];
        $vga = $_POST['vga'];
        $ram = $_POST['ram'];
        $powersupply = $_POST['powersupply'];
        $hardiskssd = $_POST['hardiskssd'];
        $garansi = $_POST['garansi'];

        // UPDATE
        $update = $koneksi->query("UPDATE tbproduk SET
                nama_produk = '$nama_produk',
                harga = '$harga'
                WHERE id_produk = '$kode_produk'
            ");
        if ($update) {
            $update_detail = $koneksi->query("UPDATE tbprodukdetail SET
                brand = '$brand',
                processor = '$processor',
                vga = '$vga',
                ram = '$ram',
                powersupply = '$powersupply',
                hardiskssd = '$hardiskssd',
                garansi ='$garansi' 
                WHERE id_produkdetail = '$id_detail'
            ");

            if ($update_detail) {
                // JIKA SUKSES
                alertWithRedirect('Berhasil merubah produk','?url=produk');
            } else {
                alertWithRedirect('ada sedikit kesalahan1, coba lagi!','?url=tambahproduk');
            }
        } else {
            alertWithRedirect('ada sedikit kesalahan1, coba lagi!','?url=tambahproduk');
        }
    }
?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section">
                    <h2 class="title_section">Edit Produk</h2>
                    <form method="post">
                        <div class="row">
                            <div class="col-6">
                                <!-- ITEM -->
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">Kode Produk</span>
                                    </div>
                                    <input type="text" class="form-control" value="<?= $kode_produk ?>"
                                        name="kode_produk" readonly>
                                </div>

                                <!-- ITEM -->
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">Nama Produk</span>
                                    </div>
                                    <input type="text" class="form-control" value="<?= $row['nama_produk'] ?>"
                                        name="nama_produk" placeholder="KS 11GH1F">
                                </div>

                                <!-- ITEM -->
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">Brand</span>
                                    </div>
                                    <input type="text" class="form-control" name="brand" value="<?= $row['brand'] ?>">
                                </div>

                                <!-- ITEM -->
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">Harga Produk</span>
                                    </div>
                                    <input type="number" class="form-control" min="1" name="harga"
                                        value="<?= $row['harga'] ?>">
                                </div>

                                <!-- ITEM -->
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">Processor</span>
                                    </div>
                                    <input type="text" class="form-control" name="processor"
                                        value="<?= $row['processor'] ?>">
                                </div>

                                <!-- ITEM -->
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">VGA Card</span>
                                    </div>
                                    <input type="text" class="form-control" name="vga" value="<?= $row['vga'] ?>">
                                </div>

                                <!-- ITEM -->
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">Memory / RAM</span>
                                    </div>
                                    <input type="text" class="form-control" name="ram" value="<?= $row['ram'] ?>">
                                </div>

                                <!-- ITEM -->
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">Power Supply</span>
                                    </div>
                                    <input type="text" class="form-control" name="powersupply"
                                        value="<?= $row['powersupply'] ?>">
                                </div>

                                <!-- ITEM -->
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">Hardisk / SSD</span>
                                    </div>
                                    <input type="text" class="form-control" name="hardiskssd"
                                        value="<?= $row['hardiskssd'] ?>">
                                </div>

                                <!-- ITEM -->
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">Garansi</span>
                                    </div>
                                    <input type="text" class="form-control" name="garansi"
                                        value="<?= $row['garansi'] ?>" placeholder="5 Tahun">
                                </div>

                                <div class="form-group mt-3">
                                    <button type="submit" name="submit" class="btn btn-success">Submit</button>
                                    <a href="?url=produk" class="btn btn-info">Kembali</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>