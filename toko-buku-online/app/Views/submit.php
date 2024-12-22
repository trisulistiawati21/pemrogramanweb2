<?= $this->extend('layout'); ?>

<?= $this->section('main'); ?>
<div class="container p-5">
    <div class="alert alert-success">
        <strong>Success!</strong> Order Anda telah berhasil diproses.
        Silahkan konfirmasi pembayaran Anda ke WhatsApp Admin
        <a href="https://wa.me/6283171113753" class="btn btn-success">Hubungi</a>
    </div>
</div>
<?= $this->endSection() ?>