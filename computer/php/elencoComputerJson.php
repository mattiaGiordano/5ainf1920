<?php require("./connection.php");

    $TOKEN = "mattiaswag";

    if(isset($_REQUEST["token"])){
        $pass = $_REQUEST["token"];
    } else {
        $pass = "";
    }

    if($pass==$TOKEN) {
	
        if(isset($_REQUEST["id"])){
            $id = $_REQUEST["id"];
        } else {
            $id = "";
        }
        
        if(isset($_REQUEST["tastiera"])){
            $tastiera = $_REQUEST["tastiera"];
        } else {
            $tastiera = "";
        }
        
        if(isset($_REQUEST["video"])){
            $video = $_REQUEST["video"];
        } else {
            $video = "";
        }
        
        if(isset($_REQUEST["case"])){
            $case = $_REQUEST["case"];
        } else {
            $case = "";
        }
        
        $sql = "SELECT * FROM computer";
        if($id!=""){
            $sql.=" WHERE id = $id";
        } 
        if($tastiera!=""){
            $sql.=" WHERE marcaTastiera = $tastiera";
        }
        if($video!=""){
            $sql.=" WHERE marcaVideo = $video";
        }
        if($case!=""){
            $sql.=" WHERE marcaCase = $case";
        }
        
        $rs=$con->query($sql);
        if($rs==false) {
            die("Errore di connessione: $codice - $errore");
        }
        
        $vet=array();
        while($record = $rs->fetch_assoc()){
            array_push($vet, $record);
        }
        
        $json= json_encode($vet);
        echo $json;
    }
    else {
        die("403 - forbidden");
    }

?>
