<?php 
	if (isset($_POST["paso3"])) {
		$nombre = $_POST["nombre"];
		$email = $_POST["email"];
		$pass = $_POST["pass"];
		$genero = $_POST["genero"];
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
		<h2>Tus datos se han subido correctamente!</h2>

		<p>Nombre: <b class="amarillo"><?=$nombre?></b></p>
		<p>Email: <b class="amarillo"><?=$email?></b></p>
		<p>Password: <b class="amarillo"><?=$pass?></b></p>
		<p>Películas: <b class="amarillo">
			<?php 
				if (isset($_POST["peli"])) {
					$peli = $_POST["peli"];
					foreach ($peli as $i => $itempeli) {
						echo $itempeli . "<br>";
					}
				} else{
					echo "No se ha seleccionado ninguna película";
				}
			?></b></p>
		<p>Series: <b class="amarillo">
			<?php 
				if (isset($_POST["serie"])) {
					$serie = $_POST["serie"];
					foreach ($serie as $y => $itemserie){
						echo "No se ha seleccionado ninguna serie";
					}
				} else{
					echo "No se ha seleccionado ninguna serie";
				}
			?></b></p>
		<p>Géneros: <b class="amarillo">
			<?php 
				if (isset($_POST["genero"])) {
					foreach ($genero as $k => $itemgenero) {
						echo $itemgenero . "<br>";
					}
				} else{
					echo "No se ha seleccionado ningún género";
				}
			?></b></p>
	</div>	
</body>
</html>
<?php 
	} else {
		header("Location:index.php");
	} 
?>



