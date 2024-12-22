<?= $this->extend('layout'); ?>

<?= $this->section('main'); ?>
<div class="container">
    <div class="row bg-primary-subtle">
        <div class="col-6 p-5">
            <h1>Selamat Datang di Toko Buku Online</h1>
            <p>Kami menyediakan berbagai jenis buku dari berbagai penerbit teremuka.</p>
            <button class="btn btn-warning">Lihat Produk</button>
        </div>

        <div class="col-6 p-5">
            <h1>Temukan Buku Favorit Anda</h1>
            <form action="">
                <div class="mb-3">
                    <input type="text" name="judul" id="judul" class="form-control" placeholder="Judul Buku">
                </div>
                <div class="mb-3">
                    <select name="kategori" id="kategori" class="form-control">
                        <option value="">-- Pilih Kategori --</option>
                    </select>
                </div>
                <div class="mb-3">
                    <input type="text" name="pengarang" id="pengarang" placeholder="Pengarang" class="form-control">
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary">Cari</button>
                </div>
            </form>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-12">
            <h2 class="mb-3">Hasil Pencarian</h2>
            <div class="row">
                <div class="col-4">
                    <div class="card">
                        <img src="<?= base_url() ?>/images/1.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Lavender</h5>
                            <p class="card-text">Rp 78.000</p>
                            <a href="#" class="btn btn-primary">Add to chart</a>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <img src="<?= base_url() ?>/images/2.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Azzamine</h5>
                            <p class="card-text">Rp 78.000</p>
                            <a href="#" class="btn btn-primary">Add to chart</a>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <img src="<?= base_url() ?>/images/3.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">House of Talles</h5>
                            <p class="card-text">Rp 78.000</p>
                            <a href="#" class="btn btn-primary">Add to chart</a>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <img src="<?= base_url() ?>/images/4.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">George Orwell</h5>
                            <p class="card-text">Rp 78.000</p>
                            <a href="#" class="btn btn-primary">Add to chart</a>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <img src="<?= base_url() ?>/images/5.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Kitab Kawin</h5>
                            <p class="card-text">Rp 78.000</p>
                            <a href="#" class="btn btn-primary">Add to chart</a>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <img src="<?= base_url() ?>/images/6.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Hanum & Rangga</h5>
                            <p class="card-text">Rp 78.000</p>
                            <a href="#" class="btn btn-primary">Add to chart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<?= $this->endSection() ?>