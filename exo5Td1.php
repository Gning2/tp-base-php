<?php
$nombre = (int) readline("Donnez un nombre: ");
$result = 1;
for($i=1;$i<=10;$i++)
{
    $result = $nombre*$i;
    echo $nombre.'x'.$i.'='.$result."\n";
}