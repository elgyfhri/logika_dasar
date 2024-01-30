<?php
function hitungLembarRupiah($jumlah) {
    $originalJumlah = $jumlah; // Menyimpan nilai asli

    $hasilPerhitungan = array();

    // Pengecekan untuk setiap pecahan menggunakan pernyataan if
    if ($jumlah >= 100000) {
        $lembar = floor($jumlah / 100000);
        $jumlah -= $lembar * 100000;
        if ($lembar > 0) {
            $hasilPerhitungan[] = "- Rp. 100.000 : $lembar";
        }
    }

    if ($jumlah >= 50000) {
        $lembar = floor($jumlah / 50000);
        $jumlah -= $lembar * 50000;
        if ($lembar > 0) {
            $hasilPerhitungan[] = "- Rp. 50.000 : $lembar";
        }
    }

    if ($jumlah >= 20000) {
        $lembar = floor($jumlah / 20000);
        $jumlah -= $lembar * 20000;
        if ($lembar > 0) {
            $hasilPerhitungan[] = "- Rp. 20.000 : $lembar";
        }
    }

    if ($jumlah >= 10000) {
        $lembar = floor($jumlah / 10000);
        $jumlah -= $lembar * 10000;
        if ($lembar > 0) {
            $hasilPerhitungan[] = "- Rp. 10.000 : $lembar";
        }
    }

    if ($jumlah >= 5000) {
        $lembar = floor($jumlah / 5000);
        $jumlah -= $lembar * 5000;
        if ($lembar > 0) {
            $hasilPerhitungan[] = "- Rp. 5.000 : $lembar";
        }
    }

    if ($jumlah >= 2000) {
        $lembar = floor($jumlah / 2000);
        $jumlah -= $lembar * 2000;
        if ($lembar > 0) {
            $hasilPerhitungan[] = "- Rp. 2.000 : $lembar";
        }
    }

    if ($jumlah >= 1000) {
        $lembar = floor($jumlah / 1000);
        $jumlah -= $lembar * 1000;
        if ($lembar > 0) {
            $hasilPerhitungan[] = "- Rp. 1.000 : $lembar";
        }
    }

    if ($jumlah >= 500) {
        $lembar = floor($jumlah / 500);
        $jumlah -= $lembar * 500;
        if ($lembar > 0) {
            $hasilPerhitungan[] = "- Rp. 500 : $lembar";
        }
    }


    // Ulangi proses yang sama untuk pecahan lainnya

    echo "Jumlah uang: Rp. " . number_format($originalJumlah) . PHP_EOL; // Gunakan nilai asli
    echo "Lembar uang:" . PHP_EOL;
    foreach ($hasilPerhitungan as $hasil) {
        echo $hasil . PHP_EOL;
    }
}

hitungLembarRupiah(140500);
?>


