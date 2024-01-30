<?php
$bilangan = [75, 77, 87, 70, 90, 81, 69, 87, 66];

foreach ($bilangan as $value){
    if ($value >= 75) {
        echo  "nilai kompeten is :" . $value . "<br>" ; 
    }
}

foreach ($bilangan as $value){
    if ($value < 75) {
        echo  "kelompok nilai  bkn kompeten is :" . $value . "<br>" ; 
    }
}
