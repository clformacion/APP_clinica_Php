<?php include 'log/header.php'?>
<?php

$conexion = mysqli_connect("localhost","root","","clinica") or die("problemas con la conexion");

$registros = mysqli_query($conexion, "SELECT codigo FROM pacientes WHERE codigo= $_REQUEST[codigo] ") or die("problema en el selet" . mysqli_error($conexion));

if($reg=mysqli_fetch_array($registros)){
mysqli_query($conexion, "DELETE from pacientes WHERE codigo='$_REQUEST[codigo]'")or die("problemas en el select: " . mysqli_error($conexion));



echo "SE ELIMINO EL REGISTRO";



} else {
    echo "NO EXISTE EL REGISTRO A ELIMINAR";
}
mysqli_close($conexion);

?>