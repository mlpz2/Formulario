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
$ciudad = $_POST['ciudad'];
$pais = $_POST['pais'];
$idioma = $_POST['idioma'];

// Prepara la consulta SQL
$sql = "INSERT INTO datos (ciudad, pais, idioma) VALUES ('$ciudad', '$pais', '$idioma')";

// Ejecuta la consulta SQL
if ($conn->query($sql) === TRUE) {
    echo "Datos guardados correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Cierra la conexión
$conn->close();

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
$sql = "SELECT * FROM datos";

// Ejecuta la consulta SQL
$resultado = $conn->query($sql);

// Muestra los datos
if ($resultado->num_rows > 0) {
    while($fila = $resultado->fetch_assoc()) {
        echo "Ciudad: " . $fila["ciudad"] . " - País: " . $fila["pais"] . " - Idioma: " . $fila["idioma"] . "<br>";
    }
} else {
    echo "No se encontraron datos";
}

// Cierra la conexión
$conn->close();
?>
