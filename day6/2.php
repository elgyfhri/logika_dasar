<?php
function formatNumber($number) {
    if ($number < 1000) {
        echo $number;
    } elseif ($number < 1000000) {
        echo ($number / 1000) . 'K';
    } else {
        echo ($number / 1000000) . 'M';
    }
}

formatNumber(9000);
echo "</br>";
formatNumber(1000000);
