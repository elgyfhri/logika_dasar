<?php

function pembandingNama($nama1, $nama2) {
    $panjangNama1 = strlen($nama1);
    $panjangNama2 = strlen($nama2);

    if ($panjangNama1 > $panjangNama2) {
        $selisih = $panjangNama1 - $panjangNama2;
        echo "$nama1 dan $nama2 Nama yang memiliki jumlah karakter lebih banyak: $nama1" . "</br>";
        echo "Selisih jumlah karakter: $selisih";
    } elseif ($panjangNama2 > $panjangNama1) {
        $selisih = $panjangNama2 - $panjangNama1;
        echo "$nama1 dan $nama2 Nama yang memiliki jumlah karakter lebih banyak: $nama2" . "</br>";
        echo "Selisih jumlah karakter: $selisih";
    } else {
        echo "$nama1 dan $nama2 memiliki jumlah karakter yang sama.";
    }
}

pembandingNama("uus", "edi");