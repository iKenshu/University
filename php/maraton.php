<?php 
	$edad = $_POST["edad"];
	$tiempo = $_POST["tiempo"];
	$sexo = $_POST["sexo"];

	if ($sexo == M) {
		if ($tiempo <= 180) {
			echo "Esta Seleccionada";
		}else{
			echo "No fue Seleccionada";
		}
	}else{
		if ($edad <= 40) {
			if ($tiempo <= 150) {
				echo "Esta seleccionado para la carrera";
			}else{
				echo "No fue seleccionado";
			}
		}else{
			if ($tiempo >= 175) {
				echo "Esta seleccionado para la carrera";
			}else{
				echo "No fue seleccionado";
			}
		}
	}
 ?>