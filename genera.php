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
        <input name="nomiGiocatori" value=<?= json_encode($data->nomiGiocatori) ?>>
        <input name="carteEstratte" value=<?= json_encode($data->carteEstratte) ?>>
    </form>
    <!-- <script>document.forms[0].submit();</script> -->
</body>

</html>
<?php


#prova a fare qualche giochetto con $_POST per salvare e spedire dati perchè senza sessioni
#non saprei cosa farti usare

#USA LO STYLE TOP CHE DECREMENTE NELLA CARTE PER FAR VEDERE CHE SALGONO, CAMBIANDOLO OGNI VOLTA
#CON LO STYLE INLINE MENTRE GENERI LA PAGINA PHP gioco.php




#echo "<br><br>$cartaEstratta";

/* inviaDati($data);

header("Location: ./gioco.php");
exit(); */


/* function inviaDati($dati)
{
    $options = [
        'http' => [
            'method' => 'POST',
            'header' => 'Content-type: application/x-www-form-urlencoded',
            'content' => http_build_query($dati)
        ],
    ];
    $response = file_get_contents(
        "./gioco.php",
        false,
        stream_context_create($options
            
        )
    );

    if (!$response)
        die("Errore nell'invio di dati!");
} */
?>