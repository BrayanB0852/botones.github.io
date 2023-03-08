<?php
	include("conexion.php");
	$sql = "SELECT * FROM Alumno";
  $resultado = $conexion -> query($sql);
?>

<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tabla conectada a BD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>

<body>

    <table class="table">

        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido Paterno</th>
            <th scope="col">Apellido Materno</th>
            <th scope="col">Matricula</th>
            <th scope="col">Carrera</th>
            <th scope="col">Grado</th>
          </tr>
        </thead>

        <?php  
		      while( $row = $resultado -> fetch_assoc()) { 
        ?>

        <tbody>
          <tr>
            <td scope="row"> <?php echo $row["id"]?> </td>
            <td> <?php echo $row["Nombre"]?> </td>
            <td> <?php echo $row["ApellidoP"]?> </td>
            <td> <?php echo $row["ApellidoM"]?> </td>
            <td> <?php echo $row["Matricula"]?> </td>
            <td> <?php echo $row["Carrera"]?> </td>
            <td> <?php echo $row["Grado"]?> </td>
          </tr>
        </tbody>

        <?php } 

        $resultado -> free_result();

        $conexion -> close();
  
        ?>
      </table>
      
      <button type="button" class="btn btn-outline-danger">
        <a class="nav-link" href="#">Inicio</a>
      </button>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>

</html>
