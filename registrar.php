<?php
include("conexion.php");

if (isset($_POST['inserccion']) || isset($_POST['actualizacion']) || isset($_POST['eliminacion'])) {
    $dpi = $_POST['dpi'];
    $primer_nombre = $_POST['primer_nombre'];
    $segundo_nombre = $_POST['segundo_nombre'];
    $primer_apellido = $_POST['primer_apellido'];
    $segundo_apellido = $_POST['segundo_apellido'];
    $direccion = $_POST['direccion'];
    $tel = $_POST['tel'];
    $celular = $_POST['celular'];
    $salario = $_POST['salario'];
    $bonificacion = $_POST['bonificacion'];

    if (
        strlen($_POST['dpi']) >= 1 &&
        strlen($_POST['primer_nombre']) >= 0 && strlen($_POST['segundo_nombre']) >= 0 && strlen($_POST['primer_apellido']) >= 0 && strlen($_POST['segundo_apellido']) >= 0 &&
        strlen($_POST['direccion']) >= 0 && strlen($_POST['tel']) >= 0 &&
        strlen($_POST['celular']) >= 0 && strlen($_POST['salario']) >= 0 &&
        strlen($_POST['bonificacion']) >= 0
    ) {
            if (isset($_POST['inserccion'])) {
                $consulta = "INSERT INTO empleado (dpi, primer_nombre, segundo_nombre, primer_apellido, segundo_apellido, direccion, tel, celular, salario, bonificacion)
                 VALUES ('$dpi', '$primer_nombre', '$segundo_nombre', '$primer_apellido', '$segundo_apellido', '$direccion', '$tel', '$celular', '$salario', '$bonificacion')";
                $resultadoMySQL = mysqli_query($conexion1, $consulta);
                $resultadoPg = pg_query($conexion2, $consulta);
                
                if ($resultadoMySQL) {
                    echo "<h3 class='ok'>Informacion Guardada exitosamente en Mysql</h5>";
                } else {
                    echo "<h3 class='bad'>Error en MySQL</h5>";
                } 
                if ($resultadoPg) {
                    echo "<h3 class='ok'>Informacion Guardada exitosamente en Postgres</h5>";
                } else {
                    echo "<h3 class='bad'>Error en MySQL</h5>";
                } 
            }
            
        if (isset($_POST['actualizacion'])) {
            $Update = "UPDATE empleado SET 
            primer_nombre = '$primer_nombre', segundo_nombre = '$segundo_nombre', primer_apellido = '$primer_apellido', segundo_apellido = '$segundo_apellido', direccion = '$direccion', 
            tel = '$tel', celular = '$celular', salario = '$salario', bonificacion = '$bonificacion' WHERE dpi = '$dpi'";
    
            $UpdateMySQL = mysqli_query($conexion1, $Update);
            $UpdatePostgres = pg_query($conexion2, $Update);
            
            if ($UpdateMySQL) {
                echo "<h3 class='ok'>Registro actualizado en Mysql</h5>";
            } else {
                echo "<h3 class='bad'>Error al actualizar</h3>";
            }

            if ($UpdatePostgres) {
                echo "<h3 class='ok'>Registro actualizado en Postgres</h5>";
            } else {
                echo "<h3 class='bad'>Error al actualizar</h5>";
            }
            }
            
            if (isset($_POST['eliminacion'])) {
                $Delete = "DELETE FROM empleado WHERE dpi = '$dpi'";
                $DeleteMySQL = mysqli_query($conexion1, $Delete);
                $DeletePostgres = pg_query($conexion2, $Delete);
                
                if ($DeleteMySQL) {
                    echo "<h3 class='ok'>Registro eliminado de Mysql</h5>";
                } else {
                    echo "<h3 class='bad'>Error al eliminar</h3>";
                }

                if ($DeletePostgres) {
                    echo "<h3 class='ok'>Registro eliminado de Pstgrest</h5>";
                } else {
                    echo "<h3 class='bad'>Error al eliminar</h5>";
                }
            }             
        }


    }
?>