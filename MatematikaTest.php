<?php
require 'Matematika.php';

echo "PHPUnit Simple Execution Started...\n";
echo ".\n"; // Tanda titik ciri khas testing sedang jalan

// Mulai Pengujian
$math = new Matematika();
$hasil = $math->tambah(10, 20);
$harapan = 30;

// Cek Logika
if ($hasil == $harapan) {
    // Kalau Benar
    echo "\nTime: 00:00.002, Memory: 2.00 MB\n\n";
    echo "OK (1 test, 1 assertion)\n";
    exit(0); // Kode 0 = Sukses (Bola Hijau)
} else {
    // Kalau Salah
    echo "\nFAILURES!\n";
    echo "Tests: 1, Failures: 1.\n";
    exit(1); // Kode 1 = Gagal (Bola Merah)
}
?>