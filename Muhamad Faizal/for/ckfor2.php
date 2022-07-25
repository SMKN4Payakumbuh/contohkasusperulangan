<?php
    $bil1= (int)readline("masukkan bilangan : ");
    $sam= (int)readline("sampai ke - : ");
    for($a=1;$a<=$sam;$a++)
    {
        {
        $total=$a*$bil1;
        echo $a ."x".$bil1."=".$total."\n";
        }
    }
?>