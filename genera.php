<!DOCTYPE html>

<head>
</head>

<body>
    <form action="./gioco.php" method="post">
        <?php
        $data = json_decode($_POST["data"]);
        
        $semi = ["fiori", "quadri", "picche", "cuori"];

        do
            $carta = rand(2, 13) . "-" . $semi[rand(0, 3)];
        while (in_array($carta, $data->carteEstratte));

        array_push($data->carteEstratte, $carta);
        #$data->carteEstratte = json_encode($data->carteEstratte);

        var_dump($data);
        echo "<br>";
        echo "<br>";
        echo gettype($data->carteEstratte);
        echo "<br>";

        var_dump($data->carteEstratte);
        echo "<br><br><br>".json_encode($data->carteEstratte);
        ?>
        <!-- fai tanti input quante te ne servono -->
        <input name="nomiGiocatori" value=<?= json_encode($data->nomiGiocatori) ?>>
        <input name="carteEstratte" value=<?= json_encode($data->carteEstratte) ?>>
    </form>
    <!-- decommentalo per inviare i dati -->
    <!-- <script>document.forms[0].submit();</script> -->
</body>

</html>