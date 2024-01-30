<?php

$tahun = 2006;
$tahun_sekarang = 2023;
$selisih_tahun = $tahun_sekarang - $tahun;

if ($selisih_tahun >= 17) {
    echo "Tahun kelahiran $tahun sudah memiliki KTP. Usia sekarang = $selisih_tahun";
} else {
    echo "Tahun kelahiran $tahun belum memiliki KTP. Usia sekarang = $selisih_tahun";
}

?>