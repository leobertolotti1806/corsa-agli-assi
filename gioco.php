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
	<?php
	$value = "";
	$carteLato2 = array();
	
	#COMUNICAZIONE TRAMITE VALUE DEL BOTTONE

	if (isset($_POST["nomeGiocatoreFiori"])) {
		// CODICE DA ESEGUIRE LA PRIMA VOLTA CHE VIENE APERTA LA PAGINA
		// ovvero la prima volta dopo aver inserito i nomi

		$nomiGiocatori = array(
			"fiori" => $_POST["nomeGiocatoreFiori"],
			"cuori" => $_POST["nomeGiocatoreCuori"],
			"quadri" => $_POST["nomeGiocatoreQuadri"],
			"picche" => $_POST["nomeGiocatorePicche"]
		);

		$stiliGiocatori = array(
			"fiori" => "-22",
			"cuori" => "-22",
			"quadri" => "-22",
			"picche" => "-22"
		);
			
		for($i=0; $i<5; $i++){
			$semi = ["fiori", "quadri", "picche", "cuori"];
			$seme = rand(0, 3);
			$carta = rand(2, 13) . "-" . $semi[$seme];
	
			array_push($carteLato2, $carta);
		}

		$value = json_encode([
			"carteEstratte" => array(),
			"carteLato2" => $carteLato2,
			"nomiGiocatori" => $nomiGiocatori,
			"stiliGiocatori" => $stiliGiocatori,
		]);

		$carteEstratte = array();
	

	} else {
		// CODICE DA ESEGUIRE TUTTE LE VOLTE CHE LA PAGINA VIENE APERTA
		// tranne la prima volta

		$nomiGiocatori = json_decode($_POST["nomiGiocatori"]);

		$nomiGiocatori = array(
			"fiori" => $nomiGiocatori->fiori,
			"cuori" => $nomiGiocatori->cuori,
			"quadri" => $nomiGiocatori->quadri,
			"picche" => $nomiGiocatori->picche
		);

		$stiliGiocatori = (array)json_decode($_POST["stiliGiocatori"]);

		$carteLato2 = (array)json_decode($_POST["carteLato2"]);

		$carteEstratte = json_decode($_POST["carteEstratte"]);

		$value = json_encode([
			"carteLato2" => $carteLato2,
			"carteEstratte" => $carteEstratte,
			"nomiGiocatori" => $nomiGiocatori,
			"stiliGiocatori" => $stiliGiocatori
		]);
	}


	?>

	<main>
		<section id="colonna">
			<img src="./img/
			<?php 
			
			if($stiliGiocatori["fiori"] >= 110 && $stiliGiocatori["cuori"] >= 110 && $stiliGiocatori["quadri"] >= 110 && $stiliGiocatori["picche"] >= 110)
			{
				echo $carteLato2[4] . ".gif";
				$semeCartaLato = substr($carteLato2[4], strpos($carteLato2[4], "-") + 1);

					switch($semeCartaLato)
					{
						case "fiori":
							$stiliGiocatori["fiori"] += 22;
							break;
						case "cuori":
							$stiliGiocatori["cuori"] += 22;
							break;
						case "quadri":
							$stiliGiocatori["quadri"] += 22;
							break;
						case "picche":
							$stiliGiocatori["picche"] += 22;
							break;
					}
			}
			else
				echo "dorso.JPG";
			?>
			">

			<img src="./img/
			<?php 
			
			if($stiliGiocatori["fiori"] >= 88 && $stiliGiocatori["cuori"] >= 88 && $stiliGiocatori["quadri"] >= 88 && $stiliGiocatori["picche"] >= 88)
			{
				echo $carteLato2[3] . ".gif";
				$semeCartaLato = substr($carteLato2[3], strpos($carteLato2[3], "-") + 1);

					switch($semeCartaLato)
					{
						case "fiori":
							$stiliGiocatori["fiori"] += 22;
							break;
						case "cuori":
							$stiliGiocatori["cuori"] += 22;
							break;
						case "quadri":
							$stiliGiocatori["quadri"] += 22;
							break;
						case "picche":
							$stiliGiocatori["picche"] += 22;
							break;
					}
			}
			else
				echo "dorso.JPG";
			?>
			">

			<img src="./img/
			<?php 
			
			if($stiliGiocatori["fiori"] >= 66 && $stiliGiocatori["cuori"] >= 66 && $stiliGiocatori["quadri"] >= 66 && $stiliGiocatori["picche"] >= 66)
			{
				echo $carteLato2[2] . ".gif";
				$semeCartaLato = substr($carteLato2[2], strpos($carteLato2[2], "-") + 1);

					switch($semeCartaLato)
					{
						case "fiori":
							$stiliGiocatori["fiori"] += 22;
							break;
						case "cuori":
							$stiliGiocatori["cuori"] += 22;
							break;
						case "quadri":
							$stiliGiocatori["quadri"] += 22;
							break;
						case "picche":
							$stiliGiocatori["picche"] += 22;
							break;
					}
			}
			else
				echo "dorso.JPG";
			?>
			">

			<img src="./img/
			<?php 
			
			if($stiliGiocatori["fiori"] >= 44 && $stiliGiocatori["cuori"] >= 44 && $stiliGiocatori["quadri"] >= 44 && $stiliGiocatori["picche"] >= 44)
			{
				echo $carteLato2[1] . ".gif";
				$semeCartaLato = substr($carteLato2[1], strpos($carteLato2[1], "-") + 1);

					switch($semeCartaLato)
					{
						case "fiori":
							$stiliGiocatori["fiori"] += 22;
							break;
						case "cuori":
							$stiliGiocatori["cuori"] += 22;
							break;
						case "quadri":
							$stiliGiocatori["quadri"] += 22;
							break;
						case "picche":
							$stiliGiocatori["picche"] += 22;
							break;
					}
			}
			else
				echo "dorso.JPG";
			?>
			">

			<img src="./img/
			<?php 
			
			if($stiliGiocatori["fiori"] >= 22 && $stiliGiocatori["cuori"] >= 22 && $stiliGiocatori["quadri"] >= 22 && $stiliGiocatori["picche"] >= 22)
			{
				echo $carteLato2[0] . ".gif";
				$semeCartaLato = substr($carteLato2[0], strpos($carteLato2[0], "-") + 1);

					switch($semeCartaLato)
					{
						case "fiori":
							$stiliGiocatori["fiori"] += 22;
							break;
						case "cuori":
							$stiliGiocatori["cuori"] += 22;
							break;
						case "quadri":
							$stiliGiocatori["quadri"] += 22;
							break;
						case "picche":
							$stiliGiocatori["picche"] += 22;
							break;
					}
			}
			else
				echo "dorso.JPG";
			?>
			">
		</section>
		<section id="gioco">
			<img src="./img/bg_c1.gif" id="fiori"  style=bottom:<?= $stiliGiocatori["fiori"]  . "%" ?>>
			<img src="./img/bg_h1.gif" id="cuori"  style=bottom:<?= $stiliGiocatori["cuori"]  . "%" ?>>
			<img src="./img/bg_d1.gif" id="quadri" style=bottom:<?= $stiliGiocatori["quadri"] . "%" ?>>
			<img src="./img/bg_s1.gif" id="picche" style=bottom:<?= $stiliGiocatori["picche"] . "%" ?>>
		</section>
	</main>



	<!--Pulsante del mazzo-->
	<form action="genera.php" method="POST">
		<button id="mazzo" name="data" value=<?= $value ?>></button>
	</form>



	<img id="scoperta" src="./img/<?php
	if (count($carteEstratte) == 0)
		echo "dorso.JPG";
	else echo end($carteEstratte) . ".gif";
	?>">

	<div id="giocatori">
		<div>
			<img src="./img/bg_c1.gif">
			<b>
				<?= $nomiGiocatori["fiori"] ?>
			</b>
		</div>
		<div>
			<img src=" ./img/bg_h1.gif">
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

	<?php

	// Controllo condizioni di vittoria con disattivazione del pulsante di generazione nuova carta per evitare di fare casini dato che il gioco è già finito
	/// VA FATTO QUI ALLA FINE altrimenti si possono verificare casi in cui deve chiamare genera.php e poi ritornare in questa pagine per annunciare la vittoria e potrebbero capitare cose inaspettate
	if($stiliGiocatori["fiori"] >= 88){ 
		echo "<script type='text/javascript'>alert('Ha vinto il giocatore {$nomiGiocatori["fiori"]} (FIORI)!');document.addEventListener('DOMContentLoaded', function() {var mazzoButton = document.getElementById('mazzo');if (mazzoButton) {mazzoButton.disabled = true;}});</script>";
	}else if($stiliGiocatori["quadri"] >= 88){
		echo "<script type='text/javascript'>alert('Ha vinto il giocatore {$nomiGiocatori["quadri"]} (QUADRI)!');document.addEventListener('DOMContentLoaded', function() {var mazzoButton = document.getElementById('mazzo');if (mazzoButton) {mazzoButton.disabled = true;}});</script>";
	}else if($stiliGiocatori["picche"] >= 88){
			echo "<script type='text/javascript'>alert('Ha vinto il giocatore {$nomiGiocatori["picche"]} (PICCHE)!');document.addEventListener('DOMContentLoaded', function() {var mazzoButton = document.getElementById('mazzo');if (mazzoButton) {mazzoButton.disabled = true;}});</script>";
	}else if($stiliGiocatori["cuori"] >= 88){
		echo "<script type='text/javascript'>alert('Ha vinto il giocatore {$nomiGiocatori["cuori"]} (CUORI)!');document.addEventListener('DOMContentLoaded', function() {var mazzoButton = document.getElementById('mazzo');if (mazzoButton) {mazzoButton.disabled = true;}});</script>";
	}

	?>

	<footer>
		<h1>Creato da Matteo Bertolino e Leonardo Bertolotti - 4ªAINF</h1>
	</footer>
</body>

</html>