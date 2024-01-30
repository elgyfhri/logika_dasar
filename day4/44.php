<?php
    $status = "sakit";

    $presentase = ($status == 'sakit' || $status == 'izin') ? 100 - 3 :
                  (($status == 'alfa') ? 100 - 5 : 100);

    echo $presentase;
?>