<?php
    $du=0;
    $r=0;
    $n10=0;
    $n5=0;
    do
    {
        $a=(int) readline("Entrez le montant: ");
        $du=$du+$a;
    }
    while($a!=0);
    echo"Vous devez: $du euros.\n";

    $g=(int) readline("Montant versé: ");
    $r=$g-$du;
    while($r>=10)
    {
        $n10++;
        $r=$r-10;
    }
    if($r>=5)
    {
        $n5++;
        $r=$r-5;
    }

    echo"Nombre de billets de 10 euro: $n10.\n";
    echo"Nombre de billets de 5 euro: $n5.\n";
    echo"Nombre de piéce de 1 euro: $r.\n";
?>