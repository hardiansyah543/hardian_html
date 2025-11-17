<?php
// Variabel input
$pemasukan = 50000000;
$hutang_a = 16500000;
$bunga_a = 0.05; // 5%
$hutang_b = 9500000;
$bunga_b = 0.045; // 4.5%

// Hitung total bunga masing-masing hutang
$total_bunga_a = $hutang_a * $bunga_a;
$total_bunga_b = $hutang_b * $bunga_b;

// Hitung total bunga semua hutang
$total_bunga = $total_bunga_a + $total_bunga_b;

// Hitung total hutang (pokok + bunga)
$total_hutang = ($hutang_a + $hutang_b) + $total_bunga;

// Hitung sisa uang setelah membayar hutang
$sisa_uang = $pemasukan - $total_hutang;

// Tampilkan hasil
echo "=== HASIL PERHITUNGAN ===<br>";
echo "Pemasukan: Rp " . number_format($pemasukan, 0, ',', '.') . "<br>";
echo "Total Bunga Hutang: Rp " . number_format($total_bunga, 0, ',', '.') . "<br>";
echo "Total Hutang (termasuk bunga): Rp " . number_format($total_hutang, 0, ',', '.') . "<br>";
echo "Sisa Uang: Rp " . number_format($sisa_uang, 0, ',', '.') . "<br>";
?>