<?php
    $fact=1;
    $a=(int) readline("Donnez un nombre: ");
    for($i=1;$i<=$a;$i++)
        {
            $fact = $fact*$i;
        }
    echo"La factorielle de $a vaut: ".$fact;
?>