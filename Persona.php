<?php
//El nombre de las clases por convención siempre empiezan con mayúscula
class Persona
{
//modificador de acceso -> private - public - protected
//publicos: se puede acceder desde cualquier archivo del proyecto
//privado: solo se accede desde la propia clase
//protected: clases vecinas - hijas (subclases)
//atributos de la clase Persona
//el identificador de los atributos se rigen con las normas de las variables (nombre, apellido, edad, etc..)
private $nombre;
private $apellido;
private $edad;

//lal forma de acceder a esos atributos privados es por medio de los métodos getter a setter
//los setter son los métodos que a través de el paso de parámetros se le asigna un valor cuando
//se instancia una clase
public function setNombre($name){
    //$this->nombre es atributo  y $name es el valor que se pasa cuando llama la función
    $this->nombre = $name;
}
public function setApellido($apellido){
    $this->apellido = $apellido;
}
public function setEdad($edad){
    $this->edad = $edad;
}


    public function getNombre()
    {
        return $this->nombre;
    }
    public function getApellido()
    {
        return $this->apellido;
    }
    public function getEdad()
    {
        return $this->edad;
    }


    //funciones
    public function pasarMayuscula($texto){
        return strtoupper($texto);
    }
    public function nombreCompleto(){
        return $this->nombre . " " . $this->apellido;
    }
    public function mostrarDatos(){
        echo "Nombre: " . $this->pasarMayuscula($this->nombre) . "<br>";
        echo "Apellido: " . $this->pasarMayuscula($this->apellido) . "<br>";
        echo "Edad: " . $this->edad . "<br>";
    }
}
//primero se verifica que tenemos datos para crear el objeto
if (isset($_GET["nombre"])&&isset($_GET["apellido"])&&isset($_GET["edad"])) {
    $personaF = new Persona();
    $personaF->setNombre($_GET["nombre"]);
    $personaF->setApellido($_GET["apellido"]);
    $personaF->setEdad($_GET["edad"]);
    $personaF->mostrarDatos();
}
?>


<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <?php
        //Creo un objeto llamado $persona1 de la clase Persona
        $persona1 = new Persona();
        $persona2 = new Persona();
        $persona1->setNombre("José Luis");
        $persona2->setNombre("Susana");
        $persona1->setApellido("Osorio");
        $persona1->setEdad(50);
        $persona2->setApellido("Angulo");
        $persona2->setEdad(52);
        echo "La persona 1 es " . $persona1->getNombre() . " ". $persona1->getApellido() . " y su edad es: ".$persona1->getEdad().
            " años" ."<br>" ;
        echo "La persona 2 es " . $persona2->getNombre() . " ". $persona2->getApellido() . " y su edad es: ".$persona2->getEdad().
            " años" ."<br>" ;
        echo "La persona 2 es ". $persona2->nombreCompleto()."<br>";
        echo "La persona 1 es ". $persona1->nombreCompleto();


    ?>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET"> <!--si no pones method="get" se sobreentiende que lo hace por get-->
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label for="apellido">Apellido:</label>
        <input type="text" id="apellido" name="apellido" required><br><br>

        <label for="edad">Edad:</label>
        <input type="number" id="edad" name="edad" required><br><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>
