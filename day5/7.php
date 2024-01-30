<?php

$barang = [
    [
        'nama_barang' => 'Pasta Gigi',
        'harga_barang' => 18000,
        'jumlah_beli' => 1,
    ],
    [
        'nama_barang' => 'Sabun Mandi',
        'harga_barang' => 5000,
        'jumlah_beli' => 3,
    ],
    [
        'nama_barang' => 'Aloe Vera Sheet Mask',
        'harga_barang' => 15000,
        'jumlah_beli' => 5,
    ],
];
$jumlah_pembayaran = 0;

foreach ($barang as $value) {
    $jumlah_pembayaran += $value['harga_barang'] * $value['jumlah_beli']  ;
}
echo "jumlah yang di beli beni adalah = " . $jumlah_pembayaran;