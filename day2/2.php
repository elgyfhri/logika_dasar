<?php
$nilaiMatematika = 87;
$nilaiBahasaInggris = 85;
$nilaiBahasaIndonesia = 87;

$rataRataNilai = ($nilaiMatematika + $nilaiBahasaInggris + $nilaiBahasaIndonesia) / 3;

$nilaiMinimumMatematika = 87;
$nilaiMinimumBahasaInggris = 85;
$nilaiMinimumBahasaIndonesia = 87;
$rataRataMinimum = 85;

if (
    $nilaiMatematika >= $nilaiMinimumMatematika &&
    $nilaiBahasaInggris >= $nilaiMinimumBahasaInggris &&
    $nilaiBahasaIndonesia >= $nilaiMinimumBahasaIndonesia &&
    $rataRataNilai >= $rataRataMinimum
) {
    echo "Selamat! Peserta diterima.";
} else {
    echo "Maaf, peserta tidak memenuhi syarat.";
}
?>