<!DOCTYPE html>
<html>
    <head>
        <title>Join Tabel</title>
</head>
<body>

<table border="1">
    <tr>
        <td>No.</td>
        <td>nama</td>
        <td>kelas</td>
        <td>jurusan</td>
        <td>angkatan</td>
        <td>nominal</td>
</tr>

<?php
include("koneksi.php");

$query = mysqli_query($conn, "SELECT * FROM tb_siswa INNER JOIN tb_jurusan ON tb_siswa.id_jurusan = tb_jurusan.id_jurusan INNER JOIN tb_spp ON tb_siswa.id_spp = tb_spp.id_spp");

$no = 1;
foreach ($query as $row) :
?>

<tr>
    <td><?= $no++; ?></td>
    <td><?= $row['nama']; ?></td>
    <td><?= $row['kelas']; ?></td>
    <td><?= $row['nama_jurusan']; ?></td>
    <td><?= $row['angkatan']; ?></td>
    <td><?= $row['nominal']; ?></td>
</tr>

<?php endforeach; ?>

</table>
</body>
</html>
