<?php
//Definición de la clase
class libro
{
    //Propiedades de la clase auto
    private $autor;
    private $titulo;
    private $edicion;
    private $publicacion;
    private $editorial;
    private $anioEdicion;
    private $paginas;
    private $notas;
    private $isbn;


    function __construct($autor='',$titulo='',$edicion='',$publicacion='',$editorial='',$anioEdicion='',$paginas='',$notas='',$isbn=''){
       
    $this->autor = $autor;
    $this->titulo = $titulo;
    $this->edicion = $edicion;
    $this->publicacion = $publicacion;
    $this->editorial = $editorial;
    $this->anioEdicion = $anioEdicion;
    $this->paginas = $paginas;
    $this->notas = $notas;
    $this->isbn = $isbn;



    }

   
    //Métodos de la clase
    function mostrar()
    {
        //El método mostrar() crea una tabla HTML donde semuestran
        //los detalles del objeto auto, como la marca, una imagen,
        //el modelo y el color del auto.
        $tabla = "<div class='col-4 mb-3'>";
        $tabla .= "<div class='card'>";
        $tabla .= "<div class='card-header'>" . $this->titulo . "</div>";
        $tabla .= "<div class='card-body'>";
        $tabla .= "<h5 class='card-title'> Autor:" . $this->autor . "</h5>";
        $tabla .= "<p class='card-text'> Editorial:" . $this->editorial. "</p><br>";
        $tabla .= "<p class='card-text'> Año Edicion:" . $this->anioEdicion. "</p><br>";
        $tabla .= "<p class='card-text'> # Edición:" . $this->edicion. "</p><br>";
        $tabla .= "<p class='card-text'> Número de paginas:" . $this->paginas. "</p><br>";
        $tabla .= "<p class='card-text'> Ciudad:" . $this->publicacion. "</p><br>";
        $tabla .= "<p class='card-text'> ISBN:" . $this->isbn. "<br>";
        $tabla .= "Notas:" . $this->notas . "</p>";
        $tabla .= "</div>";
        $tabla .= "</div>";
        $tabla .= "</div>";
        echo $tabla;
    }


}
