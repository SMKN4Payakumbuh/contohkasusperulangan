<?php


$x = (int)readline("masukkkan angka yang akan di acak : ");
$s = (int)readline("sampai -  : ");
$p =(int)readline("jumlah pemenang :");
do{

  $acak=rand($x ,$s);
  echo "selamat kepada pemegang angka : " .$acak ;
  $x++;
 } while ($acak =!$p);