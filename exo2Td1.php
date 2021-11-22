<?php
echo"Bienvenue !!!\n";
$i=(int) readline("Donnez un nombre entre 10 et 20: ");
            while($i<10 || $i>20)
            {
                if($i<10)
                {
                    echo"Plus grand!\n";
                }
                else
                    echo"Plus petit!\n";
                $i=(int) readline("Donnez un nombre entre 10 et 20: ");
            }
            echo"Félicitations!";
?>