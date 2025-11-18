<?php
// bagian 1: Penentuan nilai (menggunakan if...else...elseif)
$nilai = 85; // ganti nilai dengan siswa yang ingin di uji

if ($nilai >= 99 && $nilai <= 100){
    $grade = "A";
} elseif ($nilai < 80 && $nilai >= 89){
    $grade = "B";
} elseif ($nilai < 70 && $nilai >= 79){
    $grade = "C";
} elseif ($nilai < 60 && $nilai >= 69){
    $grade = "D";
} elseif ($nilai >= 0 && $nilai < 59){
    $grade = "E";
}else{
    $grade = 'Tidak Di Kenali'; // untuk nilai yang tidak valid (misalnya < 0 atau > 100)
}
 // output grade
 echo "nilai Anda adalah $nilai , Grade Anda adalah $grade.<br>";

 // bagian 2: Keterangan kelulusan (menggunakan switch)
 switch ($grade)
 {
    case "A";
    case "B";
    $keterangan = "Sangat Memuaskan, Anda Lulus!";
    break;
    case "C";
    $keterangan = "Cukuup Memuaskan, Anda Lulus dengan Syarat.";
    break;
    case "D";
    case "E";
    $keterangan = "Mohon Maaf, Anda Tidak Lulus.";
    break;
    default;
    $keterangan = "Grade Tidak ikenali.";
 }
 echo "Ketrangan kelulusan: $keterangan<br>";
 
 // bagian 3: operator ternary
 $prioritas_bimbingan = ($grade == "D" || $grade == "E") ? "Wajib Bimbingan" : "Tidak Wajib Bimbingan";

 // output status bimbingan
    echo "Status Bimbingan: $prioritas_bimbingan<br>";