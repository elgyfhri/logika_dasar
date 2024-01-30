<?php

$waktu1 = "23.55";

function ubahWaktu($waktu) {
    
    $jam = substr($waktu, 0, 2);
    $menit = substr($waktu, 3, 2);
    
    $jamp = ($jam < 12) ? 'AM' : 'PM';
    $jam = ($jam > 12) ? $jam - 12 : $jam;

    $waktuUbah = "$jam:$menit $jamp";

    return $waktuUbah;
}

$hasil = ubahWaktu($waktu1);

echo "$hasil";

