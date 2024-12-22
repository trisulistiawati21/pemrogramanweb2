<?= $this->extend('admin/layout'); ?>

<?= $this->section('mainadmin'); ?>
<div class="px-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4 class="mb-0">Data Pelanggan</h4>
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahModal">
            <i class="bi bi-plus-circle me-2"></i>Tambah Pelanggan
        </button>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>No HP</th>
                            <th>Alamat</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Rifqi</td>
                            <td>Kiki_uhuy</td>
                            <td>k1k1@gmail.com</td>
                            <td>085266703099</td>
                            <td>Jl. Kasang Pudak No. 40</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Raja</td>
                            <td>Rajaa_we</td>
                            <td>King@yahoo.com</td>
                            <td>08198765432</td>
                            <td>Jl. Melati No. 45</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Neni</td>
                            <td>Neni_cyu</td>
                            <td>Andri@email.com</td>
                            <td>08134567890</td>
                            <td>Jl. Anggrek No. 67</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Azza</td>
                            <td>Azza_Dhe</td>
                            <td>Dhea@yahoo.com</td>
                            <td>08135569875</td>
                            <td>Jl. Ampera No. 99</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


</div>
<?= $this->endSection() ?>