<?php 
//menghitung rata rata dan memunculkan nama

$student = [
    [
        "nama"=> "andi",
        "nilai" => [100, 100, 80, 90, 80],
    ],
    [
        "nama"=> "yudi",
        "nilai" => [80, 90, 80, 70, 80],
    ],
    [
        "nama"=> "budi",
        "nilai" => [60, 60, 50, 70, 80],
    ],
];

echo "<ol>";
foreach ($student as $key=>$value){
        echo "<li>".$value['nama'] . " = ".(array_sum($value['nilai']) / (count($value['nilai']))) . "</li>";
}
