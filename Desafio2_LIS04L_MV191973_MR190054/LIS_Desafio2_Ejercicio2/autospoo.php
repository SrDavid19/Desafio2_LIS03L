<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Venta de autos</title>
    <!--[if lt IE 9]>
 <script
src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
 <![endif]-->
</head>

<body style="background-color: #cdffeb">
<nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="img/new-php-logo.svg" alt="" width="50" height="30" class="d-inline-block align-text-top">
            Ejercicio 2 | Biblioteca
          </a>
        </div>
      </nav>
    <div class="container">
        <header>
            <h1>Inventario de Libros</h1>
        </header>
        <form action="autospoo.php" method="post">
        <div class="row d-flex justify-content-center">

        

        <div class="row">

            <div class="form-group ml-3">
                <label for="exampleFormControlInput1">Autor</label>
                <input type="text" class="form-control" name="autor" id="autor" placeholder="Autor del libro">
            </div>
            <div class="form-group ml-3">
                <label for="exampleFormControlInput1">Título del libro</label>
                <input type="text" class="form-control" name="titulo"  placeholder="Titulo Libro">
            </div>
            <div class="form-group ml-3">
                <label for="exampleFormControlInput1">No. Edicion del libro</label>
                <input type="text" class="form-control" name="edicion" id="edicion" placeholder="Edicion Libro">
            </div>
        </div>
        <div class="row">
            <div class="form-group ml-3">
                <label for="exampleFormControlInput1">Ciudad de publicacion</label>
                <input type="text" class="form-control" name="ciudad" id="autor" placeholder="Ciudad de publicacion,">
            </div>
            <div class="form-group ml-3">
                <label for="exampleFormControlInput1">Editorial</label>
                <input type="text" class="form-control" name="editorial" id="editorial" placeholder="Editorial Libro">
            </div>
            <div class="form-group ml-3">
                <label for="exampleFormControlInput1">Año de edicion</label>
                <input type="text" class="form-control" name="anioEdicion"  id="anioEdicion" placeholder="Año de edición">
            </div>
        </div>

        <div class="row">
            <div class="form-group ml-3">
                <label for="exampleFormControlInput1">Número de paginas</label>
                <input type="text" class="form-control" name="paginas" id="autor" placeholder="# de Paginas">
            </div>
            <div class="form-group ml-3">
                <label for="exampleFormControlInput1">Notas</label>
                <input type="text" class="form-control" name="notas"  id="notas" placeholder="Notas del Libro">
            </div>
            <div class="form-group ml-3">
                <label for="exampleFormControlInput1">ISBN</label>
                <input type="text" class="form-control" name="isbn" id="isbn" placeholder="ISBN del libro">
            </div>
        </div>


        

        </div>
        
        <div class="row d-flex justify-content-center mb-4">
            <input class="btn btn-success" name="guardarLibro" type="submit" value="Guardar Libro">
        </div>

        </form>
        

        <div class="row">
            <?php

            if (isset($_POST['guardarLibro'])) {
                
                
                include_once("auto.class.php");

                 $autor  = $_POST['autor'];
                 $titulo  = $_POST['titulo'];
                 $edicion =  $_POST['edicion'];
                 $publicacion  = $_POST['ciudad'];
                 $editorial =  $_POST['editorial'];
                 $anioEdicion  = $_POST['anioEdicion'];
                 $paginas =  $_POST['paginas'];
                 $notas  = $_POST['notas'];
                 $isbn  = $_POST['isbn'];

                 if(!isset($_SESSION['biblioteca'])){

                    $biblioteca = $_SESSION['biblioteca'];

                    $biblioteca[] = new libro($autor ,  $titulo,  $edicion,  $publicacion,  $editorial,  $anioEdicion,  $paginas,  $notas,  $isbn);
                
               

                        //Mostrando la tabla con los autos disponibles
                        for ($i = 0; $i < count($biblioteca); $i++) {

                            $biblioteca[$i]->mostrar();
                        }

                 }else{

                    $biblioteca[] = new libro($autor ,  $titulo,  $edicion,  $publicacion,  $editorial,  $anioEdicion,  $paginas,  $notas,  $isbn);
                
               

                        //Mostrando la tabla con los autos disponibles
                        for ($i = 0; $i < count($biblioteca); $i++) {

                            $biblioteca[$i]->mostrar();
                        }


                        $_SESSION['biblioteca'] = $biblioteca ;


                 }

                 
            
                
                

            }else{

            }
            
            ?>
        </div>
    </div>
</body>

</html>