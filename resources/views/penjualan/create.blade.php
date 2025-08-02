<h1> Tambah Data Penjualan</h1>
    <form action="" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nama_produk" class="form-label">Nama Produk</label>
            <input type="text" class="form-control" id="nama_produk" name="nama_produk" required>
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat">
        </div>
        <div class="mb-3">
            <label for="no_hp" class="form-label">No HP</label>
            <input type="text" class="form-control" id="no_hp" name="no_hp">
        </div>
        <div class="mb-3">
            <label for="harga_produk" class="form-label">Harga Produk</label>
            <input type="number" class="form-control" id="harga_produk" name="harga_produk" required>
        </div>
        <div class="mb-3">
            <label for="stok_gabah" class="form-label">Jumlah Stok</label>
            <input type="number" class="form-control" id="stok_gabah" name="stok_gabah" required>
        </div>
        <div class="mb-3">
            <label for="image_produk" class="form-label">Foto Produk</label>
            <input type="file" class="form-control" id="image_produk" name="image_produk">
        </div>
        <div class="mb-3">
            <label for="image_ktp" class="form-label">Foto KTP</label>
            <input type="file" class="form-control" id="image_ktp" name="image_ktp">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form> 