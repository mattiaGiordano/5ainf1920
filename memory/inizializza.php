<?php
	session_start();
    //matrice che tiene conto di quale posizione non è ancora stato assegnato 
    $tempArray = array(
        array("empty", "empty"),
        array("empty", "empty"),
        array("empty", "empty"),
        array("empty", "empty")
    );
     
    //metrice delle immagini
    $_SESSION["images"]=array(
        array("img", "img"),
        array("img", "img"),
        array("img", "img"),
        array("img", "img")
    );
    
    //generazione random delle immagini scorrendo la matrice
    for($i = 0; $i < 4; $i++)
    {
        for($j=0; $j<2; $j++)
        {
            $empty = true;
            while($empty)
            {
                $indrow = rand(0, 3);
                $indcol = rand(0, 1);                
                if($tempArray[$indrow][$indcol] == "empty")
                {                   
                   $tempArray[$indrow][$indcol] = "full";
                   $empty = false;
                   $_SESSION["images"][$indrow][$indcol] = "images/img".($i+1).".png";
                }
            }
        }
    }
    /*debug
    $debug = 2;
    if($debug == 1)
    {
        echo json_encode($_SESSION["images"]);
        session_unset();
        session_destroy();
    }
	else if($debug == 2)
	{
        require("giocaMemory.php");		
	}
    else
    {
        require("gioca.php");
    }*/
?>