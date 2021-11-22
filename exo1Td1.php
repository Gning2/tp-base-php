<?php
    echo"Bienvenue !!!\n";
            $i=(int) readline("Donnez un nombre entre 1 et 3: ");
            while($i<1 || $i>3)
            {
                $i=(int) readline("Donnez un nombre entre 1 et 3: ");
            }
            echo"Félicitations!";
?>