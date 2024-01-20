<!DOCTYPE html>

<head>
</head>

<body>
    <form action="./gioco.php" method="post">
        <?php
        $data = json_decode($_POST["data"]);

        if (gettype($data->carteEstratte) === "string")
            $data->carteEstratte = json_decode($data->carteEstratte);

        $semi = ["fiori", "quadri", "picche", "cuori"];

        do
            $carta = rand(2, 13) . "-" . $semi[rand(0, 3)];
        while (in_array($carta, $data->carteEstratte));


        array_push($data->carteEstratte, $carta);

        ?>
        <!-- fai tanti input quante te ne servono -->
        <input name="nomiGiocatori" value=<?= json_encode($data->nomiGiocatori) ?>>
        <input name="carteEstratte" value=<?= json_encode($data->carteEstratte) ?>>
    </form>
    <!-- commentalo per stoppare l'invio i dati -->
    <script>document.forms[0].submit();</script>
</body>

</html>