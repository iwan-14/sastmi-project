<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <style>
    body { font-family: sans-serif; font-size: 12px; }
    table { border-collapse: collapse; width: 100%; margin-top: 20px; }
    th, td { border: 1px solid #444; padding: 6px; text-align: left; }
    th { background-color: #d3f3d6; }
    h3 { text-align: center; }
  </style>
</head>
<body>
  <h3>Laporan Nilai Akademik Santri</h3>
  <table>
    <thead>
      <tr>
        <th>No</th>
        <th>Nama</th>
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
      <?php endforeach; endif ?>
    </tbody>
  </table>
</body>
</html>
