<?= $this->extend('admin/layout'); ?>

<?= $this->section('mainadmin'); ?>

<h2 class="mb-3">Form Edit Buku</h2>
<div class="mb-3">
    <form action="<?= base_url('admin/databuku/' . $book['id'] . '/update') ?>" method="POST" enctype="multipart/form-data"
        id="formTambah">
        <div class="mb-3">
            <label for="judul">Judul</label>
            <input type="text" name="judul" id="judul" class="form-control" value="<?= $book['judul']?>">
        </div>
        <div class="mb-3">
            <label for="pengarang">Pengarang</label>
            <input type="text" name="pengarang" id="pengarang" class="form-control" value="<?= $book['pengarang']?>">
        </div>
        <div class="mb-3">
            <label for="penerbit">Penerbit</label>
            <input type="text" name="penerbit" id="penerbit" class="form-control" value="<?= $book['penerbit']?>">
        </div>
        <div class="mb-3">
            <label for="tahun">Tahun</label>
            <input type="text" name="tahun" id="tahun" class="form-control" value="<?= $book['tahun']?>">
        </div>
        <div class="mb-3">
            <label for="tahun">Cover</label>
            <input type="file" accept="image/*" name="thumbnail_url" id="thumbnail_url"
                class="form-control">
                <img src="<?=base_url($book['thumbnail_url'])?>" alt="" class="img-thumbnail" style="widht: 150px; height: auto;">
        </div>
        <div class="b-3">
            <a href="<?= base_url('admin/data-buku')?>" class="btn btn-secondary">Kembali</a>
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
</div>

<?= $this->endSection() ?>