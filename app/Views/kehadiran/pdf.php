<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <style>
    body { font-family: sans-serif; font-size: 12px; }
    table { width: 100%; border-collapse: collapse; margin-top: 20px; }
    th, td { border: 1px solid #333; padding: 6px; text-align: left; }
    th { background-color: #d3f3d6; }
    h3 { text-align: center; }
  </style>
</head>
<body>
  <h3>Laporan Kehadiran Santri</h3>
  <table>
    <thead>
      <tr>
        <th>No</th>
        <th>Nama</th>
        <th>NIS</th>
        <th>Tanggal</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
      <?php if (!empty($kehadiran)) : $no = 1; foreach ($kehadiran as $row) : ?>
        <tr>
          <td><?= $no++ ?></td>
          <td><?= esc($row['nama']) ?></td>
          <td><?= esc($row['nis']) ?></td>
          <td><?= esc($row['tanggal']) ?></td>
          <td><?= esc($row['status']) ?></td>
        </tr>
      <?php endforeach; endif ?>
    </tbody>
  </table>
</body>
</html>
