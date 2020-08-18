<?php

	$usuario_edad = 22;
	$default_edad = 18;

	if ($usuario_edad >= $default_edad) {
		echo "Mostrar contenido";
	} else{
		echo "No se puede mostrar el contenido porque no eres mayor de edad";
	}

?>