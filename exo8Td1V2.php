<?php
$z=0;
$l=0;
    for($i=1;$i<=20;$i++)
    {
        $a=(int) readline("Donnez le nombre numero $i: ");
       
        if ($a>$z)
        {
            $z=$a;
            $l=$i;
        }
    }
    
    echo"Le nombre le plus grand est: $z.\n";
    echo"Il a été saisi en position : $l";
?>