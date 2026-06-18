<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1 align="center">
        WEB TI UNIMUS 2026 OYEE
    </h1>
    <table border="1" align="center" cellspacing="0" cellpadding="10px">
        <nav class="navbar">
            <a href="index.php">Home</a>
            <a href="biodata.php">Biodata</a>
            <a href="kontak.php">Kontak</a>
            <a href="mahasiswa.php">Data Mahasiswa</a>
        </nav>
    </table>
    <h2>
        Data Mahasiswa
    </h2>
    <div class="btn-container">
        <a href="tambahdata.php" class="btn">+ Tambah Data</a>
    </div>
    <table border="1" cellpadding="5px">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Nim</th>
            <th>Jurusan</th>
            <th>Email</th>
            <th>No. HP</th>
            <th>Foto</th>
            <th>Aksi</th>

            <!-- <td>Baris 1, kolom2</td> -->
        </tr>
        <tr>
            <td align="center">1</td>
            <td>Adelia eka rahmawati</td>
            <td>13242520036</td>
            <td align="center">Teknologi Informasi</td>
            <td align="center">adellia3210@gmail.com</td>
            <td align="center">0898772537354</td>
            <td><img src="assets/img/foto.jpg" width="70px"></td>
            <td>
                <a href="editdata.php"><button>Edit</button></a>
                <a href="deletdata.php"><button>Hapus</button></a>
            </td>
        </tr>
        <tr>
            <td align="center">2</td>
            <td>Andhika Bagus Setiawan</td>
            <td>13242520023</td>
            <td align="center">Teknologi Informasi</td>
            <td align="">Andhika Bagus Setiawan339@gmail.com</td>
            <td align="center">08983335536</td>
            <td><img src="assets/img/foto2.jpg" width="70px"></td>
             <td>
                <a href="editdata.php"><button>Edit</button></a>
                <a href="deletdata.php"><button>Hapus</button></a>
            </td>
        </tr>
    </table>
    <hr>
    <table border="1" cellpadding="5px">
        <tr>
            <td>1,1</td>
            <td>1,2</td>
            <td>1,3</td>
            <td>1,4</td>
        </tr>
        <tr>
            <td>2,1</td>
            <td colspan="2" rowspan="2"></td>
            <!-- <td>2,3</td> -->
            <td>2,4</td>
        </tr>
        <tr>
            <td>3,1</td>
            <!-- <td>3,2</td> -->
            <!-- <td>3,3</td> -->
            <td>3,4</td>
        </tr>
        <tr>
            <td>4,1</td>
            <td>4,2</td>
            <td>4,3</td>
            <td>4,4</td>
        </tr>
    </table>

    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">

</body>

</html>