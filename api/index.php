<?php
// /api/hello.php

// Ini memberitahu browser bahwa kontennya adalah teks biasa
header('Content-Type: text/plain');

// Ambil parameter 'nama' dari URL, jika tidak ada, gunakan 'Dunia'
$nama = $_GET['nama'] ?? 'Dunia';

// Cetak pesan sambutan
echo "Halo, " . htmlspecialchars($nama) . "! Anda berhasil menjalankan PHP di Vercel.";
?>