<?php
$saldo =(int)readline("saldo awal anda : ");
$bulan =(int)readline("berapa bulan anda menabung : ");
$a=0;

while ($a<=$saldo)
{
    $a++;
    if ($saldo<400000)
{
    $bunga = 0.03;
    $saldobunga = $saldo * $bunga ;
}
else if ($saldo>=400000)
{
    $bunga = 0.05;
    $saldobunga = $saldo * $bunga ;
}
}

$saldoakhir = $saldo + ($saldobunga * $bulan);

echo "Saldo anda setelah ".$bulan." bulan adalah : ".$saldoakhir;
?>