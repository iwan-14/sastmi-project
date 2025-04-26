<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Data Nilai</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container mt-4">
    <h3>Data Nilai Akademik</h3>
    <a href="<?= base_url('nilai/tambah') ?>" class="btn btn-success mb-3">+ Tambah Nilai</a>
    <table class="table table-bordered table-striped">
      <thead class="table-success">
        <tr>
          <th>No</th>
          <th>Nama Santri</th>
          <th>NIS</th>
          <th>Mata Pelajaran</th>
          <th>Nilai</th>
          <th>Semester</th>
        </tr>
      </thead>
      <tbody>
        <?php if (!empty($nilai)) : $no = 1; foreach ($nilai as $row) : ?>
          <tr>
            <td><?= $no++ ?></td>
            <td><?= esc($row['nama']) ?></td>
            <td><?= esc($row['nis']) ?></td>
            <td><?= esc($row['mata_pelajaran']) ?></td>
            <td><?= esc($row['nilai']) ?></td>
            <td><?= esc($row['semester']) ?></td>
          </tr>
        <?php endforeach; else : ?>
          <tr><td colspan="6" class="text-center">Belum ada data nilai.</td></tr>
        <?php endif ?>
      </tbody>
    </table>
  </div>
</body>
</html>
