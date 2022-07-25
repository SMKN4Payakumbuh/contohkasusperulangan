<?php 

$max = (int)readline("masukkan angka : ");

for ($i = 0; $i <= $max; $i++) {
    if ($i % 2 == 0){
        echo $i . " Genap" ."\n";
    } else {
        echo $i . " Ganjil"."\n";
    }
}

?>