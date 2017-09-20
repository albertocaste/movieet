<?php 
	if (isset($_POST["paso2"])) {
		$nombre = $_POST["nombre"];
		$email = $_POST["email"];
		$compemail = $_POST["compemail"];
		$pass = $_POST["pass"];
		$comppass = $_POST["comppass"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>movieet</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Ropa+Sans" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css">
	<style>
		input[type="checkbox"]{
		display: none;
	}	
	</style>
</head>
<body>
	<?php 
		if ($email == $compemail && $pass == $comppass) {
	?>
			<div class="container">
				<h1><b>movieet</b></h1>
				<div class="paso"><p>PASO <b>3</b>/3</p></div>
				<h2><b class="amarillo"><?=$nombre?></b>, creamos un perfil según tus gustos</h2>		
					<section>
						<form action="recoge_datos.php" method="post" id="form">
							<h3>Películas</h3>
							<input type="checkbox" id="inception" class="cbx-button" name="peli[]" value="inception"> <label for="inception" id="inception"><span></span></label>
							<input type="checkbox" id="cinema" class="cbx-button" name="peli[]" value="cinema"> <label for="cinema" id="cinema"><span></span></label>
							<input type="checkbox" id="toystory" class="cbx-button" name="peli[]" value="toystory"> <label for="toystory" id="toystory"><span></span></label>
							<input type="checkbox" id="juon" class="cbx-button" name="peli[]" value="juon"> <label for="juon" id="juon"><span></span></label>
							<input type="checkbox" id="padrino" class="cbx-button" name="peli[]" value="padrino"> <label for="padrino" id="padrino"><span></span></label>
							<input type="checkbox" id="orange" class="cbx-button" name="peli[]" value="orange"> <label for="orange" id="orange"><span></span></label>
							<input type="checkbox" id="manhattan" class="cbx-button" name="peli[]" value="manhattan"> <label for="manhattan" id="manhattan"><span></span></label>
							<input type="checkbox" id="deseando" class="cbx-button" name="peli[]" value="deseando"> <label for="deseando" id="deseando"><span></span></label> <br>
							<h3>Series</h3>
							<input type="checkbox" id="friends" class="cbx-button" name="serie[]" value="friends"> <label for="friends" id="friends"><span></span></label>
							<input type="checkbox" id="dead" class="cbx-button" name="serie[]" value="dead"> <label for="dead" id="dead"><span></span></label>
							<input type="checkbox" id="bad" class="cbx-button" name="serie[]" value="bad"> <label for="bad" id="bad"><span></span></label>
							<input type="checkbox" id="fargo" class="cbx-button" name="serie[]" value="fargo"> <label for="fargo" id="fargo"><span></span></label>
							<input type="checkbox" id="game" class="cbx-button" name="serie[]" value="game"> <label for="game" id="game"><span></span></label>
							<input type="checkbox" id="detective" class="cbx-button" name="serie[]" value="detective"> <label for="detective" id="detective"><span></span></label>
							<input type="checkbox" id="lost" class="cbx-button" name="serie[]" value="lost"> <label for="lost" id="lost"><span></span></label>
							<input type="checkbox" id="homeland" class="cbx-button" name="serie[]" value="homeland"> <label for="homeland" id="homeland"><span></span></label>
							<h3>Géneros</h3>
							<input type="checkbox" id="fantasy" class="cbx-button" name="genero[]" value="fantasy"> <label for="fantasy" id="fantasy"><span></span></label>
							<input type="checkbox" id="fiction" class="cbx-button" name="genero[]" value="fiction"> <label for="fiction" id="fiction"><span></span></label>
							<input type="checkbox" id="adventure" class="cbx-button" name="genero[]" value="adventure"> <label for="adventure" id="adventure"><span></span></label>
							<input type="checkbox" id="love" class="cbx-button" name="genero[]" value="love"> <label for="love" id="love"><span></span></label>
							<input type="checkbox" id="action" class="cbx-button" name="genero[]" value="action"> <label for="action" id="action"><span></span></label>
							<input type="checkbox" id="horror" class="cbx-button" name="genero[]" value="horror"> <label for="horror" id="horror"><span></span></label> <br>

							<input type="hidden" name="nombre" value="<?=$nombre?>">
							<input type="hidden" name="email" value="<?=$email?>">
							<input type="hidden" name="pass" value="<?=$pass?>">
							<input type="submit" class="btn btn-warning" name="paso3" value="Finalizar">
						</form>
					</section>
			</div>
	<?php
		} else if ($email != $compemail | $pass != $comppass) {
	?>
			<div class="container">
				<h3>Rellena el formulario correctamente.</h3>
			</div>
	<?php 
		}
	?>
</body>
</html>
<?php
	} else {
		header("Location:index.php");
	} 
?>
