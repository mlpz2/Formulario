
<?php
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

// Obtiene los datos del formulario
$ciudad = $_GET['ciudad'];
$pais = $_GET['pais'];
$idioma = $_GET['idioma'];
$poblacion = $_GET['poblacion'];

// Prepara la consulta SQL
$sql = "INSERT INTO country (ciudad, pais, idioma, poblacion) VALUES ('$cityName', '$countryName', '$language', '$poblation')";

// Ejecuta la consulta SQL
if ($conn->query($sql) === true) {
    echo "Datos guardados correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Cierra la conexión
$conn->close();
?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

<button type="button" class="btn btn-primary"><a href="https://mlpz2.github.io/Formulario/index.html"><i class="fa fa-home"></i>Inicio</a></button>
<button type="button" class="btn btn-primary"><a href="javascript:history.back()">Ir atras</a></button>
