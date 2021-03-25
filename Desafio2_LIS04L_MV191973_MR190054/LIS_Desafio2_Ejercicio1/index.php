<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="css/css.css">
    <title>Desafío 2 - Ejercicio 1</title>
</head>
<body style="background-color: #cdffeb">
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="img/new-php-logo.svg" alt="" width="50" height="30" class="d-inline-block align-text-top">
            Ejercicio 1 | Academia de Idiomas
          </a>
        </div>
      </nav>
      <?php 
      include 'matriz1.php';
      include 'matriz2.php';
      include 'matriz3.php';
      ?>
      
      <div class="content">
      <!--Tabla 1 | Sintaxis basada en Indices -->
      <p>//Creación de la matriz multidimencional a partir de indices</p>
      <table class="table table-dark table-hover">
        <thead>
            <tr>
              <th scope="col"></th>
              <th scope="col">Inglés</th>
              <th scope="col">Francés</th>
              <th scope="col">Alemán</th>
              <th scope="col">Ruso</th>
              <th scope="col">Chino</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">Básico</th>
              <td><?php echo $matriz1[0][0] ?></td>
              <td><?php echo $matriz1[0][1] ?></td>
              <td><?php echo $matriz1[0][2] ?></td>
              <td><?php echo $matriz1[0][3] ?></td>
              <td><?php echo $matriz1[0][4] ?></td>
            </tr>
            <tr>
              <th scope="row">Intermedio</th>
              <td><?php echo $matriz1[1][0] ?></td>
              <td><?php echo $matriz1[1][1] ?></td>
              <td><?php echo $matriz1[1][2] ?></td>
              <td><?php echo $matriz1[1][3] ?></td>
              <td><?php echo $matriz1[1][4] ?></td>
            </tr>
            <tr>
              <th scope="row">Avanzado</th>
              <td><?php echo $matriz1[2][0] ?></td>
              <td><?php echo $matriz1[2][1] ?></td>
              <td><?php echo $matriz1[2][2] ?></td>
              <td><?php echo $matriz1[2][3] ?></td>
              <td><?php echo $matriz1[2][4] ?></td>
            </tr>
          </tbody>
      </table>

       <!--Tabla 2 | Sintaxis basada en el uso anidado de la palabra Array -->
       <p>//Creación de la matriz multidimencional a partir del uso anidado del Array</p>
      <table class="table table-dark table-hover">
        <thead>
            <tr>
              <th scope="col"></th>
              <th scope="col">Inglés</th>
              <th scope="col">Francés</th>
              <th scope="col">Alemán</th>
              <th scope="col">Ruso</th>
              <th scope="col">Chino</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">Básico</th>
              <td><?php echo $matriz2[0][0] ?></td>
              <td><?php echo $matriz2[0][1] ?></td>
              <td><?php echo $matriz2[0][2] ?></td>
              <td><?php echo $matriz2[0][3] ?></td>
              <td><?php echo $matriz2[0][4] ?></td>
            </tr>
            <tr>
              <th scope="row">Intermedio</th>
              <td><?php echo $matriz2[1][0] ?></td>
              <td><?php echo $matriz2[1][1] ?></td>
              <td><?php echo $matriz2[1][2] ?></td>
              <td><?php echo $matriz2[1][3] ?></td>
              <td><?php echo $matriz2[1][4] ?></td>
            </tr>
            <tr>
              <th scope="row">Avanzado</th>
              <td><?php echo $matriz2[2][0] ?></td>
              <td><?php echo $matriz2[2][1] ?></td>
              <td><?php echo $matriz2[2][2] ?></td>
              <td><?php echo $matriz2[2][3] ?></td>
              <td><?php echo $matriz2[2][4] ?></td>
            </tr>
          </tbody>
      </table>
      
      <!--Tabla 3 | Sintaxis basada los dos tipos anteriores-->
      <p>//Creación de la matriz multidimencional combinado</p>
      <table class="table table-dark table-hover">
        <thead>
            <tr>
              <th scope="col"></th>
              <th scope="col">Inglés</th>
              <th scope="col">Francés</th>
              <th scope="col">Alemán</th>
              <th scope="col">Ruso</th>
              <th scope="col">Chino</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">Básico</th>
              <td><?php echo $matriz3[0][0] ?></td>
              <td><?php echo $matriz3[0][1] ?></td>
              <td><?php echo $matriz3[0][2] ?></td>
              <td><?php echo $matriz3[0][3] ?></td>
              <td><?php echo $matriz3[0][4] ?></td>
            </tr>
            <tr>
              <th scope="row">Intermedio</th>
              <td><?php echo $matriz3[1][0] ?></td>
              <td><?php echo $matriz3[1][1] ?></td>
              <td><?php echo $matriz3[1][2] ?></td>
              <td><?php echo $matriz3[1][3] ?></td>
              <td><?php echo $matriz3[1][4] ?></td>
            </tr>
            <tr>
              <th scope="row">Avanzado</th>
              <td><?php echo $matriz3[2][0] ?></td>
              <td><?php echo $matriz3[2][1] ?></td>
              <td><?php echo $matriz3[2][2] ?></td>
              <td><?php echo $matriz3[2][3] ?></td>
              <td><?php echo $matriz3[2][4] ?></td>
            </tr>
          </tbody>
      </table>

      </div>      
      

</body>
</html>