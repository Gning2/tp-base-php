<?php
$od=1;
$des=1;
    $n=(int) readline("Entrez le nombre de chevaux partants: ");
    $p=(int) readline("Entrez le nombre de chevaux joués: ");

    for($i=2;$i<=$p;$i++)
    {
        $od=$od*($i+$n-$p);
        $des=$des*$i;
    }
    echo"Dans l’ordre, une chance sur ".$od." de gagner.\n";
    echo"Dans le désordre, une chance sur ".$od/$des." de gagner.\n";
?>