<?php
//perulangan cari nilai genap
$i=(int)readline("masukkan angka dari : ");
$b=(int)readline("sampai  : ");
while($i<$b){
   if(($i%2)==0){
    echo "Angka genap  ".$i;
    echo "\n";
   }
    $i++;
}