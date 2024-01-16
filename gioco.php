<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/gioco.css">

    <title>Gioco</title>
</head>

<body>
    <?php var_dump($_POST);
    echo "<br>";
    #var_dump($_POST["carteEstratte"]); ?>
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
        if (!isset($_POST["data"])) {
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
            $nomiGiocatori = json_encode($_POST["nomiGiocatori"]);
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