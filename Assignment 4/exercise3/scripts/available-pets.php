<?php

    $petsFile = "files/available-pet-information.txt";
    $openFile = fopen($petsFile,"r");

    $contents = fread($openFile,filesize($petsFile));
?>