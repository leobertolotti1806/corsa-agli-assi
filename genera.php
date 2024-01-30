<!DOCTYPE html>

<head></head>

<body>
	<form action="./gioco.php" method="post">
		<?php
		$data = json_decode($_POST["data"]);

		if (gettype($data->carteEstratte) === "string")
			$data->carteEstratte = json_decode($data->carteEstratte);

		if (gettype($data->carteLato) === "string")
			$data->carteLato = json_decode($data->carteLato);

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

		$posCartaFiori = $data->stiliGiocatori->fiori;
		$posCartaQuadri = $data->stiliGiocatori->quadri;
		$posCartaPicche = $data->stiliGiocatori->picche;
		$posCartaCuori = $data->stiliGiocatori->cuori;

		/// condizioni per far scoprire le carte a lato
		$raggiuntaCartaCoperta1 = $posCartaFiori >= 0 && $posCartaQuadri >= 0 && $posCartaPicche >= 0 && $posCartaCuori >= 0 ? TRUE : FALSE;
		$raggiuntaCartaCoperta2 = $posCartaFiori >= 22 && $posCartaQuadri >= 22 && $posCartaPicche >= 22 && $posCartaCuori >= 22 ? TRUE : FALSE;
		$raggiuntaCartaCoperta3 = $posCartaFiori >= 44 && $posCartaQuadri >= 44 && $posCartaPicche >= 44 && $posCartaCuori >= 44 ? TRUE : FALSE;
		$raggiuntaCartaCoperta4 = $posCartaFiori >= 88 && $posCartaQuadri >= 88 && $posCartaPicche >= 88 && $posCartaCuori >= 88 ? TRUE : FALSE;

		if($data->stiliGiocatori->fiori === 88){ 
			$nomeGiocatoreFiori = $data->nomiGiocatori->fiori;
			echo "<script type='text/javascript'>alert('Ha vinto il giocatore $nomeGiocatoreFiori (FIORI)!');</script>";
		}else if($data->stiliGiocatori->quadri === 88){
			$nomeGiocatoreQuadri = $data->nomiGiocatori->quadri;
			echo "<script type='text/javascript'>alert('Ha vinto il giocatore $nomeGiocatoreQuadri (QUADRI)!');</script>";
		}else if($data->stiliGiocatori->picche === 88){
			$nomeGiocatorePicche = $data->nomiGiocatori->picche;
			echo "<script type='text/javascript'>alert('Ha vinto il giocatore $nomeGiocatorePicche (PICCHE)!');</script>";
		}else if($data->stiliGiocatori->cuori === 88){
			$nomeGiocatoreCuori = $data->nomiGiocatori->cuori;
			echo "<script type='text/javascript'>alert('Ha vinto il giocatore $nomeGiocatoreCuori (CUORi)!');</script>";
		}
		?>
		
		<!-- fai tanti input quante te ne servono -->
		<input name="nomiGiocatori" value=<?= json_encode($data->nomiGiocatori) ?> type="hidden">
		<input name="carteEstratte" value=<?= json_encode($data->carteEstratte) ?> type="hidden">
		<input name="stiliGiocatori" value=<?= json_encode($data->stiliGiocatori) ?> type="hidden">
		<input name="carteLato" value=<?php if($b) json_encode($data->carteLato) ?> type="hidden">
	</form>

	<!-- commentalo per stoppare l'invio i dati -->
	<script>document.forms[0].submit();</script>
</body>

</html>