<html>
    <head>
        <title>DB & PHP test: INSERT</title>
    </head>
    <body>
        <?php
            $personaggio = $_REQUEST["personaggio"];
            $citta = $_REQUEST["citta"];
            $connection = mysqli_connect("localhost", "root", "", "Dysneyland");
            $query =  "SELECT * 
                         FROM Personaggi 
                        WHERE nome = '$personaggio'";
            $result = mysqli_query($connection, $query);
            if (mysqli_num_rows($result) != 0) {
                echo "Il personaggio $personaggio &egrave; gi&agrave; presente nel database!";
            } else {
                $query = "INSERT INTO Personaggi VALUES
                          ('$personaggio', '$citta')";
                $result = mysql_query($query,$connection);
                echo " Il personaggio $personaggio &egrave; stato aggiunto al database!";
            }
            mysql_close($connection);
        ?>
        <br><br>
        <a href="disneyland.php">Visualizza elenco personaggi</a>
    </body>
</html>