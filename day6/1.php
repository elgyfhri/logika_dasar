<?php

function formatIDN($date) {
    $hari = [
        'Monday'    => 'Senin',
        'Tuesday'   => 'Selasa',
        'Wednesday' => 'Rabu',
        'Thursday'  => 'Kamis',
        'Friday'    => 'Jumat',
        'Saturday'  => 'Sabtu',
        'Sunday'    => 'Minggu',
    ];

    $bulan = [
        'January'   => 'Januari',
        'February'  => 'Februari',
        'March'     => 'Maret',
        'April'     => 'April',
        'May'       => 'Mei',
        'June'      => 'Juni',
        'July'      => 'Juli',
        'August'    => 'Agustus',
        'September' => 'September',
        'October'   => 'Oktober',
        'November'  => 'November',
        'December'  => 'Desember',
    ];

    $hasilFormat = strtr($date, $hari + $bulan);

    return $hasilFormat;
}

$originalTanggal = 'Monday, 29 January 2024';
$hasilFormat = formatIDN($originalTanggal);
 
echo "$originalTanggal vs $hasilFormat "
?>
