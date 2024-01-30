<?php

$nasi_goreng = 15000;
$ayam_bakar = 20000;
$nasi_kebuli = 25000;
$aneka_jus = 8000;
$es_teh_manis = 3000;
$es_jeruk = 5000;
$hariPembelian = date("l");
$Pembelian = ($nasi_kebuli * 2) + ($nasi_goreng * 2) + $ayam_bakar;
$diskonjumat = 0.05;
$diskonsenin = 0.02;

if ($hariPembelian == "Friday") {
   $totalPembayaran = $Pembelian - ($Pembelian * $diskonjumat);
} elseif ($hariPembelian == "Monday") {
   $totalPembayaran = $Pembelian - ($Pembelian * $diskonsenin);
} else {
}
$totalPembayaran = $Pembelian;

echo "$totalPembayaran"
?>

