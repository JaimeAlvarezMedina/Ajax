<?php
    $linea='';
    $fp = fopen("Texto.txt", "r");
    while (!feof($fp)){
        $linea = $linea.fgets($fp);
        
    }
    fclose($fp);
    echo $linea;
?>