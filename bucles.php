<?php

	echo "Bucle for <br>";

	for ($i=0; $i < 10; $i++) { 
		echo $i . "<br>";
	}

	echo "<br> Bucle while <br>";

	$i = 0;

	while ($i < 10) {
		echo $i . "<br>";
		$i++;
	}

	echo "<br> Bucle do while <br>";

	$i = 0;
	
	do{
		echo $i . "<br>";
		$i++;
	}while ($i < 10); 	

?>