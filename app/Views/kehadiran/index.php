<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Kehadiran Santri</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container mt-4">
    <h3>Data Kehadiran</h3>
    <a href="<?= base_url('kehadiran/tambah') ?>" class="btn btn-success mb-3">+ Tambah Kehadiran</a>
    <a href="<?= base_url('kehadiran/export') ?>" class="btn btn-success mb-3">+ Export PDF Kehadiran</a>
    <table class="table table-bordered">
      <thead class="table-success">
        <tr>
          <th>No</th>
          <th>Tanggal</th>
          <th>Nama Santri</th>
          <th>NIS</th>
          <th>Status</th>
        </tr>
      </thead>
      <tbody>
        <?php if (!empty($kehadiran)) : $no = 1; foreach ($kehadiran as $row) : ?>
          <tr>
            <td><?= $no++ ?></td>
            <td><?= esc($row['tanggal']) ?></td>
            <td><?= esc($row['nama']) ?></td>
            <td><?= esc($row['nis']) ?></td>
            <td><?= esc($row['status']) ?></td>
          </tr>
        <?php endforeach; else : ?>
          <tr><td colspan="5" class="text-center">Belum ada data kehadiran.</td></tr>
        <?php endif ?>
      </tbody>
    </table>
  </div>
</body>
</html>
