<?php

$nilai = 79;

if($nilai >= 75 && $nilai <=79){
    echo "CUKUP";
}elseif ($nilai >= 80 && $nilai <=85){
    echo "BAIK";
}elseif ($nilai >= 86 && $nilai <=100){
    echo "SANGAT BAIK";
}else{
    echo "MAAF ANDA TIDAK LULUS";
}
?>