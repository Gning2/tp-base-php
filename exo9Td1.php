<?php
$z=0;
$l=0;
$t=0;
    do
    {
        $a=(int) readline("Donnez un nombre: ");
        $l++;
        if ($a>$z)
        {
            $z=$a;
            $t=$l;
        }
        
    }
    while($a!=0); 
    echo"Le nombre le plus grand est: $z\n";
    echo"Il a été saisi en position numéro : $t";
?>