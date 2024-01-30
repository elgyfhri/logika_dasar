
<?php
$tinggi = 148 / 100;
$berat = 44;
$imt = $berat / ($tinggi * $tinggi);

if ( $imt < 18.5 ) {
    echo "berat bdn kurng";
} elseif ( $imt >= 18.5 && $imt < 22.9) {
    echo "normal";
} elseif ( $imt >= 22.9 && $imt < 24.9) {
    echo "berat badan lebih";
} elseif ( $imt >= 25) {
    echo "obesitas";
}