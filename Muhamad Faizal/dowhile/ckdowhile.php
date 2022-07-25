<?php
    $bil1= (int)readline("bilangan perkalian dari - : ");
    $a= (int)readline("masukkan bilangan perkalaian : ");
    $j= (int)readline(" perkalian ".$a ."samapai - : ");
    do { 
        $total=$bil1*$a;
    echo $bil1 ."x".$a."=".$total."\n";
    $a=$a+1;
        
    }while ($a<=$j);
?>