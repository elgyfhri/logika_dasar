<?php

$bil1 = [80, 77, 65, 89, 55, 12, 90, 86];
$bil2 = [77, 99, 55, 81, 45, 90, 91, 98];

$nyarisama = array_intersect($bil1,$bil2);
$nyaribeda2 = array_diff($bil1,$bil2);

echo "kelompok bilangan yang sama : ";
foreach ($nyarisama as $value) {
    echo $value . " ";
}
echo "</br>";
echo "kelompok bilangan yang berbeda : ";
foreach ($nyaribeda2 as $beda) {
echo $beda . " ";
}