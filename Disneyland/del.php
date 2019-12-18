<html>
    <head>
        <title>DB & PHP test: DELETE</title>
    </head>
    <body>
        <?php
            $connection = mysqli_connect("localhost", "root", "", "Dysneyland");
            $query =  "SELECT nome 
                         FROM Personaggi 
                     ORDER BY nome";
            $result = mysqli_query($connection, $query);
            if (mysqli_num_rows($result) != 0) {
        ?>
        <form action="delete.php" method="POST"><br>
            Personaggio da eliminare<br> 
            <select name="personaggio">
                <?php
                    while ($row = mysqli_fetch_array($result)) {
                        echo "<option value=\"" . $row[0] . "\">" . $row[0] . "</option>";
                    }
                ?>
            </select> <br><br>
            <input type="submit" value="Elimina">                            
        </form>
        <?php
            } else {
                echo "Nessun personaggio &egrave; presente nel database!"
                mysqli_close($connection);
            }
        ?>
    </body>
</html>