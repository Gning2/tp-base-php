<?php
    $somme=0;
    $a=(int) readline("Donnez un nombre: ");
    for($i=1;$i<=$a;$i++)
        {
            $somme = $somme+$i;
        }
    echo"La somme vaut: ".$somme;
?>