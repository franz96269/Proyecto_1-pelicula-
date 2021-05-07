<!--Conexion a la base de datos para poder eliminar los datos correspondientes-->
<?php
    $con = mysqli_connect ('localhost','root','','peliculas') or die ('Error en la conexion del servidor');
    $id= $_POST['id'];
    $query = "DELETE FROM pelicula WHERE id = $id;";
    $res = mysqli_query($con, $query);
    /*Anuncion de que se han eliminado los datos correctamente*/

    echo'<script type="text/javascript">
        alert("Borrado correctamente");
        window.location.href="informe.php";
        </script>';
		?>
?>