<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/gioco.css">

    <title>Gioco</title>
</head>

<body><!-- 
    <?php
    var_dump($_POST);
    echo "<br>";
    ?> -->
    <header>
        <h1>Corsa agli assi</h1>
    </header>
    <main>
        <section id="colonna">
            <img src="./img/dorso.JPG">
            <img src="./img/dorso.JPG">
            <img src="./img/dorso.JPG">
            <img src="./img/dorso.JPG">
            <img src="./img/dorso.JPG">
        </section>
        <section id="gioco">
            <img src="./img/bg_c1.gif">
            <img src="./img/bg_h1.gif">
            <img src="./img/bg_d1.gif">
            <img src="./img/bg_s1.gif">
        </section>
    </main>

    <form action="./genera.php" method="POST">
        <?php
        $value = "";
        #COMUNICAZIONE TRAMITE VALUE DEL BOTTONE
        if (isset($_POST["nomeGiocatoreFiori"])) {
            /* CODICE DA ESEGUIRE LA PRIMA VOLTA CHE VIENE APERTA LA PAGINA */
            /* ovvero la prima volta dopo aver inserito i nomi */
            $nomiGiocatori = array(
                "fiori" => $_POST["nomeGiocatoreFiori"],
                "cuori" => $_POST["nomeGiocatoreCuori"],
                "quadri" => $_POST["nomeGiocatoreQuadri"],
                "picche" => $_POST["nomeGiocatorePicche"]
            );

            $value = json_encode([
                "carteEstratte" => array(),
                "nomiGiocatori" => $nomiGiocatori
            ]);
        } else {
            /* CODICE DA ESEGUIRE TUTTE LE VOLTE CHE LA PAGINA VIENE APERTA */
            /* tranne la prima volta */
            $nomiGiocatori = json_decode($_POST["nomiGiocatori"]);

            $nomiGiocatori = array(
                "fiori" => $nomiGiocatori->fiori,
                "cuori" => $nomiGiocatori->cuori,
                "quadri" => $nomiGiocatori->quadri,
                "picche" => $nomiGiocatori->picche
            );

            $value = json_encode([
                "carteEstratte" => $_POST["carteEstratte"],
                "nomiGiocatori" => $nomiGiocatori
            ]);
        }
        ?>
        <button id="mazzo" name="data" value=<?= $value ?>></button>
    </form>
    <img id="scoperta" src="./img/bg_s1.gif">

    <div id="giocatori">
        <div>
            <img src="./img/bg_c1.gif">
            <b>
                <?= $nomiGiocatori["fiori"] ?>
            </b>
        </div>
        <div>
            <img src="./img/bg_h1.gif">
            <b>
                <?= $nomiGiocatori["cuori"] ?>
            </b>
        </div>
        <div>
            <img src="./img/bg_d1.gif">
            <b>
                <?= $nomiGiocatori["quadri"] ?>
            </b>
        </div>
        <div>
            <img src="./img/bg_s1.gif">
            <b>
                <?= $nomiGiocatori["picche"] ?>
            </b>
        </div>
    </div>

    <footer>
        <h1>Creato da Bertolino e Bertolotti</h1>
    </footer>
</body>

</html>