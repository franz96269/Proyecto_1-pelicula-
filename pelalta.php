<?php
$con = mysqli_connect ('localhost','root','','peliculas') or die ('Error en la conexion del servidor');
$sql = "INSERT INTO pelicula VALUES (null,'".$_POST["Pelicula"]."','".$_POST["Director"]."','".$_POST["Anio"]."','".$_POST["Protagonistas"]."','".$_POST["Genero"]."')";

$resultado = mysqli_query ($con, $sql) or die ('Error en el query de la base de datos');
mysqli_close ($con);
/*Anuncion de que se han insertado los datos correctamente*/
echo'<script type="text/javascript">
        alert("Guardado correctamente");
        window.location.href="informe.php";
        </script>';
		?>


