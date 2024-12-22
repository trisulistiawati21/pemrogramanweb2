<?= $this->extend('admin/layout'); ?>

<?= $this->section('mainadmin'); ?>
<div class="px-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4 class="mb-0">Data Transaksi</h4>
        <!-- <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahModal">
            <i class="bi bi-plus-circle me-2"></i>Tambah Buku
        </button> -->
    </div>

    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Tanggal Transaksi</th>
                            <th scope="col">Buku</th>
                            <th scope="col">Pelanggan</th>
                            <th scope="col">Status</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Kamis, 5 Desember 2024</td>
                            <td>Bumi Manusia</td>
                            <td>Eka Purnama</td>
                            <td>Sukses</td>
                            <td>
                                <button class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#editModal"><i class="bi bi-pencil-square"></i></button>
                                <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#hapusModal"><i class="bi bi-trash3-fill"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jumat, 6 Desember 2024</td>
                            <td>Laskar Pelangi</td>
                            <td>Indo Masse</td>
                            <td>Sukses</td>
                            <td>
                                <button class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#editModal"><i class="bi bi-pencil-square"></i></button>
                                <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#hapusModal"><i class="bi bi-trash3-fill"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Sabtu, 7 Desember 2024</td>
                            <td>The Coldest Boyfriend</td>
                            <td>Aisyipa Arum</td>
                            <td>Sukses</td>
                            <td>
                                <button class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#editModal"><i class="bi bi-pencil-square"></i></button>
                                <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#hapusModal"><i class="bi bi-trash3-fill"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>Minggu, 8 Desember 2024</td>
                            <td>Tentang Kamu</td>
                            <td>Julia Herwanda</td>
                            <td>Sukses</td>
                            <td>
                                <button class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#editModal"><i class="bi bi-pencil-square"></i></button>
                                <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#hapusModal"><i class="bi bi-trash3-fill"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">5</th>
                            <td>Senin, 9 Desember 2024</td>
                            <td>Pulang Pergi</td>
                            <td>Mamat Tatang</td>
                            <td>Sukses</td>
                            <td>
                                <button class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#editModal"><i class="bi bi-pencil-square"></i></button>
                                <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#hapusModal"><i class="bi bi-trash3-fill"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">6</th>
                            <td>Selasa, 10 Desember 2024</td>
                            <td>The Start and I</td>
                            <td>Supratman</td>
                            <td>Sukses</td>
                            <td>
                                <button class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#editModal"><i class="bi bi-pencil-square"></i></button>
                                <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#hapusModal"><i class="bi bi-trash3-fill"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Modal Tambah -->
    <div class="modal fade" id="tambahModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5">Tambah Buku</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="tambahBukuForm">
                        <div class="mb-3">
                            <label for="judulbuku" class="form-label">Judul Buku</label>
                            <input type="text" class="form-control" id="judulbuku" required>
                        </div>
                        <div class="mb-3">
                            <label for="pengarang" class="form-label">Pengarang</label>
                            <input type="text" class="form-control" id="pengarang" required>
                        </div>
                        <div class="mb-3">
                            <label for="penerbit" class="form-label">Penerbit</label>
                            <input type="text" class="form-control" id="penerbit" required>
                        </div>
                        <div class="mb-3">
                            <label for="tahun" class="form-label">Tahun</label>
                            <input type="number" class="form-control" id="tahun" min="1900" max="2024" required>
                        </div>
                        <div class="mb-3">
                            <label for="thumbnailurl" class="form-label">Thumbnail URL</label>
                            <input type="url" class="form-control" id="thumbnailurl" required>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" form="tambahBukuForm" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Edit -->
    <div class="modal fade" id="editModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit Buku</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <form>
                            <div class="mb-3">
                                <label for="tgl-transaksi" class="col-form-label">Tanggal Transaksi</label>
                                <input type="text" class="form-control" id="tgl-transaksi">
                            </div>
                            <div class="mb-3">
                                <label for="buku" class="col-form-label">Buku</label>
                                <input type="text" class="form-control" id="buku">
                            </div>
                            <div class="mb-3">
                                <label for="pelanggan" class="col-form-label">Pelanggan</label>
                                <input type="text" class="form-control" id="pelanggan">
                            </div>
                            <div class="mb-3">
                                <label for="status" class="col-form-label">Status</label>
                                <select class="form-select form-select-sm" aria-label="Small select example">
                                    <option selected>Pilih Salah Satu</option>
                                    <option value="1">Pending</option>
                                    <option value="2">Sukses</option>
                                    <option value="3">Error</option>
                                </select>
                            </div>
                        </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" form="editBukuForm" class="btn btn-success">Simpan</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Hapus -->
    <div class="modal fade" id="hapusModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Hapus Buku</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Apakah anda yakin menghapus data ini?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="button" class="btn btn-danger">Hapus</button>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>