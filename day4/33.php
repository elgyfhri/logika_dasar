<?php

$hasil_ujian = 50;


$predikat = $hasil_ujian >= 90 ? 'A' : b($hasil_ujian >= 75 ? 'B' : 'C');
echo $predikat;


?>