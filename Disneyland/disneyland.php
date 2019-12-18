<html>
    <head>
        <title>DB & PHP test</title>
    </head>
    <body>

        <?php
            $connection = mysqli_connect("localhost", "root", "", "Dysneyland");
            $query =  "SELECT nome, denominazione 
                         FROM Personaggi, Citta
                        WHERE Personaggi.citta = Citta.sigla 
                     ORDER BY nome";
            $result = mysqli_query($connection, $query);
            if (mysqli_num_rows($result) != 0) {
                echo "<table border>";
                echo "<tr>";
                echo "<th>Personaggi</th>";
                echo "<th>Citta&agrave;</th>";
                echo "</tr>";
                while ($row = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td>" . $row[nome] . "</td>";
                    echo "<td>" . $row[denominazione] . "</td>";
                    echo "</tr>";
                }
                echo "</table>";
            } else {
                echo "Nessun personaggio &egrave; presente nel database!";
                mysqli_close($connection);
            } 
        ?>

        <br>
        <a href="add.php">Aggiungi nuovo personaggio</a>
        <a href="del.php">Elimina personaggio esistente</a>
    </body>
</html>