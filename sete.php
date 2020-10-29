<?php
$numeros = array(15,41,78,10,2,19,26,85,26,30);
$soma = $numeros[0] + $numeros[1] + $numeros[2] + $numeros[3] + $numeros[4] + $numeros[5] + $numeros[6] + $numeros[7] + $numeros[8] + $numeros[9];
echo 'A soma da matriz é: '.$soma;
echo "<br>";
// var_dump($numeros);
$maior=0;
$pos=0;
for ($i=0; $i<count($numeros) ; $i++) { 
	if ($numeros[$i] > $maior) {
		$maior=$numeros[$i];
		$pos=$i;
	}	
}
unset($numeros[$pos]);
$maior=0;
// var_dump($numeros);
for ($i=0; $i<count($numeros); $i++) { 
	if (isset($numeros[$i] )) {
		if ($numeros[$i] > $maior) {
		$maior=$numeros[$i];
		$pos=$i;
		}
	}
}
echo "O 2º maior número é: " .$maior;
?>