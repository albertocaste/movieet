<?php 
	if (isset($_POST["paso1"])) {
		$nombre = $_POST["nombre"];
		$email = $_POST["email"];
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
</head>
<body>
	<div class="container">
		<h1><b>movieet</b></h1>
			<div class="paso"><p>PASO <b>2</b>/3</p></div>
			<h2>Hola <b class="amarillo"><?=$nombre?></b>!</h2> <br>
				<section>
					<form action="paso3.php" method="post" id="form">
						<div class="input-group input-group-lg">
								<span class="input-group-addon">Comprobación de email</span>
								<input type="email" class="form-control" name="compemail" id="compemail" placeholder="Vuelve a escibirnos tú email" required>
							</div>
						<br>
						<div class="input-group input-group-lg">
								<span class="input-group-addon">Nick</span>
								<input type="text" class="form-control" name="nick" id="nick" placeholder="Elige un nick que te identifique" required>
						</div>
						<br>
						<div class="input-group input-group-lg">
								<span class="input-group-addon">Password</span>
								<input type="password" class="form-control" name="pass" id="pass" placeholder="Escribe aquí tu password" required>
						</div>
						<br>
						<div class="input-group input-group-lg">
								<span class="input-group-addon">Comprobación de password</span>
								<input type="password" class="form-control" name="comppass" id="comppass" placeholder="Repítela!" required>
						</div>
						<br>
						<input type="hidden" name="nombre" value="<?=$nombre?>">
						<input type="hidden" name="email" value="<?=$email?>">
						<input type="submit" class="btn btn-warning" name="paso2" value="Seguir">
					</form>
				</section>
		</div>
</body>
</html>
<?php
	} else {
		header("Location:index.php");
	}
?>


