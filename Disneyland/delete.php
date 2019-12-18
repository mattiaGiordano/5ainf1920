<html>
    <head>
        <title>DB & PHP test: DELETE</title>
    </head>
    <body>
        <?php
            $personaggio = $_REQUEST["personaggio"];
            $connection = mysqli_connect("localhost", "root", "", "Dysneyland");
            $query =  "DELETE  
                         FROM Personaggi 
                        WHERE nome = '$personaggio'";
            $result = mysqli_query($connection, $query);
            echo "Il personaggio $personaggio &egrave; stato eliminato dal database";
            mysql_close($connection);
        ?> <br><br> 
        <a href="disneyland.php">Visualizza elenco personaggi</a>
    </body>
</html>