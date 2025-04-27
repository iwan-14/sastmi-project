<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Dashboard Orang Tua</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <nav class="navbar navbar-dark bg-success">
    <div class="container-fluid">
      <span class="navbar-brand">Dashboard Orang Tua</span>
      <a href="<?= base_url('logout') ?>" class="btn btn-outline-light btn-sm">Logout</a>
    </div>
  </nav>

  <div class="container mt-4">
  <h3>Selamat Datang, <?= session('username'); ?>!</h3>
    <p>Berikut adalah nilai untuk anak Anda: <strong><?= $santri['nama']; ?> (<?= $santri['nis']; ?>)</strong></p>

    <table class="table table-bordered table-striped">
    <thead class="table-success">
        <tr>
        <th>No</th>
        <th>Mata Pelajaran</th>
        <th>Nilai</th>
        <th>Semester</th>
        </tr>
    </thead>
    <tbody>
        <?php if (!empty($nilai)) : $no = 1; foreach ($nilai as $row) : ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= esc($row['mata_pelajaran']) ?></td>
            <td><?= esc($row['nilai']) ?></td>
            <td><?= esc($row['semester']) ?></td>
        </tr>
        <?php endforeach; else : ?>
        <tr><td colspan="4" class="text-center">Tidak ada data nilai.</td></tr>
        <?php endif ?>
    </tbody>
    </table>
  </div>
</body>
</html>
