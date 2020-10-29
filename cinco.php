<?php
$clubes = array(
		'SLB' => array(
			'nome' => 'Sport Lisboa e Benfica',
			'estadio' => 'Estádio da Luz',
			'localidade' => 'Lisboa',
			'pais' => 'Portugal'
		),

		'SCP'=> array(
			'nome' => 'Sporting Clube de Portugal',
			'estadio' => 'Estádio José de Alvalade',
			'localidade' => 'Lisboa',
			'pais' => 'Portugal'
		),

		'FCP'=> array(
			'nome' => 'Futebol Clube do Porto',
			'estadio' => 'Estádio do Dragão',
			'localidade' => 'Porto',
			'pais' => 'Portugal'
		),

		'S.C. Braga'=> array(
			'nome' => 'Sporting Clube de Braga',
			'estadio' => 'Estádio Municipal de Braga',
			'localidade' => 'Braga',
			'pais' => 'Portugal'
		)
	);

	foreach ($clubes as $clube => $clubes) {
		echo "<h1>" .$clube. "</h1>";
		foreach ($clubes as $chave => $detalhe) {
			echo "<b>" .$chave. "</b> >>>> " .$detalhe. "<br>";
		}
	}

?>