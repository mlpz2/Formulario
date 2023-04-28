<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Formulario</title>
       <!-- CSS de Bootstrap -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<h1>Formulario</h1>
		<form action="guardar.php" method="post">
			<div class="form-group">
				<label for="ciudad">Ciudad:</label>
				<input type="text" class="form-control" id="ciudad" name="ciudad">
			</div>
			<div class="form-group">
				<label for="pais">País:</label>
				<input type="text" class="form-control" id="pais" name="pais">
			</div>
			<div class="form-group">
				<label for="idioma">Idioma:</label>
				<input type="text" class="form-control" id="idioma" name="idioma">
			</div>
			<button type="submit" class="btn btn-primary">Guardar</button>
		</form>
	</div>
	<!-- JS de Bootstrap (requiere jQuery) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
