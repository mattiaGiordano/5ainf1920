<?php
    $fiori1 = array('garofano', 'viola', 'tulipano', 'primula');
    $fiori2 = ['garofano', 'viola', 'tulipano', 'primula'];
    $fiori3 = array(
        0 => "garofano",
        1 => "viola",
        2 => "tulipano",
        3 => "primula");
    $hashTableFiori = array(
        "ga" => "garofano",
        "vi" => "viola",
        "tu" => "tulipano",
        "pr" => "primula");
    foreach ($fiori1 as $fiore){
        echo $fiore."<br>";
    }
    foreach ($fiori2 as $fiore){
        echo $fiore."<br>";
    }
    foreach ($fiori3 as $fiore){
        echo $fiore."<br>";
    }
    foreach ($hashTableFiori as $fiore){
        echo $fiore."<br>";
    }
?>