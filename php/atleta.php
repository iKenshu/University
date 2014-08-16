<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Atleta</title>
</head>
<body>
	<?php 
		$edad = $_POST['textedad'];
		$tiempo = $_POST['texta'];
		$sexo = $_POST['Sexo'];

		if ($sexo == Mujer) {
			if ($tiempo <= 180) {
				echo "Esta Seleccionada";
			}else{
				echo "No fue Seleccionada";
			}
		}else{
			if ($edad <= 40) {
				if ($tiempo > 150) {
					echo "Esta selecionada";
				}else{
					echo "No esta seleccionada";
				}
			}else{
				if ($tiempo >= 175) {
					echo "Felicidades esta seleccionado para el maraton!";
				}else{
					echo "Lástima, no fue seleccionado. ";
				}
			}
		}
	 ?>
<form name='php' method="POST" action="">
	Edad: <input type="text">
	Tiempo Anterior: <input type="text">
	<select name="select">
		<option>Hombre</option>
		<option>Mujer</option>
	</select>
	<input type="buttom" value="Evaluar">
</form>
</body>
</html>