<?php

	$numeros = array(
		'num_1' => 1,
		'num_2' => 10,
		'num_3' => 100 
	);

	echo "Impresión por pantalla de array en bucle foreach <br>";

	foreach ($numeros as $key => $value) {
		echo "Indice: " . $key . "; Valor: " . $value . "<br>";
	}

?>