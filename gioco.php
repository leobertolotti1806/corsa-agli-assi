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

    <img id="mazzo" src="./img/dorso.JPG">
    <img id="scoperta" src="./img/bg_s1.gif">

    <div id="giocatori">
        <div>
            <img src="./img/bg_c1.gif">
            <b><?= $_POST["nomeGiocatoreFiori"] ?></b>
        </div>
        <div>
            <img src="./img/bg_h1.gif">
            <b><?= $_POST["nomeGiocatoreCuori"] ?></b>
        </div>
        <div>
            <img src="./img/bg_d1.gif">
            <b><?= $_POST["nomeGiocatoreQuadri"] ?></b>
        </div>
        <div>
            <img src="./img/bg_s1.gif">
            <b><?= $_POST["nomeGiocatorePicche"] ?></b>
        </div>
    </div>

    <footer>
        <h1>Creato da Bertolino e Bertolotti</h1>
    </footer>
</body>

</html>