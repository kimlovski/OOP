<?php

$tvujHod1 = rand(1,6);
$tvujHod2 = rand(1,6);
$tvujSoucet = $tvujHod1 + $tvujHod2;

$nepritelHod1 = rand(1,6);
$nepritelHod2 = rand(1,6);
$nepritelSoucet = $nepritelHod1 + $nepritelHod2;

$cisla = [
	1 => 'jedna',
	2 => 'dva',
	3 => 'tři',
	4 => 'čtyři',
	5 => 'pět',
	6 => 'šest',
	7 => 'sedm',
	8 => 'osm',
	9 => 'devět',
	10 => 'deset',
	11 => 'jedenáct',
	12 => 'dvanáct',
];

echo "<p>Svojí první kostkou jsi hodil číslo <strong>".$cisla[$tvujHod1]."</strong></p>";
echo "<p>Svojí druhou kostkou jsi hodil číslo <strong>".$cisla[$tvujHod2]."</strong></p>";

echo "<p>Nepřítel svojí první kostkou  hodil číslo <strong>".$cisla[$nepritelHod1]."</strong></p>";
echo "<p>Nepřítel svojí druhou kostkou hodil číslo <strong>".$cisla[$nepritelHod2]."</strong></p>";

echo "<p> Součet tvých čísel je <strong>".$cisla[$tvujSoucet]."</strong><p>";
echo "<p> Součet protivníkových čísel je <strong>".$cisla[$tvujSoucet]."<p>";

if($tvujSoucet > $nepritelSoucet) {
	echo "Součet tvých čísel je větší než součet protivníka , vyhráváš!";
} elseif ($tvujSoucet == $nepritelSoucet) {
	echo "Součet tvých čísel je roven součtu nepřítele, nikdo nevyhrává!";
} else {
	echo "Součet nepřítelových čísel je větší než tvůj. Nepřítel vyhrává :(";
}


?>