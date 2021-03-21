<!DOCTYPE HTML>
<html>

<head>
  <title>Tabel</title>
</head>

<body>
  <style>
    table {
      width: 70%;
      margin: auto;
      border-collapse: collapse;
      box-shadow: darkgrey 3px;
    }

    thead tr {
      background-color: #36c2ff;
    }
  </style>
  <center>
    <h2>Tabel Mahasiswa</h2>
  </center>

  <table width="600" border="1">
    <tr bgcolor="#36c2ff">
      <th align="center">No</th>
      <th valign="middle">Nim</th>
      <th valign="middle">Nama</th>
      <th valign="center">Jurusan</th>
      <th align="center">Action</th>

    </tr>

    <?=
    $no = 1;
    foreach ($mhsw as $mhsw) {
    ?>

      <tr>
        <td align="center"><?= $no++; ?></td>
        <td align="middle"><?= $mhsw->nim; ?></td>
        <td align="center"><?= $mhsw->nama; ?></td>
        <td align="center"><?= $mhsw->prodi; ?></td>

        <td>
          <a title="Edit" href="<?= base_url("Mahasiswa/edit/$row->nim"); ?>" class="btn btn-info">Edit</a>
          <a title="Delete" href="<?= base_url("Mahasiswa/delete/$row->nim") ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ?')">Delete</a>
        </td>

      </tr>
    <?php
    }
    ?>
  </table>
</body>

</html>