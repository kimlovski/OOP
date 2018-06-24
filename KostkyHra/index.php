<!DOCTYPE html>
<html>
<head>
	<title>Hoď si kostkou</title>
</head>
<body>
	<?php
		//vytvor novou hru a start hry
		include_once("obgame.php");
		$hra = new Game(["Roman","Jirka","Dandy","Petr"],10,50,10); //kolik lidi, kolik kol, kolik sten, kolik kostek
		$hra->startGame();
	/*	$hrac = New Hrac("Hrac");
		echo $hrac->getName();
		$kostka = New Kostka(9);
		$kostka->hodKostkou();
		echo $kostka->getCislo();
		echo $kostka->getPocetSten(); */
	?>
</body>
</html>