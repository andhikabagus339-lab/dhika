<?php

require 'fungsi.php';

if (!isset($_GET['ID])) {
    header("Location: mahasswa.php");
    exit;
}
    
$id = (int)$_GET['id'];

if (hapusdata($id) > 0) {
    echo "
    <script>
        alert('Data berhasil dihapus');
        document.location.href='mahasiswa.php';
        </script>
        ";
} else {
    echo "
    <script>
        alert('Data gagal dihapus');
        document.location.href='mahasiswa.php';
    </script>
    ';
}