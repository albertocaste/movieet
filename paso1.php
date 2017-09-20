<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>movieet</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Ropa+Sans" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet"> 
</head>
<body>
	<div class="container">
		<h1><b>movieet</b></h1>
		<div class="paso"><p>PASO <b>1</b>/3</p></div>
		<h2>Empecemos!</h2>	
		<section>
			<form action="paso2.php" method="post">
				<div class="input-group input-group-lg">
					<span class="input-group-addon">Nombre</span>
					<input type="text" class="form-control" name="nombre" id="nombre" placeholder="Escribe aquí tu nombre" required>
				</div>
				<br>
				<div class="input-group input-group-lg">
					<span class="input-group-addon">Email</span>
					<input type="email" class="form-control" name="email" id="email" placeholder="Escribe aquí tu email" required>
				</div>
				<br>
				<input type="checkbox" name="acepto" id="acepto" required>  Acepto los términos y condiciones del servicio y la política de protección de datos.
				<br> <br>
				<input type="submit" class="btn btn-warning" name="paso1" value="Seguir">
			</form>		
		</section>
	</div>
</body>
</html>


