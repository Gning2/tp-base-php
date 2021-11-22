<?php
$num=1;

    $n=(int) readline("Entrez le nombre de chevaux partants: ");
    $p=(int) readline("Entrez le nombre de chevaux joués: ");
    
    for($i=2;$i<=$n;$i++)
    {
        $num=$num*$i;
    }
    $d1=1;
    for($i=2;$i<=$n-$p;$i++)
    {
        $d1=$d1*$i;
    }
    $d2=1;
    for($i=2;$i<=$p;$i++)
    {
        $d2=$d2*$i;
    }
    echo"Dans l’ordre, une chance sur ".$num/$d1." de gagner.\n";
    echo"Dans le désordre, une chance sur ".$num/($d1*$d2)." de gagner.\n";
?>