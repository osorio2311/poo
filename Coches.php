<?php

// Definición de la clase Coche
class Coche {
    private $marca;
    private $modelo;
    private $kilometros;
    private $color;

    public function __construct($marca = '', $modelo = '', $kilometros = 0, $color = '') {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->kilometros = $kilometros;
        $this->color = $color;
    }

    // Getters
    public function getMarca() {
        return $this->marca;
    }

    public function getModelo() {
        return $this->modelo;
    }

    public function getKilometros() {
        return $this->kilometros;
    }

    public function getColor() {
        return $this->color;
    }

    // Setters
    public function setMarca($marca) {
        $this->marca = $marca;
    }

    public function setModelo($modelo) {
        $this->modelo = $modelo;
    }

    public function setKilometros($kilometros) {
        $this->kilometros = $kilometros;
    }

    public function setColor($color) {
        $this->color = $color;
    }

    // Método para mostrar datos
    public function mostrarDatos() {
        echo "<div>";
        echo "<h2>Información del Coche</h2>";
        echo "<p><span>Marca:</span> " . $this->getMarca() . "</p>";
        echo "<p><span>Modelo:</span> " . $this->getModelo() . "</p>";
        echo "<p><span>Kilómetros:</span> " . $this->getKilometros() . "</p>";
        echo "<p><span>Color:</span> " . $this->getColor() . "</p>";
        echo "</div>";
    }
}

// Procesar el formulario si se ha enviado
$miCoche = null;
if (isset($_GET['marca']) && isset($_GET['modelo']) && isset($_GET['kilometros']) && isset($_GET['color'])) {
    $marca = $_GET['marca'];
    $modelo = $_GET['modelo'];
    $kilometros = $_GET['kilometros'];
    $color = $_GET['color'];

    // Crear una nueva instancia de Coche usando los setters
    $miCoche = new Coche();
    $miCoche->setMarca($marca);
    $miCoche->setModelo($modelo);
    $miCoche->setKilometros($kilometros);
    $miCoche->setColor($color);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Coche</title>
</head>
<body>
<div class="container">
    <!-- Mostrar datos del coche, si ya se han enviado -->
    <?php
    if ($miCoche) {
        $miCoche->mostrarDatos();
    }
    ?>

    <!-- Formulario para ingresar los datos del coche -->
    <h2>Formulario para Registrar un Coche</h2>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
        <label for="marca">Marca:</label>
        <input type="text" id="marca" name="marca" required>

        <label for="modelo">Modelo:</label>
        <input type="text" id="modelo" name="modelo" required>

        <label for="kilometros">Kilómetros:</label>
        <input type="number" id="kilometros" name="kilometros" required>

        <label for="color">Color:</label>
        <input type="text" id="color" name="color" required>

        <button type="submit">Registrar Coche</button>
    </form>
</div>
</body>
</html>


