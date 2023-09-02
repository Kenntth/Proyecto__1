<?php
$conexion1 = mysqli_connect("localhost","root","12345678","practica_proyecto1");

if($conexion1){
     echo "Conexion exitosa a Mysql<br/>";
}
else{
    echo "Error de conexión.";
}

$conexion2 = pg_connect("host=localhost port=5432 dbname=practica_proyecto1 user=postgres password=123456");
if (!$conexion2) {
    echo "Error de conexión.";
} else {
     echo "Conexión exitosa a Postgres";
}

?>

