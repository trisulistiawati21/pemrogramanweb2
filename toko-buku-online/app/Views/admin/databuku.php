<?= $this->extend('admin/layout'); ?>

<?= $this->section('mainadmin'); ?>
<div class="px-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4 class="mb-0">Data Buku</h4>
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahModal">
            <i class="bi bi-plus-circle me-2"></i>Tambah Buku
        </button>
        <?php if (session('sukses')): ?>
            <div class="mb-3">
                <div class="alert alert-success">
                    <strong>Sukses</strong> <?= session('sukses') ?>
                </div>
            </div>
        <?php endif ?>

        <?php if (session('gagal')): ?>
            <div class="mb-3">
                <div class="alert alert-danger">
                    <strong>Gagal</strong> <?= session('gagal') ?>
                </div>
            </div>
        <?php endif ?>
    </div>


    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Judul</th>
                            <th scope="col">Pengarang</th>
                            <th scope="col">Penerbit</th>
                            <th scope="col">Tahun</th>
                            <th scope="col">Thumbnail URL</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($books as $buku) : ?>
                            <tr>
                                <td><?= $buku['id']; ?></td>
                                <td><?= $buku['judul']; ?></td>
                                <td><?= $buku['pengarang']; ?></td>
                                <td><?= $buku['penerbit']; ?></td>
                                <td><?= $buku['tahun']; ?></td>
                                <td>
                                    <img src="<?= base_url($buku['thumbnail_url']) ?>" alt="<?= $buku['judul'] ?>" class="img-thumbnail"
                                        style="width: 150px; height: auto">
                                </td>
                                <td>
                                    <a href="<?= base_url('admin/databuku/' . $buku['id'] . '/edit')?>" class="btn btn-sm btn-success"><i class="bi bi-pencil-square"></i></a>
                                    <button class="btn btn-sm btn-danger" data-bs-id="<?= $buku['id']; ?>" data-bs-toggle="modal" data-bs-target="#hapusModal"><i class="bi bi-trash3-fill"></i></button>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Modal Tambah -->
    <div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fs-5" id="exampleModalLabel">Form Tambah Buku</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('admin/databuku') ?>" method="POST" enctype="multipart/form-data"
                        id="formTambah">
                        <div class="mb-3">
                            <label for="judul">Judul</label>
                            <input type="text" name="judul" id="judul" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="pengarang">Pengarang</label>
                            <input type="text" name="pengarang" id="pengarang" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="penerbit">Penerbit</label>
                            <input type="text" name="penerbit" id="penerbit" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="tahun">Tahun</label>
                            <input type="text" name="tahun" id="tahun" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="tahun">Cover</label>
                            <input type="file" accept="image/*" name="thumbnail_url" id="thumbnail_url"
                                class="form-control">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" form="formTambah" class="btn btn-primary">Simpan</button>
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
                    <form id="editBukuForm">
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