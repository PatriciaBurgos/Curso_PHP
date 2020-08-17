<?php

	//Operadores lógicos
	//< > <= >= != ==

	$num_1 = 2;
	$num_2 = 4;

	echo "OPERADORES LÓGICOS <br>";
	echo "Numero 1: " . $num_1 . "<br>";
	echo "Numero 2: " . $num_2 . "<br>";


	//Mayor que
	if ($num_1 > $num_2) {
		echo $num_1 . " es mayor que " . $num_2;
	}else{
		echo $num_1 . " no es mayor que " . $num_2;
	}

	echo "<br>";

	//Menor que
	if ($num_1 < $num_2) {
		echo $num_1 . " es menor que " . $num_2;
	}else{
		echo $num_1 . " no es menor que " . $num_2;
	}

	echo "<br>";

	//Mayor o igual que
	if ($num_1 >= $num_2) {
		echo $num_1 . " es mayor o igual que " . $num_2;
	}else{
		echo $num_1 . " no es mayor o igual que " . $num_2;
	}

	echo "<br>";

	//Menor o igual que
	if ($num_1 <= $num_2) {
		echo $num_1 . " es menor o igual que " . $num_2;
	}else{
		echo $num_1 . " no es menor o igual que " . $num_2;
	}

	echo "<br>";

	//Distinto que
	if ($num_1 != $num_2) {
		echo $num_1 . " es distinto que " . $num_2;
	}else{
		echo $num_1 . " no es distinto que " . $num_2;
	}

	echo "<br>";

	//Igual que
	if ($num_1 == $num_2) {
		echo $num_1 . " es igual que " . $num_2;
	}else{
		echo $num_1 . " no es igual que " . $num_2;
	}

	echo "<br>";
?>