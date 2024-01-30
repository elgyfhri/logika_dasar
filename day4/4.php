<?php
     $panjangtanah = 13;
     $lebartanah = 9;

     $luastanah = $panjangtanah * $lebartanah;
       if($luastanah < 90){
           echo "tipe 36";
       }elseif($luastanah >= 90 && $luastanah <= 96 ){
           echo "tipe 45";
       }elseif($luastanah > 96 && $luastanah <= 120 ){
           echo "tipe 54";
       }elseif($luastanah > 120 && $luastanah <= 150 ){
           echo "tipe 60";
       }elseif($luastanah > 150){
           echo "tipe 70";
    }
?>