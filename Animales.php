<?php

class Animales
{
private $nombre;
private $peso;
private $edad;
private $raza;

//Método constructor

    /**
     * @param $nombre
     * @param $peso
     * @param $edad
     * @param $raza
     */
    public function __construct($nombre, $peso, $edad, $raza)
    {
        $this->nombre = $nombre;
        $this->peso = $peso;
        $this->edad = $edad;
        $this->raza = $raza;
    }

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param mixed $nombre
     */
    public function setNombre($nombre): void
    {
        $this->nombre = $nombre;
    }

    /**
     * @return mixed
     */
    public function getPeso()
    {
        return $this->peso;
    }

    /**
     * @param mixed $peso
     */
    public function setPeso($peso): void
    {
        $this->peso = $peso;
    }

    /**
     * @return mixed
     */
    public function getEdad()
    {
        return $this->edad;
    }

    /**
     * @param mixed $edad
     */
    public function setEdad($edad): void
    {
        $this->edad = $edad;
    }

    /**
     * @return mixed
     */
    public function getRaza()
    {
        return $this->raza;
    }

    /**
     * @param mixed $raza
     */
    public function setRaza($raza): void
    {
        $this->raza = $raza;
    }
    public function mostrarDatos(){
        return "Nombre del Animal: ".$this->nombre. " Edad: ". $this->edad. " Raza: ". $this->raza. " y Pesa: ". $this->peso. " Kilos.";
    }
}
$miPerro=new Animales(nombre:"Misifu",peso:4,edad:8,raza:"Agora Turco");
echo $miPerro->mostrarDatos();//tomamos lo que retorna el metodo mostrarDatos
echo $miPerro->getEdad();//tomar solo un dato
//como se la clase que esta utilizando el objeto ->getClass()
echo "<br>La clase que usa para miPerro es: " . get_class($miPerro);
