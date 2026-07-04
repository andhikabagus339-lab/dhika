<?php
require 'fungsi.php';

$query = "SELECT * FROM mahasiswa";
$mahasiswas = tampildata($query);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>

    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
</head>
<body>

<h1 align="center">WEB TI UNIMUS 2026 OYEE</h1>

<nav class="navbar">
    <a href="index.php">Home</a>
    <a href="profil.php">Profil</a>
    <a href="kontak.php">Kontak</a>
    <a href="mahasiswa.php">Data Mahasiswa</a>
</nav>

<h2>Data Mahasiswa</h2>

<div class="btn-container">
    <a href="tambahdata.php" class="btn">+ Tambah Data</a>
</div>

<table border="1" cellpadding="8">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>NIM</th>
        <th>Jurusan</th>
        <th>Email</th>
        <th>No HP</th>
        <th>Foto</th>
        <th>Aksi</th>
    </tr>

<?php if (!empty($mahasiswas)) : ?>
<?php $no = 1; ?>
<?php foreach ($mahasiswas as $mhs) : ?>

<tr>
    <td><?= $no++; ?></td>
    <td><?= htmlspecialchars($mhs['nama']); ?></td>
    <td><?= htmlspecialchars($mhs['nim']); ?></td>
    <td><?= htmlspecialchars($mhs['jurusan']); ?></td>
    <td><?= htmlspecialchars($mhs['email']); ?></td>

    <!-- FIX DI SINI 🔥 -->
    <td>
        <?= isset($mhs['no_hp']) ? htmlspecialchars($mhs['no_hp']) : '-'; ?>
    </td>

    <!-- FOTO AMAN -->
    <td>
        <?php if (!empty($mhs['foto']) && file_exists("assets/img/" . $mhs['foto'])) : ?>
            <img src="assets/img/<?= $mhs['foto']; ?>" width="70">
        <?php else : ?>
            -
        <?php endif; ?>
    </td>

    <td>
        <a href="editdata.php?id=<?= $mhs['id']; ?>">Edit</a> |
        <a href="deletdata.php?id=<?= $mhs['id']; ?>" onclick="return confirm('Yakin mau hapus?');">Hapus</a>
    </td>
</tr>

<?php endforeach; ?>
<?php else : ?>

<tr>
    <td colspan="8" align="center">Data belum ada</td>
</tr>

<?php endif; ?>

</table>

</body>
</html>