<?php

$usia = 18;
if ($usia > 6 && $usia < 12) {
    echo "10jam";
} elseif ($usia >= 12 && $usia < 18) {
    echo "8-9jam";
} elseif ($usia >= 18 && $usia <= 40){
    echo "7-8jam";
}else {
    echo "data umur tidak falid";
}
  ?>
