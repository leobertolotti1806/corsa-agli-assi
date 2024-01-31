<!DOCTYPE html>

<body>
	<form action="./gioco.php" method="post">

		<?php
		$data = json_decode($_POST["data"]);

		if (gettype($data->carteEstratte) === "string")
			$data->carteEstratte = json_decode($data->carteEstratte);

		$semi = ["fiori", "quadri", "picche", "cuori"];

		do {
			$seme = rand(0, 3);
			$carta = rand(2, 13) . "-" . $semi[$seme];
		} while (in_array($carta, $data->carteEstratte));

		array_push($data->carteEstratte, $carta);

		$data->stiliGiocatori->fiori = (int)json_decode($data->stiliGiocatori->fiori);
		$data->stiliGiocatori->quadri = (int)json_decode($data->stiliGiocatori->quadri);
		$data->stiliGiocatori->picche = (int)json_decode($data->stiliGiocatori->picche);
		$data->stiliGiocatori->cuori = (int)json_decode($data->stiliGiocatori->cuori);

		switch($seme){
			case 0:
				$data->stiliGiocatori->fiori += 22;
				break;
			case 1:
				$data->stiliGiocatori->quadri += 22;
				break;
			case 2:
				$data->stiliGiocatori->picche += 22;
				break;
			case 3:
				$data->stiliGiocatori->cuori += 22;
				break;
		}
		?>

		<input name="nomiGiocatori" value=<?= json_encode($data->nomiGiocatori) ?> type="hidden">
		<input name="carteEstratte" value=<?= json_encode($data->carteEstratte) ?> type="hidden">
		<input name="stiliGiocatori" value=<?= json_encode($data->stiliGiocatori) ?> type="hidden">
		<input name="carteLato2" value=<?= json_encode($data->carteLato2) ?> type="hidden">
	</form>

	<script>document.forms[0].submit();</script>

</body>

</html>