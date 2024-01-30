<?php

$data = [
    [
        'nama' => 'Andi',
        'tahun' => 2008,
    ],
    [
        'nama' => 'Beni',
        'tahun' => 2001,
    ],
    [
        'nama' => 'Dani',
        'tahun' => 2004,
    ],
    [
        'nama' => 'Eko',
        'tahun' => 2006,
    ]
];

echo "<ol>";
foreach ($data as $key => $value) {
    if ( $value['tahun'] % 4 == 0) {
        echo "<li>" . $value['nama'] . " = kabisat" . "(". $value['tahun'] . ")" . "<li>" ;
    } else {
        echo "<li>" . $value['nama'] . " = bukan kabisat" . "(". $value['tahun'] . ")". "<li>" ;
    }
}

