

<?php

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

<button type="button" class="btn btn-primary"><a href="https://mlpz2.github.io/"><i class="fa fa-home"></i>Inicio</a></button>
<button type="button" class="btn btn-primary"><a href="javascript:history.back()">Ir atras</a></button>
<button type="button" class="btn btn-primary"><a href="https://mlpz2.github.io/formulario/consulta.php"><i class="fa fa-home"></i>Inicio</a></button>



$servername = "localhost:3306";
$username = "workbench";
$password = "ninguna";
$dbname = "world";

// Crea la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Prepara la consulta SQL
$consultaSQL = "INSERT INTO country (ciudad, pais, idioma, poblacion) VALUES ('$cityName', '$countryName', '$language', '$poblation')";
// Ejecuta la consulta SQL
$resultado = $conn->query($consultaSQL);

// Muestra los datos
if ($resultado->num_rows > 0) {
    while($fila = $resultado->fetch_assoc()) {
        echo "Ciudad: " . $fila["ciudad"] . " - País: " . $fila["pais"] . " - Idioma: " . $fila["idioma"] . " - Población: " - $fila["poblacion"] - "<br>";
    }
} else {
    echo "No se encontraron datos";
}

// Cierra la conexión
$conn->close();
?>
