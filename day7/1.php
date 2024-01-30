<?php
function createArray(...$jurusan){
    $jurusan = array_map('strtoupper',$jurusan);
    $uniqueJurusan = array_unique($jurusan);
    return $uniqueJurusan;
}

print_r(createArray("PPLG", "HTL", "KLN", "pplg", "htl"));
?>
