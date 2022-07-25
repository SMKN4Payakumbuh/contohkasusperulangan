<?php

$angka	= (int)readline("masukan angka : ");
$i = 1;
$arr	= [];
while ($i <= $angka){
    if ($angka % $i == 0)
        $arr[] = "\n".$i."\n";
        $i++;
}

echo "Faktor dari angka ".$angka." adalah ".implode(', ', $arr);

?>