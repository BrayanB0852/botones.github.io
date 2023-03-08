<?php $conexion = mysqli_connect("localhost", "id20415918_brayan4", "uFhtesP5&2TryLAqk52A", "id20415918_basetopicos4");

	if ($conexion -> connect_errno) {
		echo "Falló al conectar a MySQL: " . $conexion -> connect_error;
		exit();
	  }
?>
