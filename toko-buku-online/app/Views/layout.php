<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Toko Buku Online</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <!-- As a link -->
    <nav class="navbar bg-body-tertiary mb-3">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url() ?>">Toko Buku Online</a>
            <a href="<?= base_url('chart') ?>" class="btn btn-secondary position-relative">
                Chart
                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                    99+
                    <span class="visually-hidden">unread messages</span>
                </span>
            </a>
        </div>
    </nav>

    <?= $this->renderSection('main'); ?>

    <footer class="p-5 bg-danger-subtle mt-5">
        &copy; Copyright 2024. Kelas A Pemrograman Web 2. All rights reserved.
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>