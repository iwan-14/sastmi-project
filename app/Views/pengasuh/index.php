<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Dashboard Pengasuh</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container mt-4">
    <h3>Selamat Datang, <?= session('username'); ?> (<?= session('role'); ?>)</h3>
    <p>Anda login sebagai pengasuh.</p>
    <a href="<?= base_url('kehadiran') ?>" class="btn btn-success">Lihat Data Kehadiran</a>
  </div>
</body>
</html>
