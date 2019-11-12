<html>
    <head>
        <title>Hai inventato una fiaba!</title>
    </head>
    <body>
        <?php
            $autore=$_REQUEST["autore"];
            $titolo=$_REQUEST["titolo"];
            $protagonisti=$_REQUEST["protagonisti"]; //array
            $ambientazione=$_REQUEST["ambientazione"];
            $svolgimento=$_REQUEST["svolgimento"];
            $finale=$_REQUEST["finale"];

            echo "<em>\" $titolo \"</em>, una fiaba di $autore<br>";
            echo "I protagonisti di questa fiaba sono: &nbsp;&nbsp;";
            foreach ($protagonisti as $p){
                echo "$p&nbsp;";
            } 
            echo "<br>La fiaba si svolge in una:&nbsp;&nbsp;$ambientazione<br>";
            echo "Questo &egrave; lo svolgimento della fiaba:<br>$svolgimento<br><br>";
            echo "Il racconto ha un finale $finale<br>";
        ?>
    </body>
</html>